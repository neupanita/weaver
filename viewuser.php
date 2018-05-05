<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<h1>List of reserved items</h1>

<?php
	$db = mysql_connect("localhost","root","");

mysql_select_db("weaver",$db)or die(mysql_error());

$query=("SELECT * from `reserved items`where `username`='$userid' ");
$result=mysql_query($query,$db) or die(mysql_error());



$cnt=0;
while($myrow = mysql_fetch_array($result))
{
		$Reservationid[$cnt]=$myrow['Reservation id'];
		$ISBN[$cnt]=$myrow['ISBN'];
		$price[$cnt]=$myrow['price'];
		$date[$cnt]=$myrow['date'];
		$username[$cnt]=$myrow['username'];
		$qnt_reserved[$cnt]=$myrow['Quantity reserved'];
		$Status[$cnt]=$myrow['Status'];
		
		$cnt++;
		$isbn[$cnt]=NULL;
		
}
	
	
				


?>
	<?php
	
echo'<TABLE BORDER ="1" cellspacing="0" cellpadding="0">';
	echo "<TR><TD width=\"10%\">Reservation id:</td>";
	echo "<td width=\"40%\">"."ISBN";
	echo "<td width=\"10%\">"."price";
	echo "<td width=\"20%\">"."data";
	echo "<td width=\"15%\">"."username";
	echo "<td width=\"5%\">"."Quantity reserved";
	echo "<td width=\"5%\">"."Status";
	
	
	
	for($i=0;$i<$cnt;$i++)
	{	echo "<TR><TD width=\"10%\">".$Reservationid[$i];
		echo "<td width=\"40%\">".$ISBN[$i];
		echo "<td width=\"10%\">".$price[$i];
		echo "<td width=\"20%\">".$date[$i];
		echo "<td width=\"15%\">".$username[$i];
		echo "<td width=\"5%\">".$qnt_reserved[$i];
		echo "<td width=\"5%\">".$Status[$i];
		
	}
	echo "</table>";
?>
 
          
             <div class="cleaner_with_height">&nbsp;</div>
             <div class="cleaner_with_height">&nbsp;</div>
             <div class="cleaner_with_height">&nbsp;</div>
            
                       
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    
        
  
