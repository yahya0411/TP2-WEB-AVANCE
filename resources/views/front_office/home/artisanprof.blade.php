


@extends('layouts.master')
@section('content')
@section('Mystyle')

<link href="{{asset('css/product_list.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



@endsection


    <header>
        <!-- replace this header with yours....... -->
    </header>
    

    <section id="product-info">

        <div class="item-image-parent" >
            <div class="item-list-vertical" style="width: 100px;height:100px; padding-left:90px">


            </div>
            <div class="item-image-main"   >
            <img src="../img/homme.png">
            </div>
        </div>

        <div class="item-info-parent" style="margin-top:50px;">
            <!-- main info -->
            <div class="main-info">
                <h2><a href="">{{strtoupper($artisan->nom_artisan)}}</a></h2>

                @php
           $totalRating = 0;
         $numberOfEvaluations = count($artisan->evaluations);
       foreach ($artisan->evaluations as $evaluation)
       {  $totalRating += $evaluation->Note; }
    $averageRating = $numberOfEvaluations > 0 ? $totalRating / $numberOfEvaluations : 0;
            @endphp
                  

                            
                              @for ($i = 1; $i <= 5; $i++)
                         <span class="fa fa-star{{ $i <= $averageRating ? ' checked' : '' }}"></span>
                        @endfor
                     
                <span > ({{count($artisan->evaluations)}} reviews)</span>

            </div>
  <br>

          

  <div class="change-color">
  <h3 >Our Products:</h3> 

  <div class="accordion-wrapper">

    @foreach($artisan->produits as $prod)
  <div class="accordion">
    <input type="radio" name="radio-a" id="check1" checked>
    <label class="accordion-label" for="check1">{{$prod->nom_produit}}</label>
    <div class="accordion-content">
    <div class="thumb-box">
    <img src="{{ asset('img/' . $prod->images[0]->URL) }}" alt="hhh"/>
                    </div>

      <h3 >Description:</h3> 

      <ul>
                        <li>{{$prod->description}}</li>
                        <li>It is a pastry made with croissant dough.</li>
                        <li>The pastry is rolled with pure Belcolade chocolate.</li>
                        <li>Pain Chocó Double Chocolat is topped or filled with a layer of dark chocolate.</li>
                        <li>The pastry is known for its crispy exterior and fluffy interior.</li>
                </ul>    </div>
  </div>
  @endforeach
 
  
</div>


                </div>
  
            </div>
            
        </div>
        </section>

        <h3 style="margin-left:35px;"> <span> Customer Reviews   </span>      <a href="{{ route('artisan_re',['nom_artisan' => $artisan->nom_artisan]) }}"><button  style="background-color: #e45c27;     margin-left:10px;" onclick="window.location='{{ route('artisan_re') }}'">Leave a Review</button> </a>     
</h3>

<br>
        <div class="card" style="width: 100%; padding-left:30px;">
        @if ($artisan->evaluations->count())

@foreach ($artisan->evaluations as $evaluation)
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



<script>
    const qtyInput = document.getElementById('quantityInput');
    const incButton = document.getElementById('sumButton');
    
    // // Click handler
    // incButton.addEventListener('click', function() {
    
    //   // Get current value
    //   let value = Number(qtyInput.value);
      
    //   // Validate
    //   if(isNaN(value) || value < 1) {
    //     value = 1;
    //   } else {
    //     value++;  
    //   }
    
    //   // Set input
    //   qtyInput.value = value;
    
    // });
    
    // On load set default
    // window.onload = function() {
    //   qtyInput.value = 1; 
    // }
          </script>
          @endsection
          @endsection


