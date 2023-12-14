@extends('layouts.master')
@section('content')
@section('Mystyle')

<link href="{{asset('css/product.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <!-- <h1 class="display-4 text-white animated slideInDown mb-3">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Products</li>
                </ol>
            </nav> -->

            <div class="s008">
                <form>
                  <div class="inner-form">
                    <div class="basic-search">
                      <div class="input-field">
                        <input id="search" type="text" placeholder="Type Keywords" />
                        <div class="icon-wrap">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                            <path d="M18.869 19.162l-5.943-6.484c1.339-1.401 2.075-3.233 2.075-5.178 0-2.003-0.78-3.887-2.197-5.303s-3.3-2.197-5.303-2.197-3.887 0.78-5.303 2.197-2.197 3.3-2.197 5.303 0.78 3.887 2.197 5.303 3.3 2.197 5.303 2.197c1.726 0 3.362-0.579 4.688-1.645l5.943 6.483c0.099 0.108 0.233 0.162 0.369 0.162 0.121 0 0.242-0.043 0.338-0.131 0.204-0.187 0.217-0.503 0.031-0.706zM1 7.5c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5-6.5-2.916-6.5-6.5z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="advance-search">
                      <span class="desc">Advanced Search</span>
                      <div class="row">
                        <div class="input-field">
                          <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                              <option placeholder="" value="">Category</option>
                              <option>Category A</option>
                              <option>Category B</option>
                              <option>Category C</option>
                            </select>
                          </div>
                        </div>
                        <div class="input-field">
                          <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                              <option placeholder="" value="">Sub Category</option>
                              <option>Sub Category A</option>
                              <option>Sub Category B</option>
                              <option>Sub Category C</option>
                            </select>
                          </div>
                        </div>

                        <div class="input-field">
                          <div class="input-select">
                            <select id="star-rating">
                              <option placeholder="" value="">Rating</option>
                            <option value="1">1 star</option>
                            <option value="2">2 stars</option>
                            <option value="3">3 stars</option>
                            <option value="4">4 stars</option>
                            <option value="5">5 stars</option>
                          </select>
                        </div>
                      </div>


                      </div>

                      <div class="row second">

                                    <div class="card">
                                      <div class="price-content">
                                        <div>
                                          <p id="min-price">Min Price: DA</p>
                                          <input type="range" min="0" max="1000"  id="min-price-slider">
                                        </div>

                                      </div>
                                    </div>


                                    <div class="card">
                                      <div class="price-content">

                                        <div>
                                          <p id="max-price">Max Price: Da</p>
                                          <input type="range" min="500" max="10000"  id="max-price-slider">
                                        </div>
                                      </div>
                                    </div>
                      </div>

                      <div class="row third">
                        <div class="input-field">
<p></p>
                          <div class="group-btn">
                            <button class="btn-search">Search</button>
                          </div>
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

        </div>


    </div>
    <nav class="navbar navbar-expand-lg navbar-light  py-4 px-4 " style="background:#EAA636;"  >


               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                   data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:45px;">
                   <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                       <li class="nav-item dropdown ">
                           <a class="nav-link dropdown-toggle second-text fw-bold " style="color:#ffffff;" href="#" id="navbarDropdown"
                               role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                               <i class="fa fa-filter" style="font-size: 25px;" ></i> <span style="color:#ffffff;     font-size: 25px; ">Filter By</span>
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                               <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#data_client">Price : Low To High</a></li>

                               <li><a class="dropdown-item" href=""  >Price : High To Low</a></li>
                               <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#data_client">Avg. Customer Review</a></li>


                           </ul>
                       </li>
                   </ul>
               </div>
           </nav>

    <!-- Page Header End -->


    <!-- Product Start -->





























    <div class="containeraa "  >
        
        <div class="details">
            <div class="content">
            <img src="img/pain_choco.jpg">

                   <h2 >Pain Chocó <br>                 </h2>

                   <br> 
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>

                <p style="visibility:hidden;">

                    Cushioned Comfort
                </p>

                <h2 >10,00 DA <br>
                <p></p>
                <button onclick="window.location='{{ route('product_consult') }}'">See Product</button>        
            </div>
        </div>


        <div class="details2">
            <div class="content2">
            <img src="img/pain_choco.jpg">

                   <h2 >Pain Chocó Double Chocolat<br>                 </h2>
                   <br> 

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                <p style="visibility:hidden;">

                    Cushioned Comfort
                </p>

                <h2 >12,50 DA <br>
                <p></p>
                <button onclick="window.location='{{ route('product_consult') }}'">See Product</button>        
            </div>
        </div>



        <div class="details3">
            <div class="content3">
            <img src="img/petit_pain.jpg">

                   <h2 >Pain Chocó Sucrè<br>                 </h2>
                   <br> 

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                <p style="visibility:hidden;">

                    Cushioned Comfort
                </p>

                <h2 >15,00 DA<br>
                <p></p>
                <button onclick="window.location='{{ route('product_consult') }}'">See Product</button>        
            </div>
        </div>
    </div>


    </div>










    





    <!-- Product End -->



@section('script')

    <script src="{{asset('js/choices.js')}}"></script>
    <script>

const minPriceSlider = document.getElementById('min-price-slider');
const maxPriceSlider = document.getElementById('max-price-slider');
const minPriceDisplay = document.getElementById('min-price');
const maxPriceDisplay = document.getElementById('max-price');

minPriceSlider.addEventListener('input', function() {
  minPriceDisplay.textContent = `Min Price: DA ${minPriceSlider.value}`;
});

maxPriceSlider.addEventListener('input', function() {
  maxPriceDisplay.textContent = `Max Price: DA ${maxPriceSlider.value}`;
});
</script>


<script>




      const customSelects = document.querySelectorAll("select");
      const deleteBtn = document.getElementById('delete')
      const choices = new Choices('select',
      {
        searchEnabled: false,
        removeItemButton: true,
        itemSelectText: '',
      });
      for (let i = 0; i < customSelects.length; i++)
      {
        customSelects[i].addEventListener('addItem', function(event)
        {
          if (event.detail.value)
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('valid')
            parent.classList.remove('invalid')
          }
          else
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('invalid')
            parent.classList.remove('valid')
          }
        }, false);
      }
      deleteBtn.addEventListener("click", function(e)
      {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++)
        {
          deleteAll[i].click();
        }
      });

    </script>
@endsection
@endsection
