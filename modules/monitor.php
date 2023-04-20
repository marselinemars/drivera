<?php

switch($vars['action']){

    
   case "list_monitors":{

        $items = $db->query('SELECT * FROM monitor')->fetchAll();
        
        
        include("view/monitors.php");

        exit;
    }break;



    case "add_monitor":{

        include("view/AddMonitor.php");
        exit;        
        
    }break;
    
    case "do_add_monitor":{

        $ret=monitor_add($vars);

       print_r($ret); 
        if ($ret['status']==1){

           header("location: index.php?action=list_monitors"); 

        }else{
           
           header("location: index.php?action=add_monitor&error_message=".urlencode($ret['error']));
       

       }

        exit;        
    }break;
    
    case "delete":{
        //some code here to edit and save...
        exit;
    }break;

    
}

?>