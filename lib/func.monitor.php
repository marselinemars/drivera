<?php 



function monitor_add ($vars){
    global $db;

	$ret['status']=0;
	$ret['error']='';
	
	$vars['email']=trim(strtolower($vars['email']));
	
    if (strlen($ret['error'])==0 and strlen($vars['fname'])==0) {
        $ret['error']="You need to provide a first name .";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['lname'])==0) {
        $ret['error']="You need to provide a last name .";
        return $ret;
    }


    if (strlen($ret['error'])==0 and strlen($vars['email'])==0) {
        $ret['error']=" You need to provide an email .";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['phone'])==0) {
        $ret['error']=" You need to provide a phone number .";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['gender'])==0) {
        $ret['error']=" You need to provide a gender .";
        return $ret;
    }

    
    if (strlen($ret['error'])==0 and strlen($vars['age'])==0) {
        $ret['error']=" You need to provide an age .";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['expd'])==0) {
        $ret['error']=" You need to your card expiration date  .";
        return $ret;
    }
    if (strlen($ret['error'])==0 and strlen($vars['exp'])==0) {
        $ret['error']=" You need to provide your experience years .";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['bgroup'])==0) {
        $ret['error']=" You need to provide your blood group .";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['pass'])==0) {
        $ret['error']=" You need to provide a password for the monitor  .";
        return $ret;
    }





    if (strlen($ret['error'])>0) return  $ret;
    
    $db->query("INSERT INTO monitor (fname,lname,email,phone_num,gender,age,bgroup,exp,exp_date,pass) 
    VALUES (?,?,?,?,?,?,?,?,?,?)",$vars['fname'],$vars['lname'],$vars['email'],$vars['phone'],$vars['gender'],$vars['age'],$vars['bgroup'],$vars['exp'], $vars['expd'],$vars['pass']);



	$ret['status']=1;
	$ret['error']='';
	return $ret;
}






?>