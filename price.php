<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store Template, Free CSS Template, TemplateMo.com</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML, TemplateMo.com" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website from TemplateMo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<?php
$isbnno=$_GET['id'];


$db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
$sql="select * from books";
$result = mysql_query($sql,$db);
$cnt=0;
while($myrow = mysql_fetch_array($result))
{		if($myrow['ISBN']==$isbnno)	
		{	$isbn=$myrow['ISBN'];
			$bookname=$myrow['Bookname'];
			$publication=$myrow['Publication'];
			$price=$myrow['Price'];
			$quantity=$myrow['Quantity'];
		
		
		}
}


?>
<div id="templatemo_content_right">
        	
            <h1>Update books frome inventory</h1>
          <div id="update">	
	<form enctype = "multipart/form-data" name="form" onSubmit="return checkempty()" action="update.php" method="POST">
	
	<table align="left">
	
		<tr >
        <td>ISBN:</td>
			<td><input type="text" name="isbn" value="<?php echo $isbn ?>" ></td>
		</tr>
        <tr >
			<td>Bookname:</td>
			<td><input type="text" name="bookname" value="<?php echo $bookname ?>" ></td>
		</tr>

		<tr>
			<td>Publication:</td>
			<td><input type="text" name="publication" value="<?php echo $publication ?>"></td>
		</tr>

		
		<tr>
			<td>Quantity:</td>
			<td>	<input type="text" name="quantity" value="<?php echo $quantity ?>"></td>
		</tr>

		<tr>
			<td>Price:</td>
			<td><input type="text" name="price" value="<?php echo $price ?>"></td>
		</tr>

		

		
		<tr>
		  
		  <td height="80"><input id="inputsubmit1" type="submit" value="Update"></td>
		  <td><input id="inputsubmit1" type="reset" value="Reset"></td>
		  </tr>

	</table>
</form>
</div>
</div>
        
</body>

<script>
function checkempty()
				{
						if(document.form.isbn.value =="")
						{
							alert("ISBN shouldnot be empty")
							document.form.isbn.focus()
							return false;
						}
										
						if(document.form.bookname.value =="")
						{
							alert("Bookname shouldnot be empty")
							document.form.bookname.focus()
							return false;
						}
						

												
						if(document.form.publication.value=="")
						{
							alert("Publication shouldnot be empty")
							document.form.publication.focus()
							return false;
						}
						
												
						if(document.form.quantity.value=="")
						{
							alert("Quantity field shouldnot be empty")
							document.form.quantity.focus()
							return false;
						}
						
						if(document.form.price.value=="")
						{
							alert("Price field should not be empty")
							document.form.price.focus()
							return false;
						}
						
										
													

					}						
				</script>

</html>
