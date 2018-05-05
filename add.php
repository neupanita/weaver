<?php
if(!isset($_SESSION))
	session_start();
$userid=$_SESSION['id'];
$isbn=$_POST['ISBN'];
$bookname=$_POST['bookname'];
$publication=$_POST['publication'];
$pubphone=$_POST['pubphone'];
$pubad=$_POST['pubad'];
$pubmail=$_POST['pubmail'];
$category=$_POST['category'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$authorname=$_POST['authorid'];
$authoradd=$_POST['authoradd'];
$authorph=$_POST['authorph'];
$authormail=$_POST['authormail'];
$dat=date("y-m-d");
$photo="images/".$_FILES["file"]["name"];
$status=0;
$publicationstatus=0;
$authorstatus=0;
$cnt=0;
$authorid=NULL;

if($userid=="admin")
{	
$db=mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);

$n="select * from books";
$result=mysql_query($n,$db);
$cnt=0;
while($row=mysql_fetch_array($result))
	$cnt++;
$cnt=$cnt+1;	

$check="select ISBN from books";
$result=mysql_query($check,$db);
while($row=mysql_fetch_array($result))
{	$isbnid=$row['ISBN'];
	if($isbn==$isbnid)
		{	echo"<script>
						alert('Book already exists in inventory,u can only update it');
						window.location.href='index.php?link=add_inventory.php';			
						</script>";
			$status=1;
			
		}
}
	

if($status!=1)
{	$sql="Select publication_name from publication";
	$result=mysql_query($sql,$db);
	while($row=mysql_fetch_array($result))
	{	
		if($row['publication_name']==$publication)
		{	
			$publicationstatus=1;
			break;
		}
	}
	if($publicationstatus!=1)
	{	$sql1="INSERT INTO publication		(`publication_name`,`phone`,`address`,`email`)	
		VALUES ('$publication', '$pubphone', '$pubad', '$pubmail');";
					mysql_query($sql1,$db);	
	}
	
	$sql2="Select * from author ";
	$result1=mysql_query($sql2,$db);
	while($row1=mysql_fetch_array($result1))
	{	
		if($row1['author']==$authorname)
		{	
			$authorstatus=1;
			break;
		}
	}
	if($authorstatus!=1)
	{	while($row1=mysql_fetch_array($result1))
				$cnt++;
		$sql3="INSERT INTO author		(`author_id`,`author`,`phone`,`address`,`email`)	
		VALUES ('$cnt','$authorname', '$authorph', '$authoradd', '$authormail');";
					mysql_query($sql3,$db);	
	}
	
	$sql4="Select * from author";
	$result2=mysql_query($sql4,$db);
	while($row2=mysql_fetch_array($result2))
	{	
		if($row2['author']==$authorname)
		{	
			$authorid=$row2['author_id'];
			
		}
		
	}
	

	
		
$sql="INSERT INTO books		(`ISBN`,`Bookname`,`Publication`,`category`,`Quantity`,`Price`,`photo`,`author_id`,`date`)	
VALUES ('$isbn', '$bookname', '$publication', '$category', '$quantity', '$price', '$photo', '$authorid','$dat');";
					mysql_query($sql,$db);	
					 move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);	
					
					echo"<script>
						alert('Book added to inventory');
						window.location.href='index.php';			
						</script>";
					
						
}

}
else
echo"<script>
						alert('Unauthorized administrator');
						window.location.href='index.php';			
						</script>";

?>

