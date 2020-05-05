<?php

include 'dbh.php';
$uname=$_POST['uname'];
$email=$_POST['Email'];
$pass=$_POST['password'];


$sql="insert into signup(username,email,password) value('$uname','$email','$pass')";
$result=$conn->query($sql);

header("location:index.php");



?>