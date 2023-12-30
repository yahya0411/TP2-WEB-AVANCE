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


                                                <form class="s002"  method="get">

                                                <div class="inner-form">
                                                            <div class="input-field first-wrap">

                                                              <input id="text" type="text" placeholder="Artisan's full name" name="artisan_name" />
                                                            
                                                            </div>
                                                        
                                                        
                                                            <div class="input-field second-wrap">
                                                              
                                                                <input   type="text" placeholder="Common" name="commune" />
                                                            
                                                            </div>
                                                        
                                                        

                                                        
                                                            <div class="input-field fouth-wrap">

                                                                  <select data-trigger="" name="type" >
                                                                    <option placeholder="">Type</option>
                                                                    <option value="sweety">Sweety</option>
                                                                    <option value="salty">Salty</option>
                                                                    <option value="Both">(Both)</option>
                                                                  </select>
                                                            </div>
                                                        
                                                        
                                                            <div class="input-field fouth-wrap">

                                                          <select id="star-rating" name="star_artisan">
                                                            <option placeholder="" value="">Rating</option>
                                                            <option value="1">1 star</option>
                                                            <option value="2">2 stars</option>
                                                            <option value="3">3 stars</option>
                                                            <option value="4">4 stars</option>
                                                            <option value="5">5 stars</option>
                                                          </select>
                                                        </div>

                                                            <div class="input-field fifth-wrap">

                                                                  <button class="btn-search" type="submit">SEARCH</button>
                                                                  
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
    <div class="container-xxl bg-light my-6 py-6 pb-0" style="margin:  0;   margin-top: 100px;  margin-left:12rem;
  padding-top: 0;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"  >
            <h6 class="display-6 mb-4" style="color:#FDF5EB;"  > hhh</h6>

                <h1 class="display-6 mb-4"  >Our Artisans</h1>

            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s" >
            @foreach ($artisans as $artisan)
            <div class="testimonial-item bg-white rounded p-4"  >
                    <div class="d-flex align-items-center mb-4" style="margin-left:100px">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-2.jpg" alt="">
                        <div class="ms-4">
                            <h4 class="mb-1" style="margin-left:15px">{{$artisan->nom_artisan}}</h5>



                            @for ($i = 1; $i <= 5; $i++)
                  <span class="fa fa-star{{ $i <= $artisan->avg_rating ? ' checked' : '' }}"></span>
                         @endfor

                            <h6 class="mb-1" style="margin-top:8px;">Common: {{$artisan->commune}}</h5>


                            <h6 class="mb-1" style="margin-top:20px;">Type of Product : {{$artisan->catégorie}}</h5>



                           <a href="{{ route('profile', ['artisan' => $artisan->nom_artisan]) }}"> <button class="btn btn-primary btn-sm" style="margin-top:20px; margin-left:30px;" onclick="window.location='{{route('profile')}}'" >View Profile</button></a>

                        </div>

                    </div>
                </div>
                @endforeach

   

            </div>
            <div class="bg-primary text-light rounded-top p-5 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">

            </div>
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
