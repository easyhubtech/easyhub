<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
define("DB_HOST", "localhost");
define("DB_NAME", "easyhub_mobile_data");
define("DB_USER", "easyhub_easyhub");
define("DB_PASS", "Pass@521011125");
date_default_timezone_set('Asia/Kolkata');	
$db= new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME . ';charset=utf8', DB_USER, DB_PASS);

$mobile=$_POST['mobile'];
$name=strtoupper($_POST['name']);
$prof=$_POST['prof'];
$quali=$_POST['quali'];
$gender=$_POST['gender'];
$pin=$_POST['pin'];


if(empty($mobile))
{
	$val='Sorry ! Not Register. Try Again';
	echo $val;
	exit();
}

$result = $db->exec("INSERT INTO mobile(mobile, name, profession, qualification, gender, pin) VALUES('$mobile', '$name', '$prof', '$quali', '$gender', '$pin')");
if($result)
{
		
	unset( $_SERVER['HTTP_X_REQUESTED_WITH'] );
	$val='Success';
	echo $val;

}


	
endif?>