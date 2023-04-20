<?php

function user_get_logged_user(){
    global $db,$appuser;
    
    $appuser=0;
    if (isset($_COOKIE['app_email']) and strlen($_COOKIE['app_email'])>0){		
		$items = $db->query("SELECT * FROM users WHERE LOWER(email) = ? and pass= ?",$_COOKIE['app_email'], $_COOKIE['app_pass'])->fetchAll();
		if (count($items)>0){
			$appuser=$items[0];	
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
    
    //search for it in the database ?
	$items = $db->query("SELECT * FROM users WHERE LOWER(email) = ? and pass= ?",$vars['email'], $vars['pass'])->fetchAll();
	if (count($items)==0){
	        $ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;
	}
	//For the sake of simplicity, log the user directly by setting their cookies..
	setcookie("app_email", $vars['email'], time()+(3600*24),"/");
	setcookie("app_pass", $vars['pass'] , time()+(3600*24),"/");
	
	$ret['status']=1;
	$ret['error']='';
	return $ret;
}

function owner_process_register($vars){
	global $db;
	
	$ret['status']=0;
	$ret['error']='';
	
	$vars['email']=trim(strtolower($vars['email']));

	echo "iam here";
	
    if (strlen($ret['error'])==0 and (!isset($vars['email'])||  !isset($vars['fname'])  || !isset($vars['password'])|| 
	
	!isset($vars['lname']) ||  !isset($vars['id']) || !isset($vars['gender'])|| !isset($vars['city'])
	 ||  !isset($vars['state']) ||  !isset($vars['sname'])  || !isset($vars['fid']) ||  !isset($vars['oname'])
	 || !isset($vars['nm']) ||  !isset($vars['nv'])|| !isset($vars['nc'])||  !isset($vars['address']) || 
	  !isset($vars['license'])  || 
	  !isset($vars['profileimage'])  ) )
	
	
	{
        $ret['error']="please make sure to fill all the credentials ! ";
        return $ret;
    }
  

  echo "i ckecked";

    if (strlen($ret['error'])>0)return  $ret;
    //search for it in the database ?
	$items = $db->query("SELECT * FROM theowner" )->fetchAll();
	if (count($items)>0){
	        $ret['error']="The driving school is already registered";
	        return $ret;
	}
	//Else, there is no users in the db with the same email
    $db->query("INSERT INTO theowner (fanme, lname,email,pass,phone_num,profileimage,id,gender,thestate) VALUES ( ?, ?, ? ,?,?,?,?,?,?)", $vars['fanme'], $vars['lname'], $vars['email'],  $vars['password'],  $vars['phone_num'],  $vars['profileimage'], $vars['id'],$vars['gender'],$vars['state']);
				
	//log the user directly by setting their cookies..
	setcookie("app_email", $vars['email'], time()+(3600*24),"/");
	setcookie("app_pass", $vars['pass'] , time()+(3600*24),"/");
	
	$ret['status']=1;
	$ret['error']='';
	return $ret;
}

?>
