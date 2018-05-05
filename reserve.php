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
$val=$_GET['id'];
if (!isset($_SESSION))
{
session_start();	
}
if(!isset($_SESSION['id']))
	$_SESSION['id']=NULL;
$_SESSION['isbn_no']=$val;

?>
<div id="templatemo_content_right">
  <?php
	  if(isset($_SESSION['id']))
	  {    echo "<h1>Order Books </h1>
     		<form enctype = \"multipart/form-data\" name=\"form\" onSubmit=\"return checkempty()\" action=\"order.php\" method=\"POST\">
			<table align=\"left\">
	
			<tr >
				<td>Number of books to order:</td>
				<td><input type=\"text\" name=\"qnt\" ></td> 
			</tr>
			<tr> 
			<td> Payment:</td>
				<td height=\"40\"><input type=\"radio\"  name=\"opt\" value=\"1\">Paypal
				<input type=\"radio\"  name=\"opt\" value=\"2\">Door Payment</td>
	   		
	   		</tr>
			
			

		
                              
       		<tr> 
				<td height=\"40\"><input id=\"submit\" type=\"submit\" value=\"Order\"></td>
	   		</tr>
			
			
			</table>
			</form>";
	}
	else
		header('location:register.php');
?>
</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>
</div>
<!-- end of content right -->

<div class="cleaner_with_height">&nbsp;</div>
</body>
<script>
function checkempty()

				{
						
						var productselect=false;
						if(document.form.qnt.value =="")
						{
							alert("You have not placed the order")
							document.form.qnt.focus()
							return false;
						}
						
						for( var i=0;i<document.form.opt.length;i++)
						{
							if (document.form.opt(i).checked )
							productselect=true;
						}
						if(!productselect)
						{
							alert("Please Select Payment Option");
							return false;
						}
						
					
						
						
					
				}
						
</script>
