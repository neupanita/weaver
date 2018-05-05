<?php
if (!isset($_SESSION))
{
session_start();	
}

$name=$_POST['id'];
$password=$_POST['pswd'];
$db=mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
setcookie("weaverstore", $name);
$status=0;

$sql="select password,username from customer where username='$name'";
$result=mysql_query($sql,$db);
while($row=mysql_fetch_array($result))
{	$pswd=$row['password'];
	$nam=$row['username'];
	
	if($nam==$name && $pswd==$password)
		$status=1;
}
if($status==1)
	{	$_SESSION['id']=$nam;
		$_SESSION['name']=$user;
		header("location:index.php");
	}

else if($status==0)
	{	
		echo"<script>
			alert('Username and password do not match');
		window.location.href='index.php';			
		</script>";

	}
		
?>
