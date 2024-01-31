
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
    <a class="logo" href="{{Route('home')}}">Tlemcen Testies</a>

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

	  @foreach ($orders as $order)
    <tr>
    <th scope="row">{{ $order->Id_Commande }}</th>
    <td>{{ strtoupper($order->artisan->nom_artisan) }} </td>
    @if (isset($order->livreur))
        <td>{{ strtoupper($order->livreur->nom_livreur) }}</td>
    @else
    <td>Not Selected By Artisan</td>

    @endif

    <td>
	@php
         $totalPrice = 0;
         foreach ($order->produits as $produit) {
                $totalPrice += $produit->quantité_demande *  $produit->prix_par_piéce;
                    }
          @endphp
            {{ $totalPrice }} DA
	</td>
    <td>{{ $order->date_commande }}</td>
      <td>
	  @php
         $totalQuantity = 0;
         foreach ($order->produits as $produit) {
                $totalQuantity += $produit->quantité_demande;
                    }
          @endphp
            {{ $totalQuantity }}
	</td>
      <td>{{ $order->état_commande}}</td>
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
	<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <!-- carousel -->
                <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>
                    <ol class='carousel-indicators'>
                        @foreach($order->produits as $index => $produit)
                            <li data-target='#carouselExampleIndicators' data-slide-to='{{ $index }}'
                                class='{{ $index == 0 ? "active" : "" }}'></li>
                        @endforeach
                    </ol>
                    <div class='carousel-inner'>
                        @foreach($order->produits as $index => $produit)
                            <div class='carousel-item {{ $index == 0 ? "active" : "" }}'>
                                <img class='img-size' src='{{ asset("img/{$produit->URL}") }}'
                                     alt='Product Image' />
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text"
                                          style="color:black;width: 130px; padding-left:20px">Item Name :</span>
                                    <input type="text" class="form-control" value="{{ $produit->nom_produit }}"
                                           disabled>
                                </div>

                                <div class="input-group flex-nowrap mt-3 ">
                                    <span class="input-group-text  " style="color:black;width: 130px; padding-left:20px">Item
                                        Price :
                                        <i class="bi bi-envelope-fill"></i> </span>
                                    <input type="text" class="form-control" value="{{ $produit->prix_par_piéce }}"
                                           disabled>
                                </div>

                                <div class="input-group flex-nowrap mt-3 ">
                                    <span class="input-group-text " style="color:black;width: 130px;">Item
                                        Quantity :</span>
                                    <input type="text" class="form-control"
                                           value="{{ $produit->quantité_demande }}" disabled>
                                </div>

                                <div class="input-group flex-nowrap mt-3 ">
                                    <span class="input-group-text " style="color:black;width: 150px;">Shipping
                                        Details :</span>
                                    <input type="text" class="form-control" value="{{ $order->adresse_livraison }}"
                                           disabled>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button'
                       data-slide='prev'>
                        <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    </a>
                    <a class='carousel-control-next' href='#carouselExampleIndicators' role='button'
                       data-slide='next'>
                        <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style=" color:white;">Close
                </button>
                @if (isset($order->livreur))  
                <a href="{{ route('set_review_id', ['id_livreur' => $order->livreur->Id_Livreur]) }}">
                  <button class="btn btn-primary"                
                    style="background-color: #e45c27; color:white; margin-left:10px;"
                    >
                   Review Delivery
                 </button>
               </a>
               @else   <button disabled class="btn btn-primary"                
                    style="background-color: #e45c27; color:white; margin-left:10px;"
                    >
                   Review Delivery
                 </button>
               @endif
               
               @endforeach


            </div>


        </div>
    </div>
</div>





  </body>
</html>
