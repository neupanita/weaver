<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Weaver Book Store</title>
<script src="jquery.js" type="text/javascript" charset="utf-8"></script>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
           <a href="#" id="logIn">Log In</a></li>
           <a href="index.php?link=search.php">Search</a></li>
           <a href="index.php?link=company.php">Company</a></li>  
           <a href="index.php?link=contact.php">Contact</a></li> 
           <a href="index.php?link=menu_book.php">Books</a></li>
           <a href="index.php?link=homeintro.php">Home</a></li>
   	  </ul>
      <div id="collapse">
                  <?php
                session_start();
                if(!isset($_SESSION['id']))
                  include "loginarea.php";
                else
                  include "useropt.php";
              ?>   
        
      </div>
</div>  <!-- end of menu -->
    
   	 
    
    <div id="templatemo_header">
    	
    </div> <!-- end of header -->
    
    
      <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
   	  		    
            
			<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
               	
                    <li><a href="?link=category.php & id=1">Engineering</a></li>
                    <li><a href="?link=category.php & id=2">Medical </a></li>
                   <li><a href="?link=category.php & id=3">Management</a></li>
                    <li><a href="?link=category.php & id=4">Novel</a></li>
                    <li><a href="?link=category.php & id=5">Nepali Novel</a></li>
                    <li><a href="?link=category.php & id=6">Magazine</a></li>
                    
                   
              </ul>
			</div>
            
            <div class="templatemo_content_left_section">   
            <h1><a href="index.php?link=newrelease.php">New Arrival</a></h1>
            
             
            
             </div>
        </div> <!-- end of content left -->
<div id="templatemo_content_right">
      	
<?php 
	  		if(isset($_GET['link']))
	   			include "$_GET[link]";
	   		else 
				include "homeintro.php";
		   ?>

</div>



    
  <div id="templatemo_footer">
    <?php include "footer.php" ?>
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->

</body>
<script type="text/javascript">
  $("#logIn").bind("click", function(e){
    $("#collapse").toggle("fast");
  })
</script>
</html>