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
$sql="select * from `reserved items` where `username`='$userid'";
$result = mysql_query($sql,$db);
$cnt=0;
$isbn[0]=NULL;
while($myrow = mysql_fetch_array($result))
{			
	 if($myrow['username']==$userid)
	{	
		$isbn[$cnt]=$myrow['ISBN'];
		$price[$cnt]=$myrow['price'];
		$qnt[$cnt]=$myrow['Quantity reserved'];
		$cnt++;
		
		}
		$isbn[$cnt]=NULL;
}
$cnt1=0;
$sql1="select * from books";
$result1=mysql_query($sql1,$db);
if($isbn[0]!=NULL)
{while($myrow1 = mysql_fetch_array($result1))
{	
		if($myrow1['ISBN']==$isbn[$cnt1])
		{	$bookname[$cnt1]=$myrow1['Bookname'];
			$cnt1++;
		}
}

}


?>

<div id="templatemo_content_right">
        	
            <h1>List of Books Ordered</h1>
   <div id="personal_profile">    
	<?php
	echo'<TABLE BORDER ="1" cellspacing="0" cellpadding="0">';
	echo "<TR><TD width=\"10%\">ISBN:</td>";
	echo "<td width=\"60%\">"."Bookname";
	echo "<td width=\"10%\">"."Price";
	echo "<td width=\"10%\">"."Quantity";
	for($i=0;$i<$cnt;$i++)
	{	echo "<TR><TD width=\"10%\">".$isbn[$i];
		echo "<td width=\"60%\">".$bookname[$i];
		echo "<td width=\"10%\">".$price[$i];
		echo "<td width=\"10%\">".$qnt[$i];
	}
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