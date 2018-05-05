<html>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<body>
<?php
if (!isset($_SESSION))
{
session_start();	
}

$userid=$_SESSION['id'];


$db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
$sql="select * from customer";
$result = mysql_query($sql,$db);


while($myrow = mysql_fetch_array($result))
{			
	 if($myrow['username']==$userid)
	{	
		$firstname=$myrow['firstname'];
		$lastname=$myrow['lastname'];
		$userid=$myrow['username'];
		$email=$myrow['email'];
		$phone=$myrow['phone-no'];
		$address=$myrow['address'];
		
		
		}
}
?>

<div id="templatemo_content_right">
        	
            <h1>Personal Profile</h1>
   <div id="personal_profile">    
	<?php
	echo'<TABLE BORDER ="0">';
	echo "<TR><TD>First name:</td>";
	echo "<TD>"."&nbsp";
	echo "<td>".$firstname;
	echo "<td>"."&nbsp";
			
	echo "<TR><TD>Last name:</td>";
	echo "<TD>"."&nbsp";
	echo "<td>".$lastname;
	
	
	echo "<TR><TD>Login name:</td>";
	echo "<TD>"."&nbsp";
	echo "<td>".$userid;
		
	echo "<TR><TD>Email id:</td>";
	echo "<TD>"."&nbsp";
	echo "<td>".$email;
	
	echo "<TR><TD>Phone no.:</td>";
	echo "<TD>"."&nbsp";
	echo "<td>".$phone;
	
	echo "<TR><TD>Address:</td>";
	echo "<TD>"."&nbsp";
	echo "<td>".$address;

	echo "</table>";
?>
</div>          
             <div class="cleaner_with_height">&nbsp;</div>
             <div class="cleaner_with_height">&nbsp;</div>
             <div class="cleaner_with_height">&nbsp;</div>
            
                       
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    
        
  
</body>


</html>