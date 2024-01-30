


@extends('layouts.master')
@section('content')
@section('Mystyle')

<link href="{{asset('css/product_consult.css')}}" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{asset('css/css/style2.css')}}" rel="stylesheet">

@endsection


    <header>
        <!-- replace this header with yours....... -->
    </header>

    <section id="product-info">

        <div class="item-image-parent">
            <div class="item-list-vertical">


            </div>
            <div class="item-image-main">
                <img src="{{ asset('img/' . $produit->images[0]->URL) }}">
            </div>
        </div>

        <div class="item-info-parent">
            <!-- main info -->
            <div class="main-info">

                <h2>{{$produit->nom_produit}}</h2>
                <h6><a href="">{{ strtoupper($produit->artisan->nom_artisan) }}</a></h6>


            @php
             $totalRating = 0;
            $numberOfEvaluations = count($produit->evaluations);
            foreach ($produit->evaluations as $evaluation)
                {  $totalRating += $evaluation->Note; }
            $averageRating = $numberOfEvaluations > 0 ? $totalRating / $numberOfEvaluations : 0;
            @endphp

                              @for ($i = 1; $i <= 5; $i++)
                         <span class="fa fa-star{{ $i <= $averageRating ? ' checked' : '' }}"></span>
                        @endfor
                <span > {{count($produit->evaluations)}} Reviews</span>

            </div>
  <br>
            <p>Price: <span id="price">{{$produit->prix_par_piéce}} DA</span></p>


            <div class="change-color">
            @foreach ($produit->images as $image)
                    <div class="thumb-box">
                    <img src="{{ asset('img/' . $image->URL) }}">
                    </div>

          @endforeach

                </div>



                <div class="description">
                   <h3 >Description:</h3>

                    <ul>
                        <li>{{ $produit->description }}</li>
                    </ul>
                </div>
                <form action="{{route('cart_form')}}" method="POST">
                  @csrf
                <div class="change-size">
                    <label>
                      <h3 style="display: inline;">Quantity:</h3>
                    </label>


                    <input type="number" min="1"  name="qte" id="quantityInput">


                  </div>
                  <input type="hidden" value="{{$produit->Id_Produit}}" name="id_produit">
                  <input type="hidden" value="{{$produit->nom_produit}}" name="nom_produit">
                  <input type="hidden" value="{{$produit->prix_par_piéce}}" name="prixPiece">
                  <br>
                  <button type="submit" >Add to Cart</button>
              </form>

            </div>

        </div>
        </section>

        <div class="cd-cart cd-cart--empty js-cd-cart">
	<a  class="cd-cart__trigger text-replace" >
		Cart
		<ul class="cd-cart__count"> <!-- cart items count -->
			<li>0</li>
			<li>0</li>
		</ul> <!-- .cd-cart__count -->
	</a>

	<div class="cd-cart__content">
		<div class="cd-cart__layout">
			<header class="cd-cart__header">
				<h2>Cart</h2>
				<span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
			</header>

			<div class="cd-cart__body">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<footer class="cd-cart__footer">

				<a href="{{Route('checkout')}}" class="cd-cart__checkout">
        <em>Checkout: <span>0</span> DA

            <svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
            </svg>
          </em>
        </a>
			</footer>
		</div>
	</div> <!-- .cd-cart__content -->
</div> <!-- cd-cart -->



        <h3 style="margin-left:35px;"> <span> Customer Reviews   </span>
        <a href="{{ route('review_product',['id_produit' => $produit->Id_Produit]) }}"><button  style="background-color: #e45c27;     margin-left:10px;" onclick="window.location='{{ route('review_product') }}'">Leave a Review</button> </a>
</h3>

<br>

<div class="card" style="width: 100%; padding-left: 30px;">

@if ($produit->evaluations->count())

    @foreach ($produit->evaluations as $evaluation)
        <div class="card-body">
            <h5 class="card-title">
            @if ($evaluation->consommateur)
                {{ $evaluation->consommateur->nom_consommateur }}
                {{ $evaluation->consommateur->prénom_consommateur }}
            @endif
            </h5>

            @for ($i = 1; $i <= 5; $i++)
                <span class="fa fa-star{{ $i <= $evaluation->Note ? ' checked' : '' }}"></span>
            @endfor

            <br>
            <p class="card-text">{{ $evaluation->commentaire }}</p>
        </div>
    @endforeach
@else
    <h3>No evaluations available.</h3>
@endif



</div>





    @section('script')


    <script>

    const thumbnails = document.querySelectorAll('.thumb-box img');
const mainImage = document.querySelector('.item-image-main img');

thumbnails.forEach(thumbnail => {
  thumbnail.addEventListener('click', () => {
    mainImage.src = thumbnail.src;
  });
});


</script>

<script src="js/assets/util.js"></script>
<script src="js/assets/main.js"></script>


<script>
    const qtyInput = document.getElementById('quantityInput');
    const incButton = document.getElementById('sumButton');

    // Click handler
    incButton.addEventListener('click', function() {

      // Get current value
      let value = Number(qtyInput.value);

      // Validate
      if(isNaN(value) || value < 1) {
        value = 1;
      } else {
        value++;
      }

      // Set input
      qtyInput.value = value;

    });

    // On load set default
    window.onload = function() {
      qtyInput.value = 1;
    }
          </script>
      <!--<script src="js/assets/util.js"></script>
    <script src="js/assets/main.js"></script> -->



          @endsection
          @endsection


