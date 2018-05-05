<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store Template, Free CSS Template, CSS Website Layout</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
<div id="templatemo_menu">
  <ul>
    <a href="index.php?link=search.php">Search</a>
    </li>
    <a href="index.php?link=company.php">Company</a>
    </li>
    <a href="index.php?link=contact.php">Contact</a>
    </li>
    <a href="index.php?link=menu_book.php">Books</a>
    </li>
    <a href="index.php?link=homeintro.php">Home</a>
    </li>
  </ul>
</div>
<!-- end of menu -->

<div id="templatemo_header"> </div>
<!-- end of header -->

<div id="templatemo_content">
<div id="templatemo_content_left">
  <?php /*
				session_start();
				if(!isset($_SESSION['id']))
					include "loginarea.php";
				else
					include "useropt.php";*/
			?>
  <div class="templatemo_content_left_section">
    <h1>Categories</h1>
    <ul>
      <li><a href="?link=category.php & id=1">Engineering</a></li>
      <li><a href="?link=category.php & id=2">Medical</a></li>
      <li><a href="?link=category.php & id=3">Management</a></li>
      <li><a href="?link=category.php & id=4">Novel</a></li>
      <li><a href="?link=category.php & id=5">Nepali Novel</a></li>
      <li><a href="?link=category.php & id=6">Magazine</a></li>
    </ul>
  </div>
  <div class="templatemo_content_left_section">
    <h1>New Arrival</h1>
    <?php
			 //include "bestseller.php";
			 ?>
  </div>
</div>
<!-- end of content left -->
<div id="templatemo_content_right">
<h1>Registration Form </h1>
<div id="signup">
  <form enctype = "multipart/form-data" name="form" onSubmit="return checkempty()" action="insert.php" method="POST">
    <table align="left">
      <tr >
        <td>User Id:</td>
        <td><input type="text" name="idname"></td>
      </tr>
      <tr >
        <td>First Name:</td>
        <td><input type="text" name="fname"></td>
      </tr>
      <tr>
        <td>Lastname:</td>
        <td><input type="text" name="lname">
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="pswd"></td>
      </tr>
      <tr>
        <td>Reconfirm Password:</td>
        <td><input type="password" name="rpswd"></td>
      </tr>
      <tr>
        <td>Email-id:</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>Phone-no.:</td>
        <td><input type="text" name="phone"></td>
      </tr>
      <tr>
        <td>Address:</td>
        <td><input type="text" name="address"></td>
      </tr>
      <tr>
        <td height="80"><input id="inputsubmit1" type="submit" value="Submit"></td>
        <td><input id="inputsubmit1" type="reset" value="Reset"></td>
      </tr>
    </table>
  </form>
  <script>
function checkempty()
				{
					
						if(document.form.fname.value =="")
						{
							alert("First name shouldnot be empty")
							document.form.fname.focus()
							return false;
						}
						
						if(document.form.lname.value =="")
						{
							alert("Last name shouldnot be empty")
							document.form.lname.focus()
							return false;
						}
						

												
						/*if(document.form.logname.value=="")
						{
							alert("Login name shouldnot be empty")
							document.form.logname.focus()
							return false;
						}*/
						
						if(document.form.pswd.value=="")
						{
							alert("Password shouldnot be empty")
							document.form.pswd.focus()
							return false;
						}
						
						if(document.form.rpswd.value=="")
						{
							alert("Re-password field shouldnot be empty")
							document.form.rpswd.focus()
							return false;
						}
						
						if(document.form.pswd.value != document.form.rpswd.value)
						{
							alert("Password donot match")
							document.form.pswd.focus()
							return false;
						}
						
						if(document.form.email.value=="")
						{
							alert("Email field shouldnot be empty")
							document.form.email.focus()
							return false;
						}	
						
						if(document.form.phone.value=="")
						{
							alert("Phone number field shouldnot be empty")
							document.form.phone.focus()
							return false;
						}	
						
						if(document.form.address.value=="")
						{
							
							alert("Address field shouldnot be empty")
							document.form.address.focus()
							return false; 
						}	
						
						
				}
						
				</script> 
</div></div>

<div id="templatemo_footer">
  <?php include "footer.php" ?>
  <!-- end of footer --> 
  <!--  Free CSS Template www.templatemo.com --> 
</div>
<!-- end of container -->

</body>
</html>