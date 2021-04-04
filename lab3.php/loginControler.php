<?php
require_once 'models/db_config.php';
$name="";
$err_name="";
$hasError=false;
if(isset($_POST["sign_up"])){
	if(empty($_POST[name])){
		$hasError=true;
		$err_name="<br>name required";
	}else
		$name=$_POST["name"];
}
//other validations


if(!$hasError){
	
	
insertUser($name,$_POST["username"],$_POST["password"],$_POST["email"]);

}
if (isset($_POST["btn_login"])){
	
	
	if (authenticateUser($_POST["username"],$_POST["password"])){
		header("Location: dashboard.php");
		
		
	}
	echo "invalid username or password";

}

function insertUser($name,$password,$username,$email){
	
	$query="insert into users values(NULL,$name,$user_name,$password,$email)";
	execute($query);
}

function authenticateUser($username,$password){
	
	$query="select * from users  where username='$username' and password='$password'";
$result=get($query);
print_r($result);
if (count($result)>0){
return $result[0];
}
return false;
	
	
}	
		
}
?>