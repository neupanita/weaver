<?php
if(!isset($_SESSION))
	session_start();
$userid=$_SESSION['id'];


$isbn=$_POST['isbn'];
$bookname=$_POST['bookname'];
$publication=$_POST['publication'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];

if($userid=="admin")
{	$db=mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);

$sql = "Update `books` SET `ISBN`='$isbn',`Bookname`='$bookname', `Publication`='$publication',`Quantity`='$quantity',`Price`='$price' where `ISBN`= '$isbn'";
mysql_query($sql,$db);
echo"<script>
						alert('Book updated in inventory');
						window.location.href='index.php?link=edit_price.php';			
						</script>";
}
else
echo"<script>
						alert('Unauthorized User');
						window.location.href='index.php';			
						</script>";

?>
