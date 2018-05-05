<?php

if (!isset($_SESSION))
{
session_start();	
}
if(isset($_SESSION['id']))
	$user=$_SESSION['id'];
$quantity=$_POST['qnt'];
$isbn_no=$_SESSION['isbn_no'];
//$_SESSION['order']="true";

$db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
$sql="select * from books";
$result = mysql_query($sql,$db);


$dat=date("y-m-d");

while($myrow = mysql_fetch_array($result))
{		if($myrow['ISBN']==$isbn_no)	
	 	{	$price=$myrow['Price'];
		
			$quantity_available=$myrow['Quantity'];	
		}

}

	
					
$quantity_left=$quantity_available-$quantity;
$sql1="Update `books` set `Quantity`='$quantity_left' where `ISBN`='$isbn_no'";
mysql_query($sql1,$db);

$sql="INSERT INTO `reserved items` (`ISBN`,`price`,`date`,`username`,`Quantity reserved`,`Status`)	
VALUES ('$isbn_no','$price','$dat','$user','$quantity','0')";
					mysql_query($sql,$db);	
					
echo"<script>
						
			window.location.href='index.php?link=reserve_edit.php';	
						
	</script>";


?>