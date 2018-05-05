<html>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<body>
<?php
if (!isset($_SESSION))
{
session_start();	
}

$cat=$_GET['id'];
$_SESSION['cat']=$cat;

$db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
$sql="select * from books natural join author";
$result = mysql_query($sql,$db);
$category="Engineering";
if($cat==1)
	$category="Engineering";
	else if($cat==2)
	$category="Medical";
	else if($cat==3)
	$category="Management";
	else if($cat==4)
	$category="Novel";
	else if($cat==5)
	$category="Nepali Novel";
	else if($cat==6)
	$category="Magazine";
	

	

$cnt=0;	
while($myrow=mysql_fetch_array($result))
{		
		 if($myrow['category']==$category)	
	 	{	$author_id[$cnt]=$myrow['author_id'];
			$author[$cnt]=$myrow['author']	;
			$ISBN[$cnt]=$myrow['ISBN'];
		$bookname[$cnt]=$myrow['Bookname'];
		$price[$cnt]=$myrow['Price'];
		$picture[$cnt]=$myrow['photo'];
		$publication[$cnt]=$myrow['Publication'];
		
		$cnt++;
		}
		
}
?>

 <div id="templatemo_content_right">
   <?php  
	$i=0;
	
	/*if($rem!=0)
	{	$cnt=$rem;
		$j=$rem+4;
	}*/
	echo "<h1>$category</h1>";
	while($i!=$cnt && $i<4)
    {   echo " <div class=\"templatemo_product_box1\"><h1>$bookname[$i]</h1><img src=$picture[$i] width=\"100\" height=\"150\"><div class=\"product_info\"><p>ISBN :$ISBN[$i]</p><p>Author:$author[$i]</p><p>Price:$price[$i]</p><div class=\"detail_button\"><a href=\"?link=detail.php & id=$ISBN[$i]\">Detail</a></div>";
										
                
				
				if($_SESSION['id']!="admin")
          			echo "<div class=\"buy_now_button\"><a href=\"?link=reserve.php & id=$ISBN[$i]\">Order now</a></div>";
				echo "</div></div>";

				
		 			
		  if($i%2==0)
            echo "<div class=\"cleaner_with_width\">&nbsp</div>"; 
		else
			echo "<div class=\"cleaner_with_height\">&nbsp</div>"; 
		
		$i++;
		
           
    }
	echo "<div class=\"cleaner_with_height\">&nbsp</div>"; 
	$pag=$cnt/4;
	$page=$pag%4;	
	if($pag>$page)
		$page++;
	echo "<h3>Pages</h3>";	
	for($k=0;$k<$page;$k++)
	{	$p=$k+1;
		
		echo "<a href=\"?link=category_page.php & id=$k\">[$p]</a>";
	}
	/*if($rem>0)
	{	$_SESSION['rem']=$var;
		echo $_SESSION['rem'];
		echo "<h3><a href=\"?link=category_page.php\">NEXT PAGE</h3>";
	}	*/
	
	?>
	             
             
             <div class="cleaner_with_height">&nbsp;</div>
             
            </div> <!-- end of content right -->
    
    	
     <!-- end of content -->
    
 
 
</div>


  
 </body>
 </html>
