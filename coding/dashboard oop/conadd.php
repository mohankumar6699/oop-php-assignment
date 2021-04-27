<!DOCTYPE html>
<html lang="en">
	<!-- Connection with style sheet for all the layout style and color-->
<style type="text/css">
<!--
.style3 {color: #CC0033}
-->
</style>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
	<!--code for showing logo and website name-->
<body>
<div class="jumbotron text-center" style="margin-bottom:0" class="jumbotron text-center">
 <img src="../w3images/logo.png" height="110px" width="140px" align="left"> <h3 align="center"> <strong>Dashboard</strong></h3>
  </div>

	</div>
	
	<table width="1350" border="0" align="center" bgcolor="#000000">
  <tr>
   
	  
		 <td width="130"> <a class="nav-link" href="subadd.php">Subscription</a></td>
		 <td width="130"> <a class="nav-link" href="subdetails.php">Subscription Details</a></td>
	  <td width="130"> <a class="nav-link" href="conadd.php">Contact</a></td>
		 <td width="130"> <a class="nav-link" href="condetails.php">Contact Details</a></td>
		
		 <td width="130"> <a class="nav-link" href="../index.php">Main Website</a></td>
    
    
  </tr>
</table>
<h1 align="center"</br></br><strong>Welcome To Subscribers Page</strong></h1>
<div class="jumbotron text-center" style="margin-bottom:0" class="jumbotron text-center">
 <img src="../welcome.jpg" height="200px" width="700px" align='middle'> 
  </div>





<html>
<head>
	<title>Add Data</title>
<!-- validation for the user input -->
	<script type="text/javascript">
		function validate() {
			if (document.form1.email.value == '') {
				alert('email field empty');
				document.form1.email.focus();
				return false;
			}
			if (document.form1.name.value == '') {
				alert('name field empty');
				document.form1.name.focus();				
				return false;
			}
			if (document.form1.subject.value == '') {
				alert('subject field empty');
				document.form1.subject.focus();
				return false;
			}
			
			
			if (document.form1.message.value == '') {
				alert('message field empty');
				document.form1.message.focus();
				return false;
			}
			return true;
		}
	</script>	
</head>

<body>
<center>
	<div>
	
	<br/><br/>
	<div id="msg"></div>
	<form action="conadd1.php" method="post" name="form1" onsubmit = "return(validate());">
		<table width="30%" border="5" bgcolor="#7EB762">
			
			
			
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>

				
		    <tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Subject</td>
				<td><input type="text" name="subject"></td>
			</tr>

			<tr> 
				<td>Message</td>
				<td><textarea name="message"></textarea></td>
			</tr>

			
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add New"></td>
			</tr>
		</table>
	</form>
	</div>
	</center>
	
	
</body>
</html>

