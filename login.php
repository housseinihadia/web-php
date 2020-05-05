<?php
session_start();

include 'dbh.php';


$uname=mysqli_real_escape_string($conn,$_post['uname']);
$pass=mysqli_real_escape_string($conn,$_post['pass']);

if($uname!=""&&$pass!=""){
$sql="SELECT * FROM signup WHERE username='$uname' AND password='$pass' ";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(!$row=$result->fetch_assoc()){
	header("location:error.php");
}else{
	$_SESSION['name']=$_post['uname'];

	header("location:home.php");
}
}

?>