<?php
if (!isset($_SESSION))
{
session_start();	
}
$comment=$_POST['comment'];
$id=$_SESSION['isbn_no'];
$user=$_SESSION['id'];

$dat=date("y-m-d");
$db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
$sql="INSERT INTO `book review` (`ISBN`,`Reviews`,`Review date`,`username`)	
VALUES ('$id','$comment','$dat','$user')";
					mysql_query($sql,$db);	
	echo "<script>window.location.href='index.php?link=detail.php & id=$id'
	</script>";		
?>

