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
        <h3> All Product List</h3><hr>
		<table  border="1" cellpadding="10">
         <tr><th>Product Name</th><th>Description</th><th>Code</th><th>Price</th><th>Category</th><th>edit</th><th>delete</th></tr>
        <?php
         $sql = "SELECT * FROM  tblproduct";

         $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           while($row = mysqli_fetch_assoc($result)) {
        ?>

            <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo $row['code']?></td>
                <td><?php echo $row['price']?></td>
                <td><?php
			     if( $row['category'] == 1 ){
					 echo 'Movie';
				 } elseif( $row['category'] == 2 ){
					 echo 'TV Series';
				 } ?></td>
                <td><a href="edit-product.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure want to edit this  item');">edit</a></td>
                <td><a href="delete-product.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure want to delete this  item');">delete</a></td>
            </tr>

        <?php
        }
        }  else {

            echo "0 results";
        }

        ?>
        </table>

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
