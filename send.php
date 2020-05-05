<?php

session_start();
 include 'dbh.php';
 $msg=$_post['msg'];
 $name=$_SESSION['name'];

$sql="insert into posts(msg,name) values('$msg','$name')";
$result=mysqli_query($conn,$sql);

header("location:home.php");

?>