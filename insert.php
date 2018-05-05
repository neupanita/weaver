<?php
$id=$_POST['idname'];
$first=$_POST['fname'];
$last=$_POST['lname'];
$pswd=$_POST['pswd'];
$rpswd=$_POST['rpswd'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];

if($id=="")
	echo"<script>
						alert('Unauthorized entry:Register through valid page');
						window.location.href='register.php';			
						</script>";

$status=0;

	
$db=mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);

$n="select * from admin";
$result=mysql_query($n,$db);
$cnt=0;
while($row=mysql_fetch_array($result))
	$cnt++;
$cnt=$cnt+1;	

$check="select username from customer";
$result=mysql_query($check,$db);
while($row=mysql_fetch_array($result))
{	
	$userid=$row['username'];
	
	if($userid==$id)
		{echo"<script>
						alert('User name already Exists:Please choose another unique username');
						window.location.href='register.php';			
						</script>";
			$status=1;
			
		}
}
	

if($status!=1&&$id!="")
{		
if($pswd==$rpswd)
				{	$sql="INSERT INTO customer (`username`,`firstname`,`lastname`,`password`,`address`,`email`,`phone-no`)	
VALUES ('$id','$first','$last','$pswd','$address','$email','$phone')";
					mysql_query($sql,$db);
						
					echo"<script>
						alert('Registration sucessful:Now signin in order to order books');
						window.location.href='index.php';			
						</script>";
					
			
				}
				else 
					echo"<script>
						alert('Password mismatch');
						window.location.href='register.php';			
						</script>";
		
}



?>

