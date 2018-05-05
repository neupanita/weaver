<html>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<body>
<?php

$db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
$sql="select * from books natural join author";
$result = mysql_query($sql,$db);
$cnt=0;
while($myrow = mysql_fetch_array($result))
{			
		$isbn[$cnt]=$myrow['ISBN'];
		$bookname[$cnt]=$myrow['Bookname'];
		$publication[$cnt]=$myrow['Publication'];
		$category[$cnt]=$myrow['category'];
		$price[$cnt]=$myrow['Price'];
		$author[$cnt]=$myrow['author'];
		
		
		$cnt++;
		$isbn[$cnt]=NULL;
		
}

?>

<div id="templatemo_content_right">
        	
            <h1>List of Books Avaialble in the Store</h1>
   <div id="personal_profile">    
	<?php
	
	echo'<TABLE BORDER ="1" cellspacing="0" cellpadding="0">';
	echo "<TR><TD width=\"10%\">ISBN:</td>";
	echo "<td width=\"40%\">"."Bookname";
	echo "<td width=\"10%\">"."Author";
	echo "<td width=\"20%\">"."Publication";
	echo "<td width=\"15%\">"."Category";
	echo "<td width=\"5%\">"."Price";
	
	for($i=0;$i<$cnt;$i++)
	{	echo "<TR><TD width=\"10%\">".$isbn[$i];
		echo "<td width=\"40%\">".$bookname[$i];
		echo "<td width=\"10%\">".$author[$i];
		echo "<td width=\"20%\">".$publication[$i];
		echo "<td width=\"15%\">".$category[$i];
		echo "<td width=\"5%\">".$price[$i];
		
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