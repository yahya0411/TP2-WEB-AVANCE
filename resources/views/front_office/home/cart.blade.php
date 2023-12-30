<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="stylesheet"  href="{{asset('css/fd/custom.css')}}" />	
		<link href="{{ asset('css/fd/bootstrap.min.css') }}" rel="stylesheet">


	</head>

	<body>
		
		
		<nav class="navbar">
				<a class="navbar-brand" href="{{Route('products')}}">Tlemcen Testies</a>
				<div class="navbar-right">
			</div>
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li><a href="#">Review</a></li>
				<li class="active"><a href="#">Order</a></li>
				<li><a href="#">Checkout
				</a></li>
			</ol>
		</div>
		
		<div class="container text-center">

			<div class="col-md-5 col-sm-12">
				<div class="bigcart"><img src="{{asset('images/sprite.png')}}" alt=""/></div>
				<h1>Your shopping cart</h1>
				
			</div>
			
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span>QTY</span>
						<span>ITEM</span>
						<span>Price</span>
					</li>
					<li class="row">
						<span class="quantity" id="quantity" >1</span>
						<span class="itemName">Pain Chocó</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price" id="price">10.00</span>
					</li>
					<li class="row">
						<span class="quantity" id="quantity">50</span>
						<span class="itemName">Pain Chocó Double Chocolat</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price" id="price">12.50</span>
					</li>
					<li class="row">
						<span class="quantity" id="quantity">20</span>
						<span class="itemName">Pain Chocó Sucrè</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price" id="price">15.00</span>				
					</li>


					<li class="row totals">
						<span class="itemName">Total:</span>
						<span class="priceT" id="priceT" > </span>
						<span class="order">  
						  <a class="text-center" style="margin-right:15px;" href="{{Route('checkout')}}" >Check Out</a>
						</span> 
					  </li>
				</ul>
			</div>

		</div>
		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#" ><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 



        <script src="{{asset('js/fd/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/fd/customjs.js')}}"></script>


<script>

	var prices = parseFloat(document.getElementById("price").innerHTML);
	var quantities = parseFloat(document.getElementById("quantity").innerHTML);
	let totalPriceElement = document.querySelector('.priceT');

function calculateTotal() {
  // Initialize total to 0
  let total = 0;

  // Loop through each price and quantity element
  const prices = document.querySelectorAll('.price');
  const quantities = document.querySelectorAll('.quantity');
  for (let i = 0; i < prices.length; i++) {
    const price = parseFloat(prices[i].textContent);
    const quantity = parseInt(quantities[i].textContent);

    // Add product price multiplied by quantity to total
    total += price * quantity;
  }

  // Update total element with formatted price
  return total;
}


	
let totalPr = document.querySelector('.priceT');

totalPr.innerHTML=calculateTotal();

document.getElementById("priceT").innerHTML=calculateTotal();



  </script>

	</body>
</html>