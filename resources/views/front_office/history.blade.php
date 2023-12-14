
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



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">More Options Of Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style=" color:white;" >Close</button>

        <button  class="btn btn-primary"  style="background-color: #e45c27;     color:white;  margin-left:10px;" onclick="window.location='{{ route('review') }}'"> Review Delivery</button>


      </div>
    </div>
  </div>
</div>




  </body>
</html>
