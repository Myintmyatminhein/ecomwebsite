<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Check Out</title>
	<style>
	 ul{
      list-style-type: none;
      margin:0;
      padding:0;
      overflow: hidden;
      background-color: #333;
    }
    li{
      float: left;
    }
  li a{
      display: block;
      color: white;
      text-decoration: none;
      text-align: center;
      padding: 14px 16px;
    }
    li a:hover
    {background-color: #111;}

       .footer{
          clear:both;
          text-align: center;  
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: gray;
          color: white;
           text-align: center;
          
        }
    li.dropdown {
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {background-color: #f1f1f1;}

    .dropdown:hover .dropdown-content {
      display: block;
} 
	form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
   background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
 
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {

  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
		body{
			font-family: Arial;
			font-size: 17px;
			padding: 8px ;
		}
		* {
			box-sizing: border-box;
		}
		.row{
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			margin: 0 -16px;
		}
		.col-25{
			-ms-flex: 25%;
			flex:  25%;
		}
		.col-50{
			-ms-flex: 50%;
			flex:  50%;
		}
		.col-75{
			-ms-flex: 75%;
			flex:  75%;
		}
		.col-25;
		.col-50;
		.col-75{
			padding:  0 16px;
		}
		.container{
			background-color: #f2f2f2;
			padding: 5px 20px 15px 20px;
			border: 1px solid lightgrey;
			border-radius: 3px;
		}

	</style>
</head>
<body>
		<div class="row">
			<div class="col-75">
			<div class="container">
				<form>
					<div class="row">
						<div class="col-50">
					<h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>

            </div>
						<div class="col-50">
							<h3>Payment</h3>
							<label for="fname">Accepted Cards</label>
							<div class="icon-conatiner">
								<i class="fa fa-cc-visa" style="color:navy;"></i>
								<i class="fa fa-cc-amex" style="color:blue;"></i>
								<i class="fa fa-cc-mastercard" style="color:red;"></i>
								<i class="fa fa-cc-discover" style="color:orange;"></i>
						</div>
						<label for="cname">Name on Card</label>
						<input type="text" id="cname" name="cardname" placeholder="John More Doe">
						<label for= "ccnum">Credit card number</label>
						<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
						<label for="expmonth">Exp month</label>
						<input type="text" id="expmonth" name="expmonth" placeholder="September">
						<div class="row">
							<div class= "col-50">
								<label for="expyear">Exp Year</label>
								<input type="text" id="expyear" placeholder="2018">
							</div>
							<div class= "col-50">
								<label for="cvv">CVV</label>
								<input type="text" id="cvv" placeholder="352">
							</div>
					</div>
				</div>
				<label>
					<input type="checkbox" checked="checked" name="sameadr">Shipping address same as billing
				</label>
				<input type="submit" value="Continue to checkout" class="btn">
				</form>

		</div>
		<div class="col-25">
			<div class="container">
				<h4>Cart<span class="priide" style="color;black"><i class="fa fa-shopping-cart"></i></span></h4>
		
				<hr>
			</div>
			
		</div>


</body>
</html>
