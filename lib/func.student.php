<?php 



function student_add ($vars){
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

    
    if (strlen($ret['error'])==0 and strlen($vars['bday'])==0) {
        $ret['error']=" You need to provide a birth date .";
        return $ret;
    }
    if (strlen($ret['error'])==0 and strlen($vars['category'])==0) {
        $ret['error']=" You need to provide  a category .";
        return $ret;
    }



    if (strlen($ret['error'])>0) return  $ret;
    
    $db->query("INSERT INTO student (fname,lname,email,phone_num,gender,bday,address,category) 
    VALUES (?,?,?,?,?,?,?,?)",$vars['fname'],$vars['lname'],$vars['email'],$vars['phone'],$vars['gender'],$vars['bday'],$vars['address'],$vars['category']);



	$ret['status']=1;
	$ret['error']='';
	return $ret;
}






?>