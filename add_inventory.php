<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store Template, Free CSS Template, TemplateMo.com</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML, TemplateMo.com" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website from TemplateMo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<div id="templatemo_content_right">
        	
            <h1>Add books to inventory </h1>
          <div id="signup">	
	<form enctype = "multipart/form-data" name="form" onSubmit="return checkempty()" action="add.php" method="POST">
	
	<table align="left">
	
		<tr >
			<td>ISBN:</td>
			<td><input type="text" name="ISBN"></td>
		</tr>

		<tr >
			<td>Bookname:</td>
			<td><input type="text" name="bookname"></td>
		</tr>
		<tr>
			<td>Photo:</td>
			<td><input type="file" name="file" id="file" ></td>
		</tr>


		<tr>
			<td>Publication:</td>
			<td><input type="text" name="publication"></td>
		</tr>
		<tr>
			<td>Publication Phone:</td>
			<td><input type="text" name="pubphone"></td>
		</tr>
		<tr>
			<td>Publication Address:</td>
			<td><input type="text" name="pubad"></td>
		</tr>
		<tr>
			<td>Publication email:</td>
			<td><input type="text" name="pubmail"></td>
		</tr>

		


		<tr>
			<td>Category:</td>
			<td><input type="text" name="category"></td>
		</tr>

		<tr>
			<td>Quantity:</td>
			<td>	<input type="text" name="quantity"></td>
		</tr>

		<tr>
			<td>Price:</td>
			<td><input type="text" name="price"></td>
		</tr>

		
		<tr>
			<td>Author name:</td>
			<td><input type="text" name="authorid"></td>
		</tr>
		<tr>
			<td>Author address:</td>
			<td><input type="text" name="authoradd"></td>
		</tr>
		<tr>
			<td>Author phone:</td>
			<td><input type="text" name="authorph"></td>
		</tr>
		<tr>
			<td>Author email:</td>
			<td><input type="text" name="authormail"></td>
		</tr>

		
		<tr>
		  
		  <td height="80"><input id="inputsubmit1" type="submit" value="ADD"></td>
		  <td><input id="inputsubmit1" type="reset" value="Reset"></td>
		  </tr>

	</table>
</form>
</div>
</div>
        
</body>

<script>
function checkempty()
				{
						if(document.form.ISBN.value =="")
						{
							alert("ISBN shouldnot be empty")
							document.form.ISBN.focus()
							return false;
						}
						
						if(document.form.bookname.value =="")
						{
							alert("Bookname shouldnot be empty")
							document.form.bookname.focus()
							return false;
						}
						

												
						if(document.form.publication.value=="")
						{
							alert("Publication shouldnot be empty")
							document.form.publication.focus()
							return false;
						}
						
						if(document.form.category.value=="")
						{
							alert("Category shouldnot be empty")
							document.form.category.focus()
							return false;
						}
						
						if(document.form.quantity.value=="")
						{
							alert("Quantity field shouldnot be empty")
							document.form.quantity.focus()
							return false;
						}
						
						if(document.form.price.value=="")
						{
							alert("Price field should not be empty")
							document.form.price.focus()
							return false;
						}
						
							if(document.form.photo.value=="")
						{
							alert("Photo field shouldnot be empty")
							document.form.photo.focus()
							return false;
						}	
						
						if(document.form.authorid.value=="")
						{
							alert("Author id field shouldnot be empty")
							document.form.authorid.focus()
							return false;
						}	
						
						
													

					}						
				</script>

</html>
