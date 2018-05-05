
<html>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<body>
<?php
if (!isset($_SESSION))
{
session_start();	
}


$dat=date("y-m-d");


$userid=$_SESSION['id'];

$db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);

$cnt=0;
$isbn[0]=NULL;
$amount=0;
$total=0;

$sql3="SELECT * FROM  `reserved items` JOIN books USING ( ISBN )  JOIN author USING ( author_id ) WHERE username =  '$userid'";
//$sql3="select * from `reserved items` where `username`='$userid'";
	$result3=mysql_query($sql3,$db);
	while($row3=mysql_fetch_array($result3))
	{		//$sql4="select * from books";
			//$result4=mysql_query($sql4,$db);
			//while($row4=mysql_fetch_array($result4))
			//{
				////if($row3['ISBN']==$row4['ISBN'] && $row3['Status']==0)
				if($row3['Status']==0)
				{
					{	$isbn[$cnt]=$row3['ISBN'];
						$price[$cnt]=$row3['Price'];
						$qnt[$cnt]=$row3['Quantity reserved'];
						$bookname[$cnt]=$row3['Bookname'];
						$picture[$cnt]=$row3['photo'];
						$reserveid[$cnt]=$row3['Reservation id'];
						$amount=$qnt[$cnt]*$price[$cnt];
						$author[$cnt]=$row3['author']	;
						$total+=$amount;
						$cnt++;
					}
			}
			
			
		//}
	}

?>

 <div id="templatemo_content_right">
   <?php  
	$i=0;
		
	/*if($rem!=0)
	{	$cnt=$rem;
		$j=$rem+4;
	}*/
	
	echo "<h1>List of reserved items</h1>";
	while($i!=$cnt && $i<4)
    {   echo " <div class=\"templatemo_product_box1\"><h1>$bookname[$i]</h1><img src=$picture[$i] width=\"100\" height=\"150\">
	<div class=\"product_info\">
	<p>ISBN :$isbn[$i]</p><p>Author:$author[$i]</p><p>Price:$price[$i]</p><p>Quantity Reserved:$qnt[$i]</p><div class=\"detail_button\"><a href=\"?link=editquantity.php & id=$isbn[$i]\">Edit Quantity</a></div>
	<div class=\"buy_now_button\"><a href=\"?link=deletequantity.php & id=$reserveid[$i]\">Delete Order</a></div>
										
                </div>";
				
			//	if(isset($_SESSION['id']))
          		//	echo "<div class=\"buy_now_button\"><a href=\"?link=reserve.php & id=$ISBN[$j]\">Order now</a></div>";
				echo "</div>";

				
		 			
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
	if($total==0)
		echo "<h3>No books has yet been reserved</h3>";
	else
	{echo "<h3>Total Price:Rs.$total</h3>";	
	echo "<h3>Pages</h3>";	
	for($k=0;$k<$page;$k++)
	{	$p=$k+1;
		
		echo "<a href=\"?link=reserve_page.php & id=$k\">[$p]</a>";
	}
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
