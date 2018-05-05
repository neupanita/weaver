<html>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<body>
<?php
if (!isset($_SESSION))
{
session_start();	
}
$bookid=$_GET['id'];
$db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
$sql="select * from books";
$result = mysql_query($sql,$db);
	
while($myrow=mysql_fetch_array($result))
{		
		 if($myrow['ISBN']==$bookid)	
	 	{	$author_id=$myrow['author_id'];
			$sql1="select * from author";
			$result1 = mysql_query($sql1,$db);
			while($myrow1=mysql_fetch_array($result1))
			{	if($myrow1['author_id']==$author_id)
					$author=$myrow1['author'];
			}
		$ISBN=$myrow['ISBN'];
		$_SESSION['isbn_no']=$ISBN;
		$bookname=$myrow['Bookname'];
		$price=$myrow['Price'];
		$picture=$myrow['photo'];
		$publication=$myrow['Publication'];
		}
		
		
}


?>
 <div id="templatemo_content_right">
        	
            <h1><?php 
			echo $bookname;
			?> <span>
			<?php 
			echo "(";
			echo $author ;
			echo ")";
			?></span></h1>
            <div class="image_panel">
            <?php
          	echo " <img src=$picture width=\"100\" height=\"150\"> ";
			?>
            </div>
          <h2><?php
		  
		 			
		  ?></h2>
            <ul>
	            <li><?php echo "By "; echo $author?></li>
            	<li><?php echo "Publication "; echo $publication?></li>
                <li><?php echo "Price:Rs. "; echo $price?></li>
                <li><?php echo "ISBN "; echo $ISBN?></li>
            </ul>
            
            <p>it is in detail.</p>
           
            <div class="cleaner_with_height">&nbsp;</div> 
           
            <div class="buy_now_button"><?php
			if(isset($_SESSION['id']))
			 { 	echo "<p>Add a comment</p>";	
			  	echo "<form enctype = \"multipart/form-data\" name=\"form\" action=\"comment.php\" method=\"POST\">";
				echo "<table align=\"left\">";
	
				echo "<tr><td><textarea id=\"comment\" name=\"comment\" 		cols=\"50\" row=\"2\"></textarea></td></tr>";
				echo "<tr><td><input type=\"submit\" name=\"Submit\" value=\"Comment\" /></td></tr>";
				//echo "<tr><td><a href=\"?link=comment.php\">Comment</a></td></tr>";
	echo "</table>";
	echo "</form>";
	
			}
			?>
            </div>
                <div class="cleaner_with_height">&nbsp;</div>
			<div class="buy_now_button"><?php
				//echo "<a href=\"#\">Comment</a>";
					 
					 	$db = mysql_connect("localhost","root","");
						mysql_select_db("weaver",$db);
						$sql1="select * from `book review` where `ISBN`='$bookid' order by `Review date` desc";
						$result1 = mysql_query($sql1,$db);
						echo "<h1>Reviews</h1>";
						$person=NULL;
						$review=NULL;
						$cnt=0;
						while($myrow2=mysql_fetch_array($result1))
						{	if($myrow2['ISBN']==$bookid)
							{	$person[$cnt]=$myrow2['username'];
								$review[$cnt]=$myrow2['Reviews'];
								$revdate[$cnt]=$myrow2['Review date'];
								$cnt++;
							}
						}
							for($i=0;$i<$cnt;$i++)
							{	if($person!=NULL&&$review!=NULL)
								{	echo "<h1>$person[$i]($revdate[$i])</h1>";
									echo "$review[$i]";
									echo "<br></br>";
									
								}
							}
						
						
					
					 
					 
			 ?>
             </div>
             
             
             <div class="cleaner_with_height">&nbsp;</div>
             
            </div> <!-- end of content right -->
    
    	
     <!-- end of content -->
    
 
 
</div>

  
 </body>
 </html>
