<html>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<body>
<?php

if(!isset($_SESSION))
{	session_start();
}
if(isset($_GET['id']))
	$page=$_GET['id'];
else 
	$page =0;
	
	
$db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
$sql="select * from books natural join author";
$result = mysql_query($sql,$db);
$cnt=0;	
while($myrow=mysql_fetch_array($result))
{		
		 
	 	$author_id[$cnt]=$myrow['author_id'];
		$author[$cnt]=$myrow['author']	;
		$ISBN[$cnt]=$myrow['ISBN'];
		$bookname[$cnt]=$myrow['Bookname'];
		$price[$cnt]=$myrow['Price'];
		$picture[$cnt]=$myrow['photo'];
		$publication[$cnt]=$myrow['Publication'];
		
		$cnt++;
		
		
}
?>

<div id="templatemo_content_right">
        	 <h1>Search</h1>
          <div id="search">	
	<form enctype = "multipart/form-data" name="form" action="?link=find.php" method="POST">
	
	<table align="left">
	
		<tr >
			<td><input type="text" name="search"></td>
		    <td>    <select name="searchby">
			<option value="Bookname">Bookname</option>
            <option value="author">Author</option>
            <option value="Publication">Publication</option>
            <option value="category">category</option></select>
     </td>
			
			  
		  <td><input id="find" type="submit" value="Search"></td>
		  </tr>

	</table>
</form>
 <div class="cleaner_with_height">&nbsp;</div>

			 <?php  
	$i=0;
	$count=$cnt;
	$x=4*$page;
	$var=$cnt-$x;
	$cnt=$var;
	$j=0;
	$j=$j+$x;
	
	
	/*if($rem!=0)
	{	$cnt=$rem;
		$j=$rem+4;
	}*/
	//echo "<h1>Books available in the Store</h1>";
	while($i!=$cnt && $i<4)
    {   echo " <div class=\"templatemo_product_box1\"><h1>$bookname[$j]</h1><img src=$picture[$j] width=\"100\" height=\"150\"><div class=\"product_info\"><p>ISBN:$ISBN[$j]</p><p>Price:$price[$j]</p><p>Author :$author[$j]</p><div class=\"detail_button\"><a href=\"?link=price.php & id=$ISBN[$j]\">Edit</a></div><div class=\"detail_button\"><a href=\"?link=detail.php & id=$ISBN[$j]\">Detail</a></div>";
										
                		
				
				echo "</div></div>";

				
		 			
		  if($i%2==0)
            echo "<div class=\"cleaner_with_width\">&nbsp</div>"; 
		else
			echo "<div class=\"cleaner_with_height\">&nbsp</div>"; 
		
		$i++;
		$j++;
		
           
    }
	echo "<div class=\"cleaner_with_height\">&nbsp</div>"; 
	$pag=$count/4;
	$page=$pag%4;	
	if($pag>$page)
		$page++;
	echo "<h3>Pages</h3>";	
	for($k=0;$k<$page;$k++)
	{	$p=$k+1;
		
		echo "<a href=\"?link=edit_price.php & id=$k\">[$p]</a>";
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