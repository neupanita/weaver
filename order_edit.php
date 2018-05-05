<?php
if(!isset($_SESSION))
	session_start();
$userid=$_SESSION['id'];

$reservationid=$_SESSION['reserveid'];
$qnt=$_POST['qnt'];

$db=mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);

$sql = "Update `reserved items` SET `Quantity reserved`='$qnt'where `Reservation id`= '$reservationid'";
mysql_query($sql,$db);
echo"<script>
						
						window.location.href='index.php?link=reserve_edit.php';			
						</script>";


?>

