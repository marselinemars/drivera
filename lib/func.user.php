<?php

function user_get_logged_user(){
    global $db,$appuser;
    
    $appuser=0;
    if (isset($_COOKIE['app_email']) and strlen($_COOKIE['app_email'])>0){		

		if($_COOKIE['isowner']==1){

		$items = $db->query("SELECT * FROM theowner WHERE LOWER(email) = ? and pass= ?",$_COOKIE['app_email'], $_COOKIE['app_pass'])->fetchAll();
		if (count($items)>0){

			$appuser=$items[0];	
		}


		}else{


		$items = $db->query("SELECT * FROM monitor WHERE LOWER(email) = ? and pass= ?",$_COOKIE['app_email'], $_COOKIE['app_pass'])->fetchAll();
		if (count($items)>0){
			$appuser=$items[0];	
		}


		}
		
	}
    return $appuser;
    
}
    
function user_process_login($vars){
    global $db;

	$ret['status']=0;
	$ret['error']='';
	
	$vars['email']=trim(strtolower($vars['email']));
	
    if (strlen($ret['error'])==0 and strlen($vars['email'])==0) {
        $ret['error']="You need to provide an email.";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['pass'])==0) {
        $ret['error']="The password should be filled.";
        return $ret;
    }

    if (strlen($ret['error'])>0)return  $ret;
    
	if ($vars['options']=='owner'){
		
		//search for it in the owner table ?
		$items = $db->query("SELECT * FROM theowner WHERE LOWER(email) = ? and pass= ?",$vars['email'], $vars['pass'])->fetchAll();
		if (count($items)==0){
				$ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
				return $ret;
		}
	}

	else{

		//search for it in the database ?
	$items = $db->query("SELECT * FROM monitor WHERE LOWER(email) = ? and pass= ?",$vars['email'], $vars['pass'])->fetchAll();
	if (count($items)==0){
	        $ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;
	}
	}
    
	//For the sake of simplicity, log the user directly by setting their cookies..
	setcookie("app_email", $vars['email'], time()+(3600*24),"/");
	setcookie("app_pass", $vars['pass'] , time()+(3600*24),"/");
	
	$ret['status']=1;
	$ret['error']='';
	return $ret;
}
