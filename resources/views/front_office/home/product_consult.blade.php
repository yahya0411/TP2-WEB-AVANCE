


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
                <img src="img/pain_choco.jpg" alt="default" />
            </div>
        </div>

        <div class="item-info-parent">
            <!-- main info -->
            <div class="main-info">
                <h2 style="margin: 30px 0px;" >Pain Chocó Double Chocolat</h2>
                <h6 style="margin: 20px 0px;" ><a href="">Craftsman: Bake_house</a></h6>

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span > (13 reviews)</span>

            </div>
  <br>
            <p>Price: <span id="price">12,50 DA</span></p>

          
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

                  <br>







    <button> 
      <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="12.50">Add To Cart</a>  </button>  
    </p>



                  
            </div>
            
        </div>
        </section>





        <div class="cd-cart cd-cart--empty js-cd-cart">
	<a href="#0" class="cd-cart__trigger text-replace">
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














        <h3 style="margin-left:35px;"> <span> Customer Reviews   </span>      <button  style="background-color: #e45c27;     margin-left:10px;" onclick="window.location='{{ route('review_product') }}'">Leave a Review</button>        
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

<script src="js/assets/util.js"></script> 
<script src="js/assets/main.js"></script> 

          @endsection
          @endsection


