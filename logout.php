<?php
	
if (!isset($_SESSION))
	session_start();
	$id=$_SESSION['id'];
	$db=mysql_connect("localhost","root","");
	mysql_select_db("weaver",$db);

	$sql = "Update `reserved items` SET `Status`=\"1\" where `Status`= \"0\" and `username`='$id'";
mysql_query($sql,$db);
    session_destroy();
	header('location:index.php');
?>