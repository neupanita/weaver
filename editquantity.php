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
$id=$_GET['id'];
if (!isset($_SESSION))
{
session_start();	
}
//$_SESSION['order']=$id;
$user=$_SESSION['id'];

$db = mysql_connect("localhost","root","");
	mysql_select_db("weaver",$db);
	$sql="select * from `reserved items`";
	$result = mysql_query($sql,$db);
	//$cnt=0;
	//$isbn[0]=NULL;
		while($myrow = mysql_fetch_array($result))
		{		if($myrow['username']==$user && $myrow['ISBN']==$id)
	 			{$reservationid=$myrow['Reservation id'];
				$_SESSION['reserveid']=$reservationid;
				$qnt_reserved=$myrow['Quantity reserved'];
				//$cnt++;
				}
		
		}
		//$isbn[$cnt]=NULL;

?>

 <div id="templatemo_content_right">
            <h1>Order Books </h1>
     <form enctype = "multipart/form-data" name="form" onSubmit="return checkempty()" action="order_edit.php" method="POST">
	
	<table align="left">
	
		<tr >
			<td>Number of books to order:</td>
			<td><input type="text" name="qnt" value=<?php echo $qnt_reserved;?>></td> 
		</tr>
         
	   		</tr>
                              
       <tr> <td height="40"><input id="submit" type="submit" value="Order"></td>
	   </tr>
      

	</table>
</form>
</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="cleaner_with_height">&nbsp;</div>

            
           
            
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>

</body>

<script>
function checkempty()
				{
						
						if(document.form.qnt.value =="")
						{
							alert("You have not placed the order")
							document.form.qnt.focus()
							return false;
						}
					
						
						
				}
						
</script>
</html>