<?php

include("init.php");


$public_actions=array('do_login','register','do_register');

//non-logged user are forced to the login page...
if ($appuser==0  and !in_array($vars['action'],$public_actions)){
	$vars['action']='login';
}elseif(is_array($appuser) and !isset($vars['action'])){
    $vars['action']='dashboard';
}



include("modules/user.php");



//Modules to be accessed only by logged users...


if (is_array($appuser)){
include("modules/student.php");
include("modules/owner.php");
include("modules/monitor.php");

}



?>


