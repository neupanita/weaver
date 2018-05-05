<html>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<body>
<?php
if (!isset($_SESSION))
{
session_start();	
}

$userid=$_SESSION['id'];
?>  
 
<div class="templatemo_content_left_section">
       	<h1><?php echo "Welcome ";
				  echo $userid;
		 
		
		?>
        	&nbsp;</h1>
                <ul>
                    <li>
                        <p>
                          <label for="view"><a href="index.php?link=personal_profile.php">View Profile</a></label>
                          
                        </p>
                        
                        <p>
                        <?php
						if($userid!="admin")
                        { 
							echo "<p><label for=\"reserve_edit\"><a href=\"index.php?link=reserve_edit.php\">Edit Reserved Books</a></label></p>"; 
							echo "<p><a href=\"?link=viewuser.php\">View Reserved Book</a></p>";  
					                 }
						 ?>
                        </p>
                        <p>
                        <?php
						if($userid=="admin")
						{	echo "<a href=\"?link=edit_price.php\">Edit Book items</a>";
							echo "<p><a href=\"?link=add_inventory.php\">Add book inventory</a></p>";
							echo "<p><a href=\"?link=view.php\">View Order</a></p>";
						}
						?>
                        </p>
                        <p>&nbsp;</p>
                        <p>
                        <a href="logout.php"><img src="images/templatemo_logout.jpg" /></a></p>
                        
                    </li>
            	</ul>
      </div>

 </body>
 </html>
