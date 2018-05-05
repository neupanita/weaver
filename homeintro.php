<html>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<body>
<?php
if(!isset($_SESSION['id']))
	$_SESSION['id']=NULL;
 $db = mysql_connect("localhost","root","");
mysql_select_db("weaver",$db);
$sql="select * from books natural join author";
$result = mysql_query($sql,$db);
$cnt=0;	
while($myrow=mysql_fetch_array($result))
{		
	 if($myrow['category']=="Engineering")
	 {	$author_id[1]=$myrow['author_id'];
		$author[1]=$myrow['author']	;
		$ISBN[1]=$myrow['ISBN'];
		$bookname[1]=$myrow['Bookname'];
		$price[1]=$myrow['Price'];
		$picture[1]=$myrow['photo'];
		$publication[1]=$myrow['Publication'];
	}	
		
	/*else if($myrow['category']=="Medical")
	 {	$author_id[2]=$myrow['author_id'];
		$author[2]=$myrow['author']	;
		$ISBN[2]=$myrow['ISBN'];
		$bookname[2]=$myrow['Bookname'];
		$price[2]=$myrow['Price'];
		$picture[2]=$myrow['photo'];
		$publication[2]=$myrow['Publication'];
	}	*/
	else if($myrow['category']=="Management")
	 {	$author_id[3]=$myrow['author_id'];
		$author[3]=$myrow['author']	;
		$ISBN[3]=$myrow['ISBN'];
		$bookname[3]=$myrow['Bookname'];
		$price[3]=$myrow['Price'];
		$picture[3]=$myrow['photo'];
		$publication[3]=$myrow['Publication'];
	}	
		
	else if($myrow['category']=="Novel")
	 {	$author_id[4]=$myrow['author_id'];
		$author[4]=$myrow['author']	;
		$ISBN[4]=$myrow['ISBN'];
		$bookname[4]=$myrow['Bookname'];
		$price[4]=$myrow['Price'];
		$picture[4]=$myrow['photo'];
		$publication[4]=$myrow['Publication'];
	}	
	else if($myrow['category']=="Nepali Novel")
	 {	$author_id[5]=$myrow['author_id'];
		$author[5]=$myrow['author']	;
		$ISBN[5]=$myrow['ISBN'];
		$bookname[5]=$myrow['Bookname'];
		$price[5]=$myrow['Price'];
		$picture[5]=$myrow['photo'];
		$publication[5]=$myrow['Publication'];
	}	
	else if($myrow['category']=="Magazine")
	 {	$author_id[6]=$myrow['author_id'];
		$author[6]=$myrow['author']	;
		$ISBN[6]=$myrow['ISBN'];
		$bookname[6]=$myrow['Bookname'];
		$price[6]=$myrow['Price'];
		$picture[6]=$myrow['photo'];
		$publication[6]=$myrow['Publication'];
	}	
	
	}
?>
<div class="templatemo_product_box">
  <h1>
    <?php 
	 echo $bookname[1];
	 ?>
    <span>
    <?php 
	 echo $author[1];
	 ?>
    </span> </h1>
  <?php  
	 echo "<img src=$picture[1] width=\"100\" height=\"150\">";
	 ?>
  <div class="product_info">
    <h3>
      <?php 
				  echo"Rs. $price[1]";?>
    </h3>
    <?php 
				 echo " <div class=\"detail_button\"><a href=\"?link=detail.php & id=$ISBN[1]\">Detail</a></div>";
				 if($_SESSION['id']!=="admin")
							echo " <div class=\"buy_now_button\"><a href=\"?link=reserve.php & id=$ISBN[1]\">Order</a></div>";
				?>
  </div>
  <div class="cleaner">&nbsp;</div>
</div>
<div class="cleaner_with_width">&nbsp;</div>
<div class="templatemo_product_box">
  <h1> <?php echo $bookname[3];
	 ?> <span> <?php echo $author[3];
	 ?> </span> </h1>
  <?php 
	  echo "<img src=$picture[3]  width=\"100\" height=\"150\">";
	 ?>
  <div class="product_info">
    <h3>
      <?php
				   echo"Rs. $price[3]";
				   ?>
    </h3>
    <?php 
				 echo " <div class=\"detail_button\">
				 <a href=\"?link=detail.php & id=$ISBN[3]\">Detail</a></div>";
				 		if($_SESSION['id']!=="admin")
							echo " <div class=\"buy_now_button\">
							<a href=\"?link=reserve.php & id=$ISBN[3]\">Order</a></div>";
						?>
  </div>
  <div class="cleaner">&nbsp;</div>
</div>
<div class="cleaner_with_height">&nbsp;</div>
<div class="templatemo_product_box">
  <h1> <?php echo $bookname[4];
	 ?> <span> <?php echo $author[4];?> </span> </h1>
  <?php  echo "<img src=$picture[4]  width=\"100\" height=\"150\">";?>
  <div class="product_info">
    <h3><?php echo"Rs. $price[4]";?></h3>
    <?php echo " <div class=\"detail_button\"><a href=\"?link=detail.php & id=$ISBN[4]\">Detail</a></div>";
				 if($_SESSION['id']!=="admin")
							echo " <div class=\"buy_now_button\"><a href=\"?link=reserve.php & id=$ISBN[4]\">Order</a></div>";?> </div>
  <div class="cleaner">&nbsp;</div>
</div>
<div class="templatemo_product_box">
  <h1>
    <?php 
	 echo $bookname[6];
	 ?>
    <span>
    <?php 
	 echo $author[6];
	 ?>
    </span> </h1>
  <?php  
	 echo "<img src=$picture[6] width=\"100\" height=\"150\">";
	 ?>
  <div class="product_info">
    <h3>
      <?php 
				  echo"Rs. $price[6]";?>
    </h3>
    <?php 
				 echo " <div class=\"detail_button\"><a href=\"?link=detail.php & id=$ISBN[6]\">Detail</a></div>";
				 if($_SESSION['id']!=="admin")
							echo " <div class=\"buy_now_button\"><a href=\"?link=reserve.php & id=$ISBN[6]\">Order</a></div>";
				?>
  </div>
  <div class="cleaner">&nbsp;</div>
</div>
<div class="cleaner_with_width">&nbsp;</div>
</div>
<!-- end of content right --> 

<!-- end of content -->

</body>
</html>
