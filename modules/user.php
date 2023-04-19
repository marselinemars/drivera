<?php

switch($vars['action']){
    

    case "login":{

        include("view/login.php");
        exit;

    }break;    

    case "do_login":{

        print_r($vars);

         $ret=user_process_login($vars);
        print_r($ret); 
         if ($ret['status']==1){

            header("location: index.php?action=dashboard"); 

         }else{
            
            header("location: index.php?action=login&error_message=".urlencode($ret['error']));
        

        }
         
         exit;        
    }break;    
    
    case "logout":{
	    setcookie("app_email", "" , -1,"/");
	    setcookie("app_pass", "", -1,"/");        
	    header("location: index.php?action=login"); 
	    exit;
    }break;    
    
}
?>