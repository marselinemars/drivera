<?php

switch($vars['action']){

    
   case "list_student":{

        $items = $db->query('SELECT * FROM students')->fetchAll();
        
        
        include("view/datatable.php");

        exit;
    }break;



    case "add_student":{

        include("view/form-basic.php");
        exit;        
        
    }break;
    
    case "do_add_student":{

        $ret=student_add($vars);

       print_r($ret); 
        if ($ret['status']==1){

           header("location: index.php?action=list_student"); 

        }else{
           
           header("location: index.php?action=add_student&error_message=".urlencode($ret['error']));
       

       }

        exit;        
    }break;
    
    case "delete":{
        //some code here to edit and save...
        exit;
    }break;

    
}

?>