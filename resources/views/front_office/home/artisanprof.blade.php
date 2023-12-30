


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
                <h2><a href="">{{strtoupper($artisan)}}</a></h2>

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span > (13 reviews)</span>

            </div>
  <br>

          

  <div class="change-color">
  <h3 >Our Products:</h3> 

                <div class="accordion-wrapper">
  <div class="accordion">
    <input type="radio" name="radio-a" id="check1" checked>
    <label class="accordion-label" for="check1">Pain Chocó</label>
    <div class="accordion-content">
    <div class="thumb-box">
    <img src="{{asset('img/pain_choco.jpg')}}" alt="hhh"/>
                    </div>

      <h3 >Description:</h3> 

      <ul>
                        <li>It is a pastry made with croissant dough.</li>
                        <li>The pastry is rolled with pure Belcolade chocolate.</li>
                        <li>Pain Chocó Double Chocolat is topped or filled with a layer of dark chocolate.</li>
                        <li>The pastry is known for its crispy exterior and fluffy interior.</li>
                    </ul>    </div>
  </div>
  <div class="accordion">
    <input type="radio" name="radio-a" id="check2">
    <label class="accordion-label" for="check2">Pain Chocó Double Chocolat</label>
    <div class="accordion-content">

    <div class="thumb-box">
    <img src="{{asset('img/pain_choco.jpg')}}" alt="hhh"/>
                    </div>

      <h3 >Description:</h3> 

      <ul>
                        <li>It is a pastry made with croissant dough.</li>
                        <li>The pastry is rolled with pure Belcolade chocolate.</li>
                        <li>Pain Chocó Double Chocolat is topped or filled with a layer of dark chocolate.</li>
                        <li>The pastry is known for its crispy exterior and fluffy interior.</li>
                    </ul>
    




    </div>
  </div>
  <div class="accordion">
    <input type="radio" name="radio-a" id="check3">
    <label class="accordion-label" for="check3">Pain Chocó Sucrè</label>
    <div class="accordion-content">
    <div class="thumb-box">
    <img src="{{asset('img/petit_pain.jpg')}}" alt="hhh"/>
                    </div>

      <h3 >Description:</h3> 

      <ul>
                        <li>It is a pastry made with croissant dough.</li>
                        <li>The pastry is rolled with pure Belcolade chocolate.</li>
                        <li>Pain Chocó Double Chocolat is topped or filled with a layer of dark chocolate.</li>
                        <li>The pastry is known for its crispy exterior and fluffy interior.</li>
                    </ul>
    </div>
  </div>
</div>


                </div>

           
    

                  
            </div>
            
        </div>
        </section>

        <h3 style="margin-left:35px;"> <span> Customer Reviews   </span>      <button  style="background-color: #e45c27;     margin-left:10px;" onclick="window.location='{{ route('artisan_re') }}'">Leave a Review</button>        
</h3>

<br>
        <div class="card" style="width: 100%; padding-left:30px;">
  <div class="card-body">
    <h5 class="card-title">Full Name</h5>
    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
    <p class="card-text">comment</p>

  </div>
</div>




<div class="card" style="width: 100%; padding-left:30px;">
  <div class="card-body">
    <h5 class="card-title">Full Name</h5>
    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
    <p class="card-text">comment</p>

  </div>
</div>



<div class="card" style="width: 100%; padding-left:30px;">
  <div class="card-body">
    <h5 class="card-title">Full Name</h5>
    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
    <p class="card-text">comment</p>

  </div>
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


