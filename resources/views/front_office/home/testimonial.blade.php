@extends('layouts.master')
@section('content')
@section('Mystyle')
<link href="{{asset('css/artisan.css')}}" rel="stylesheet">


@endsection
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s" style="  height:fit-content; ">

                        <!--  Container    --->

                        <!-- new row   --->



                                      <div class="s002">


                                                <form class="s002">

                                                <div class="inner-form">
                                                            <div class="input-field first-wrap">

                                                              <input id="text" type="text" placeholder="Artisan's full name" />
                                                            
                                                            </div>
                                                        
                                                        
                                                            <div class="input-field second-wrap">
                                                              
                                                                <input   type="text" placeholder="Common" />
                                                            
                                                            </div>
                                                        
                                                        

                                                        
                                                            <div class="input-field fouth-wrap">

                                                                  <select data-trigger="" name="choices-single-defaul">
                                                                    <option placeholder="">Type</option>
                                                                    <option>Sweety</option>
                                                                    <option>Salty</option>
                                                                    <option>(Both)</option>
                                                                  </select>
                                                            </div>
                                                        
                                                        
                                                            <div class="input-field fouth-wrap">

                                                          <select id="star-rating">
                                                            <option placeholder="" value="">Rating</option>
                                                            <option value="1">1 star</option>
                                                            <option value="2">2 stars</option>
                                                            <option value="3">3 stars</option>
                                                            <option value="4">4 stars</option>
                                                            <option value="5">5 stars</option>
                                                          </select>
                                                        </div>

                                                            <div class="input-field fifth-wrap">

                                                                  <button class="btn-search" type="button">SEARCH</button>
                                                                  
                                                            </div>


                                                </div>


                                                </form>
                                      </div>





                                      <div class="s003" style="visibility:hidden;">


<form class="s002">

<div class="inner-form">
            <div class="input-field first-wrap">

              <input id="text" type="text" placeholder="Artisan's full name" />
            
            </div>
        
        
            <div class="input-field second-wrap">
              
                <input   type="text" placeholder="Common" />
            
            </div>
        
        

        
            <div class="input-field fouth-wrap">

                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="">Type</option>
                    <option>Sweety</option>
                    <option>Salty</option>
                    <option>Sweety && Salty (Both)</option>
                  </select>
            </div>
        
        
            <div class="input-field fouth-wrap">

          <select id="star-rating">
            <option placeholder="" value="">Rating</option>
            <option value="1">1 star</option>
            <option value="2">2 stars</option>
            <option value="3">3 stars</option>
            <option value="4">4 stars</option>
            <option value="5">5 stars</option>
          </select>
        </div>

            <div class="input-field fifth-wrap">

                  <button class="btn-search" type="button">SEARCH</button>
                  
            </div>


</div>


</form>
</div>
                    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl bg-light my-6 py-6 pb-0 text-center">
                      <div class="container">
                          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                              <h1 class="display-6 mb-4">Our Artisans</h1>
                          </div>
                          <hr></hr>

                          <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                              <div class="testimonial-item bg-white rounded p-4 mx-auto" style="max-width: 50%;">
                                      <div class="d-flex align-items-center mb-4" style="margin-left:100px">
                                          <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-1.jpg" alt="">
                                          <div class="ms-4">
                                              <h4 class="mb-1" style="">First Artisan</h5>



                                              <span></span>

                                              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star"></span>
                                                  <span class="fa fa-star"></span>
                                           <span></span>
                                                      <p></p>
                                              <h6 class="mb-1" >Common: mansourah</h5>

                                              <p></p>
                                              <h6 class="mb-1" >Type of Product : Sweety</h5>
                                              <p></p>
                                              <button class="btn btn-primary btn-sm"  >View Profile</button>

                                          </div>

                                      </div>

                                      <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>

                                </div>


                          </div>




                          <hr></hr>



                          <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                              <div class="testimonial-item bg-white rounded p-4 mx-auto" style="max-width: 50%;">
                                      <div class="d-flex align-items-center mb-4" style="margin-left:100px">
                                          <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-2.jpg" alt="">
                                          <div class="ms-4">
                                              <h4 class="mb-1" style="">Second Artisan</h5>



                                              <span></span>

                                              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star"></span>
                                                  <span class="fa fa-star"></span>
                                           <span></span>
                                           <p></p>
                                              <h6 class="mb-1" >Common: mansourah</h5>

                                              <p></p>
                                              <h6 class="mb-1" >Type of Product : Salty</h5>
                                              <p></p>
                                              <button class="btn btn-primary btn-sm"  >View Profile</button>

                                          </div>

                                      </div>

                                      <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>

                                </div>


                          </div>








<hr></hr>



                          <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                              <div class="testimonial-item bg-white rounded p-4 mx-auto" style="max-width: 50%;">
                                      <div class="d-flex align-items-center mb-4" style="margin-left:100px">
                                          <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-3.jpg" alt="">
                                          <div class="ms-4">
                                              <h4 class="mb-1" style="">Third Artisan</h5>



                                              <span></span>

                                              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star"></span>
                                                  <span class="fa fa-star"></span>
                                           <span></span>
                                           <p></p>
                                              <h6 class="mb-1" >Common: mansourah</h5>

                                              <p></p>
                                              <h6 class="mb-1" >Type of Product : Sweety</h5>
                                              <p></p>
                                              <button class="btn btn-primary btn-sm"  >View Profile</button>

                                          </div>

                                      </div>

                                      <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>

                                </div>


                          </div>
            <div class="bg-primary text-light rounded-top p-5 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s"> </div>
        </div>
    </div>
    <!-- Testimonial End -->


@section('script')


<script src="js/choices.js"></script>



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
