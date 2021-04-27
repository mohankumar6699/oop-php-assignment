<?php
session_start();
ini_set('display_errors',0);
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;
}
}
?>
<!DOCTYPE html>
<html>
<title>Best Movies</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="icon" href="w3images/logo.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="style.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif;}
.w3-bar-block .w3-bar-item {padding:20px;}
.text-white{
  color: #fff;
}
.w3-right {
    right: 17px;
    position: relative;
}
a.btn {
    border: 1px solid;
    padding: 7px 20px;
    text-decoration: none !important;
}

a.btn.border-white {
    border: 1px solid #fff;

}
.padding-right{
   padding-right: 10px;
}
.social-footer {
    text-align: center;
    border-top: 1px solid #ddd;
}
.social-footer .w3-right {
    float: none !important;
    display: inline-block;
}
</style>

<body>



<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">❎  Menu</a>
  <a href="index.php"  class="w3-bar-item w3-button">Home</a>
  <a href="movie.php"  class="w3-bar-item w3-button">Movies</a>
  <a href="tv-series.php"  class="w3-bar-item w3-button">TV Series</a>
  <a href="register.html"  class="w3-bar-item w3-button">Register</a>
  <a href="login.html"  class="w3-bar-item w3-button">Login</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-left w3-padding-16 padding-right"><a href="index.php"><img src="w3images/logo.png" alt="logo" width="40"></a></div>
    <div class="w3-right w3-padding-16"><a href="#"><img src="w3images/search.png" alt="search" width="40"></a></div>

    <div class="w3-center w3-padding-16">Best Movies</div>


  </div>
</div>






<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">


<!-- Session Cart -->

  <div id="shopping-cart">
<a id="btnEmpty" href="movie.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>
<?php
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img  src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="movie.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php
}
?>
</div>
<!-- //Session Cart -->


  <div id="product-grid">
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct WHERE category=1");
	if (!empty($product_array)) {
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="movie.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
      <div class="product-description"><?php echo "$".$product_array[$key]["description"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>

	<?php
		}
	}
	?>
</div>



  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">
    <h3 class="text-white">About Me, The Best Movies & TV Series</h3><br>
    <img src="w3images/Feature text.png" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4 class="text-white"><b>I am Who I Am!</b></h4>
      <h6 class="text-white"><i>With Passion For Real, Movies & TV Series</i></h6>
      <p class="text-white">Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <hr>

  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>

    </div>

    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Movie</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">TV</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">TV Series</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Movie</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Movies</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Best Movie</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">SciFi</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">TV Series</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Series</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drama</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Movies</span>
      </p>
    </div>
  </footer>
<div class="social-footer">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">

    <div class="w3-right w3-padding-16 padding-right"><a href="#"><img src="w3images/mail.png" alt="mail" width="40"></a></div>
    <div class="w3-right w3-padding-16 padding-right"><a href="#"><img src="w3images/fb.png" alt="fb" width="40"></a></div>
    <div class="w3-right w3-padding-16 padding-right"><a href="#"><img src="w3images/instagram.png" alt="instagram" width="40"></a></div>
    <div class="w3-right w3-padding-16 padding-right"><a href="#"><img src="w3images/youtube.png" alt="youtube" width="40"></a></div>
  </div>
</div>
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
