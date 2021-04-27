<?php session_start();
ini_set('display_errors',0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*uplod file name*/
$target_dir = "prod-image/";
$target_file = $target_dir . basename($_FILES["productImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if( isset($_POST['save']) ) :
/*uplod file name*/
$check = getimagesize($_FILES["productImage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["productImage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$image = 'prod-image/'.$_FILES["productImage"]["name"];
//Insert Data in Database
$sql = "INSERT INTO  tblproduct (name, code, image, description, price, category)
VALUES ('{$_POST['name']}', '{$_POST['code']}', '{$image}', '{$_POST['description']}', '{$_POST['price']}', '{$_POST['category']}')";

if ($conn->query($sql) === TRUE) {


   echo '<p style="text-align: center; margin-top: 20px;">One Product Added Successfully</p>';


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

endif;

$conn->close();
?>
<!DOCTYPE html>
<html>
<title>Dashbaord</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="w3images/logo.png" type="image/gif" sizes="16x16">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
input, select{
	width: 300px;
	padding: 8px 20px;
}
input[type="submit"]{
	background: #333;
	color: #fff;
}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><img src="w3images/logo.png" width="30" /></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $_SESSION['name']; ?></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu">
      <i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="all-products.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i> All Products </a>
    <a href="add-products.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Add Product</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>



	<div class="w3-row-padding w3-margin-bottom" style="padding: 10px 50px;">

		<form  method="post" enctype="multipart/form-data">
			<p> <b>Product Name</b><br>
				<input type="text" name="name" placeholder="Name" required /></p>
			<p> <b>Product Description</b><br>
				<input type="text" name="description" placeholder="Description" required /></p>
			<p> <b>Code</b><br>
				<input type="text" name="code" placeholder="Please add unique key" required /></p>
			<p> <b>Image</b><br>
				<input type="file" name="productImage" required /></p>
			<p> <b>Price</b><br>
				<input type="number" name="price" required /></p>
			<p> <b>Category</b><br>
				<select name="category">
					<option value="1">Movie</option>
					<option value="2">TV Series</option>
				</select></p>
			<p><input type="submit" name="save" value="Save" /></p>
		</form>

	</div>




  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">

  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
