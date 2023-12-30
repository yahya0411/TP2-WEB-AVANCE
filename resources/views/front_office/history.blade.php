
<!DOCTYPE html>
  <head>
    
    <title>Booking History</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="{{asset('css/order_history.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
  <style>
	.img-size{
/* 	padding: 0;
	margin: 0; */
	height: 450px;
	width: fit-content;
	background-size: cover;
	overflow: hidden;
}
.modal-content {
   width: 700px;
  border:none;
  margin:0 30px;
}
.modal-body {
   padding: 0;
   margin:0 30px 50px;

}

.carousel-control-prev-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
	width: 30px;
	height: 48px;
  margin:0px 60px 150px 0px;
  t
}
.carousel-control-next-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
	width: 30px;
	height: 48px;
  margin:0px 0px 150px 60px;

}
</style>

  </head>
  <body>


    <nav class="nav">
    <a class="logo" href="{{Route('index')}}">Tlemcen Testies</a>

    </nav>


    <div class="booking-history">
      <h1 style="margin-left:20px;">Order History</h1>



      <table class="table table-striped" style="margin:20px;">
  <thead>
    <tr>
      
      <th scope="col">Order ID</th>
          <th scope="col">Artisan's Name</th>
          <th scope="col" >Delivery's Name</th>
          <th scope="col">Total Cost</th>
          <th scope="col">Order Date</th>
          <th scope="col">Quantity</th>
          <th scope="col">Status</th>
          <th scope="col"></th>
          <th scope="col">Options</th>

    </tr>
  </thead>

  
  
   
  










    
 
      <tbody>
    <tr>
    <th scope="row"></th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>  
      <td></td>
      <td></td>
    <td></td>
    <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="color:white;">
  Take a Look
</button></td>



    
    </tr>


    
   
  </tbody>


  </table>

  
      
    </div>



      <div class="container">
  
	
  
	<!-- modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-body">
			 <!-- carousel -->
			<div
				 id='carouselExampleIndicators'
				 class='carousel slide'
				 data-ride='carousel'
				 >
			  <ol class='carousel-indicators'>
				<li
					data-target='#carouselExampleIndicators'
					data-slide-to='0'
					class='active'
					></li>
				<li
					data-target='#carouselExampleIndicators'
					data-slide-to='1'
					></li>
				<li
					data-target='#carouselExampleIndicators'
					data-slide-to='2'
					></li>
			  </ol>
			  <div class='carousel-inner'>
				<div class='carousel-item active'>
				  <img class='img-size' src='{{asset('img/pain_choco.jpg')}}' alt='First slide' />
				  <div class="input-group flex-nowrap">
					<span class="input-group-text" style="color:black;width: 130px; padding-left:20px">Item Name :</span>
					<input type="text" class="form-control" value="" disabled>
				</div>
			
				<div class="input-group flex-nowrap mt-3 ">
						<span class="input-group-text  " style="color:black;width: 130px; padding-left:20px">Item Price :
						<i class="bi bi-envelope-fill"></i>   </span>
						<input type="text" class="form-control" value="" disabled>
				</div>

				<div class="input-group flex-nowrap mt-3 ">
						<span class="input-group-text " style="color:black;width: 130px;">Item Quantity :</span>
						<input type="password" class="form-control" value="" disabled>
				</div>

				<div class="input-group flex-nowrap mt-3 ">
						<span class="input-group-text " style="color:black;width: 150px;">Shipping Details :</span>
						<input type="text" class="form-control" value="" disabled>
				</div>
				  
				</div>
				<div class='carousel-item'>
				  <img class='img-size' src='{{asset('img/petit_pain.jpg')}}' alt='Second slide' />
				  <div class="input-group flex-nowrap">
					<span class="input-group-text" style="color:black;width: 130px; padding-left:20px">Item Name :</span>
					<input type="text" class="form-control" value="" disabled>
				</div>
			
				<div class="input-group flex-nowrap mt-3 ">
						<span class="input-group-text  " style="color:black;width: 130px; padding-left:20px">Item Price :
						<i class="bi bi-envelope-fill"></i>   </span>
						<input type="text" class="form-control" value="" disabled>
				</div>

				<div class="input-group flex-nowrap mt-3 ">
						<span class="input-group-text " style="color:black;width: 130px;">Item Quantity :</span>
						<input type="password" class="form-control" value="" disabled>
				</div>

				<div class="input-group flex-nowrap mt-3 ">
						<span class="input-group-text " style="color:black;width: 150px;">Shipping Details :</span>
						<input type="text" class="form-control" value="" disabled>
				</div>
				</div>
				<div class='carousel-item'>
				  <img class='img-size' src='{{asset('img/pain_choco.jpg')}}' alt='Second slide' />
				  <div class="input-group flex-nowrap">
					<span class="input-group-text" style="color:black;width: 130px; padding-left:20px">Item Name :</span>
					<input type="text" class="form-control" value="" disabled>
				</div>
			
				<div class="input-group flex-nowrap mt-3 ">
						<span class="input-group-text  " style="color:black;width: 130px; padding-left:20px">Item Price :
						<i class="bi bi-envelope-fill"></i>   </span>
						<input type="text" class="form-control" value="" disabled>
				</div>

				<div class="input-group flex-nowrap mt-3 ">
						<span class="input-group-text " style="color:black;width: 130px;">Item Quantity :</span>
						<input type="password" class="form-control" value="" disabled>
				</div>

				<div class="input-group flex-nowrap mt-3 ">
						<span class="input-group-text " style="color:black;width: 150px;">Shipping Details :</span>
						<input type="text" class="form-control" value="" disabled>
				</div>
				</div>
			  </div>
			  <a
				 class='carousel-control-prev'
				 href='#carouselExampleIndicators'
				 role='button'
				 data-slide='prev'
				 >
				<span class='carousel-control-prev-icon'
					  aria-hidden='true'
					  ></span>
			  </a>
			  <a
				 class='carousel-control-next'
				 href='#carouselExampleIndicators'
				 role='button'
				 data-slide='next'
				 >
				<span
					  class='carousel-control-next-icon'
					  aria-hidden='true'
					  ></span>
			  </a>
			</div>
		  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style=" color:white;" >Close</button>

        <button  class="btn btn-primary"  style="background-color: #e45c27;     color:white;  margin-left:10px;" onclick="window.location='{{ route('review') }}'"> Review Delivery</button>


      </div>
		</div>
	  </div>
	</div>




  </body>
</html>
