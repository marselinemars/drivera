<?php



function owner_process_register($vars){
	global $db;
	
	$ret['status']=0;
	$ret['error']='';
	
    if (strlen($ret['error'])==0 and (empty($vars['email'])|| empty($vars['fname'])  || empty($vars['password'])|| 
	
	empty($vars['lname']) ||  empty($vars['id']) || empty($vars['gender'])|| empty($vars['phone_num'])
	 ||  empty($vars['state']) ||  empty($vars['dname'])  || empty($vars['fid']) ||  empty($vars['oname'])
	 || empty($vars['nm']) ||  empty($vars['nv'])|| empty($vars['nc'])|| empty($vars['address']) ) )
	
	
	{
        $ret['error']="Please make sure to fill all the Credentials ! ";
        return $ret;
    }
  

	if(empty($_FILES['profileimage']['name'])) {

		$ret['error']=" provide an image for your profile ! ";
		return $ret;

	 }


	 if(empty($_FILES['license']['name'])) {

		$ret['error']=" provide an business license image ! ";
		return $ret;

	 } 

	
    if (strlen($ret['error'])>0)return  $ret;
    //search for it in the database ?
	$items = $db->query("SELECT * FROM theowner" )->fetchAll();
	if (count($items)>0){
	        $ret['error']="The driving school is already registered";
	        return $ret;
	}

	
	//image processing 

	$image = $_FILES['profileimage']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));

    // Insert image into database
   
		
	//Else, there is no users in the db with the same email
    $db->query("INSERT INTO theowner (fname, lname,email,pass,phone_num,id,gender,thestate) VALUES ( ?, ?, ? ,?,?,?,?,?) ", $vars['dname'], $vars['lname'], $vars['email'],  $vars['password'],  $vars['phone_num'],$vars['id'],$vars['gender'],$vars['state']);
				


	$db->connection->query("UPDATE theowner SET profileimage='$imgContent' WHERE id={$vars['id']}");


	//image processing 

	$image = $_FILES['license']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));

    // Insert image into database
	

	$db->query("INSERT INTO driving_school (Name,id,owner,num_monitors,num_vehicles,address,categories)  VALUES ( ?, ?, ? ,?,?,?,?)", $vars['dname'], $vars['fid'], $vars['oname'],  $vars['nm'],  $vars['nv'],$vars['address'],$vars['nc']);


	
    $db->connection->query("UPDATE owner SET business_license='$imgContent' WHERE id={$vars['fid']}");

	//log the user directly by setting their cookies..
	setcookie("app_email", $vars['email'], time()+(3600*24),"/");
	setcookie("app_pass", $vars['password'] , time()+(3600*24),"/");
	setcookie("isowner", true, time()+(3600*24),"/");
	
	$ret['status']=1;
	$ret['error']='';
	return $ret;
}

?>




