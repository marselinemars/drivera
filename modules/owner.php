<?php

switch($vars['action']){

    
   case "owner_profile":{

        $items = $db->query('SELECT * FROM theowner ')->fetchAll();

        include("view/profile.php");

        exit;

    }break;


    case "register":{
        
        include("view/register.php");

        exit;
    }break;
    
    case "do_register":{

         $ret=owner_process_register($vars);
         
         if ($ret['status']==1){
            header("location: index.php?action=dashboard"); 
         }else{
            header("location: index.php?action=register&error_message=".urlencode($ret['error']));
         }
         exit;
    }break;

    
}

?>