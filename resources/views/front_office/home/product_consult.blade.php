


@extends('layouts.master')
@section('content')
@section('Mystyle')

<link href="{{asset('css/product_consult.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection


    <header>
        <!-- replace this header with yours....... -->
    </header>

    <section id="product-info">

        <div class="item-image-parent">
            <div class="item-list-vertical">


            </div>
            <div class="item-image-main">
                <img src="img/pain_choco.jpg" alt="default" />
            </div>
        </div>

        <div class="item-info-parent">
            <!-- main info -->
            <div class="main-info">
            
                <h2>{{$produit->nom_produit}}</h2>
                <h6><a href="">{{ strtoupper($produit->artisan->nom_artisan) }}</a></h6>
                @foreach($produit->evaluations as $evaluation )
                @for ($i = 1; $i <= 5; $i++)
                 <span class="fa fa-star{{ $i <= $evaluation->Note ? ' checked' : '' }}"></span>
                     @endfor
                     @endforeach
                <span > {{count($produit->evaluations)}} Reviews</span>

            </div>
  <br>
            <p>Price: <span id="price">{{$produit->prix_par_piéce}} DA</span></p>

          
            <div class="change-color">
                    <div class="thumb-box">
                        <img src="img/pain_choco.jpg" alt="thumbnail" />
                    </div>
                    <div class="thumb-box">
                        <img src="img/petit_pain.jpg" alt="thumbnail" />
                    </div>

                    <div class="thumb-box">
                        <img src="img/pain_choco.jpg" alt="thumbnail" />
                    </div>


                </div>



                <div class="description">
                   <h3 >Description:</h3> 

                    <ul>
                        <li>It is a pastry made with croissant dough.</li>
                        <li>The pastry is rolled with pure Belcolade chocolate.</li>
                        <li>Pain Chocó Double Chocolat is topped or filled with a layer of dark chocolate.</li>
                        <li>The pastry is known for its crispy exterior and fluffy interior.</li>
                    </ul>
                </div>
                <div class="change-size">
                    <label>
                      <h3 style="display: inline;">Quantity:</h3>
                    </label>


                    <input type="number" min="1"  name="qte" id="quantityInput">
              
                    <button id="sumButton">+</button>
                  </div>
                  <br>

                  
                  <button onclick="window.location='{{ route('cart') }}'">Add to Cart</button>        

                  
            </div>
            
        </div>
        </section>

        <h3 style="margin-left:35px;"> <span> Customer Reviews   </span>      <button  style="background-color: #e45c27;     margin-left:10px;" onclick="window.location='{{ route('review_product') }}'">Leave a Review</button>        
</h3>

<br>

        <div class="card" style="width: 100%; padding-left:30px;">
        @if($produit->evaluations && count($produit->evaluations) > 0)
        @foreach($produit->evaluations as $evaluation)
        
  <div class="card-body">
  <h5 class="card-title">
  @foreach($evaluation->faires as $faire)
    
     {{$faire->consommateur->nom_consommateur}} 
      {{$faire->consommateur->prénom_consommateur}}
  
  @endforeach
  </h5>
    
    @for ($i = 1; $i <= 5; $i++)
    <span class="fa fa-star{{ $i <= $evaluation->Note ? ' checked' : '' }}"></span>
@endfor

                        <br>
    <p class="card-text">{{$evaluation->commentaire}}</p>

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
          @endsection
          @endsection


