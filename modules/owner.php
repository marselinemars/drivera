<?php

switch($vars['action']){

    
   case "owner_profile":{

        $items = $db->query('SELECT * FROM theowner ')->fetchAll();

        include("view/profile.php");

        exit;

    }break;


    
}

?>