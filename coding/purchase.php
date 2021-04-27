<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid #196E97;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.btn1 {  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn11 {background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn111 {background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn1111 {background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn11111 {background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.col-251 {  padding: 0 16px;
}
.col-501 {  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-501 {  padding: 0 16px;
}
.col-751 {  padding: 0 16px;
}
.btn111111 {background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.col-502 {  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-502 {  padding: 0 16px;
}
.col-5011 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-5011 {padding: 0 16px;
}
.col-503 {  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-503 {  padding: 0 16px;
}
.btn111112 {background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.col-504 {  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-504 {  padding: 0 16px;
}
.col-5012 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-5012 {padding: 0 16px;
}
.col-50111 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-50111 {padding: 0 16px;
}
.col-5021 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-5021 {padding: 0 16px;
}
.btn1111121 {background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.col-505 {  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-505 {  padding: 0 16px;
}
.col-5013 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-5013 {padding: 0 16px;
}
.col-50112 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-50112 {padding: 0 16px;
}
.col-501111 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-501111 {padding: 0 16px;
}
.col-50121 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-50121 {padding: 0 16px;
}
.col-5022 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-5022 {padding: 0 16px;
}
.col-50211 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-50211 {padding: 0 16px;
}
.col-5041 {-ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-5041 {padding: 0 16px;
}
</style>
</head>
<body>


<h2 align="center"> Purchase</h2>
	<p align="right"><a class="nav-link" href="index.php">Home</a></p>
<div class="row">
  <div class="col-75">
    <div class="container">
    <form  method="post" action="buyf.form.php" style="align-content: center" >
      
        <div class="row">
          <div class="col-50">
            <h3>Shipping Address</h3>
			  
            <label for="fname"><i class="fa fa-user"></i> Name</label>
            <input type="text"  name="name" placeholder=" ">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text"  name="email" placeholder=" ">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text"  name="address" placeholder=" ">
           <label for="adr"><i class="code"></i>Zip Code</label>
            <input type="text"  name="zipcode" placeholder=" ">
           
             
          </div>

          <div class="col-50">
			  <h3>Payment</h3>
            <label for="cname">Name on Card</label>
            <input type="text"  name="nameoncard" placeholder=" ">
            <label for="ccnum">Card number</label>
            <input type="text"  name="cardnumber" placeholder=" ">
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text"  name="cvv" placeholder=" ">
              <span class="col-501"><span class="col-502"><span class="col-5011"><span class="col-504"><span class="col-5012"><span class="col-5021"><span class="col-50111"><span class="col-505"><span class="col-5013"><span class="col-5022"><span class="col-50112"><span class="col-5041"><span class="col-50121"><span class="col-50211"><span class="col-501111">
              <input type="submit" value="Submit" name="insert" align="middle"  style="background-color:#33CC00"><br><br>
              </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></div>
            </div>
          </div>
          
        <label></label>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
     
      
    </div>
  </div>
</div>

</body>
</html>

