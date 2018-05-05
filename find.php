
<html>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<body>

<?php
if (!isset($_SESSION))
{
session_start();	
}

$find=$_POST['search'];
$findby=$_POST['searchby'];
$_SESSION['find']=$find;
$_SESSION['findby']=$findby;
$db=mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
//$i=0;
$cnt=0;
$bookname[0]=NULL;
if($findby=="Bookname")
{	$sql="select * from books join author using(author_id) where bookname like '%$find%' ";
	$result=mysql_query($sql,$db);
	while($row=mysql_fetch_array($result))
	{	//if($row['Bookname']==$find)
		//{		
			$bookname[$cnt]=$row['Bookname'];
			$author[$cnt]=$row['author']	;
			$price[$cnt]=$row['Price'];
			$picture[$cnt]=$row['photo'];
			$publication[$cnt]=$row['Publication'];
			$ISBN[$cnt]=$row['ISBN'];
			$cnt++;
			
		//}
	}
}

else if($findby=="Publication")
{	$sql1="select * from books join author using(author_id) where Publication like '%$find%'";
	$result1=mysql_query($sql1,$db);
	while($row1=mysql_fetch_array($result1))
	{	//if($row1['Publication']==$find)
		//{	
			$bookname[$cnt]=$row1['Bookname'];
			$author[$cnt]=$row1['author']	;
			$price[$cnt]=$row1['Price'];
			$picture[$cnt]=$row1['photo'];
			$publication[$cnt]=$row1['Publication'];
			$ISBN[$cnt]=$row1['ISBN'];
			$cnt++;
			
		//}
	}
}

else if($findby=="category")
{	$sql2="select * from books join author using(author_id) where category like '%$find%'";
	$result2=mysql_query($sql2,$db);
	while($row2=mysql_fetch_array($result2))
	{	//if($row2['category']==$find)
		//{	
			$bookname[$cnt]=$row2['Bookname'];
			$author[$cnt]=$row2['author']	;
			$price[$cnt]=$row2['Price'];
			$picture[$cnt]=$row2['photo'];
			$publication[$cnt]=$row2['Publication'];
			$ISBN[$cnt]=$row2['ISBN'];
			$cnt++;
			
		//}
	}
}

else if($findby=="author")
{	$sql3="select * from books join author using(author_id) where author like '%$find%'";
	$result3=mysql_query($sql3,$db);
	while($row4=mysql_fetch_array($result3))
	{		//$sql4="select * from books";
			//$result4=mysql_query($sql4,$db);
			//while($row4=mysql_fetch_array($result4))
			//{	if($row4['author_id']==$row3['author_id'])
				//	{
					$bookname[$cnt]=$row4['Bookname'];
					$author[$cnt]=$row4['author']	;
					$price[$cnt]=$row4['Price'];
					$picture[$cnt]=$row4['photo'];
					$publication[$cnt]=$row4['Publication'];
					$ISBN[$cnt]=$row4['ISBN'];
					$cnt++;
				//	}
			//}
			
		//}
	}
}


?>
 <div id="templatemo_content_right">
   
   
        	
            <h1>Search results</h1>
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

   <?php  
	$i=0;
	$count=$cnt;
	/*$x=4*$page;
	$var=$cnt-$x;
	$cnt=$var;
	$j=0;
	$j=$j+$x;)*/
	
	
	/*if($rem!=0)
	{	$cnt=$rem;
		$j=$rem+4;
	}*/
	//echo "<h1>Search Results</h1>";
	if($bookname[0]!=NULL)
	{echo "<div class=\"cleaner_with_height\">&nbsp;</div>";
	while($i!=$cnt && $i<4)
    {   echo " <div class=\"templatemo_product_box1\"><h1>$bookname[$i]</h1><img src=$picture[$i] width=\"100\" height=\"150\"><div class=\"product_info\"><p>ISBN :$ISBN[$i]</p><p>Author:$author[$i]</p><p>Price:$price[$i]</p><div class=\"detail_button\"><a href=\"?link=detail.php & id=$ISBN[$i]\">Detail</a></div>";
										
                
				if($_SESSION['id']!="admin")
				{	echo "<div class=\"buy_now_button\"><a href=\"?link=reserve.php & id=$ISBN[$i]\">Order now</a></div>";
				//echo "<div class=\"detail_button\"><a href=\"?link=detail.php & id=$ISBN[$i]\">Detail</a></div>";
				}
				else
					echo "<div class=\"detail_button\"><a href=\"?link=price.php & id=$ISBN[$i]\">Edit</a></div>";
				echo "</div></div>";

				
		 			
		  if($i%2==0)
            echo "<div class=\"cleaner_with_width\">&nbsp</div>"; 
		else
			echo "<div class=\"cleaner_with_height\">&nbsp</div>"; 
		
		$i++;
		//$j++;
		
           
    }
	echo "<div class=\"cleaner_with_height\">&nbsp</div>"; 
	$pag=$count/4;
	$page=$pag%4;	
	if($pag>$page)
		$page++;
	echo "<h3>Pages</h3>";	
	for($k=0;$k<$page;$k++)
	{	$p=$k+1;
		
		echo "<a href=\"?link=findpage.php & id=$k\">[$p]</a>";
	}
	/*if($rem>0)
	{	$_SESSION['rem']=$var;
		echo $_SESSION['rem'];
		echo "<h3><a href=\"?link=category_page.php\">NEXT PAGE</h3>";
	}	*/
	}
	else
		{echo "<div class=\"cleaner_with_height\">&nbsp;</div>";
		echo "<h3>No results found</h3>";
		}
	?>
	             
             
             <div class="cleaner_with_height">&nbsp;</div>
             
            </div> <!-- end of content right -->
    
    	
     <!-- end of content -->
    
 
 
</div>



	
	
        
  
</body>


</html>