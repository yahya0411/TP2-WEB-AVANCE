@extends('layouts.master')
@section('content')
@section('Mystyle')
<link href="{{asset('css/artisan.css')}}" rel="stylesheet">

@endsection
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s" style="   margin-bottom: 0;
  padding-bottom: 0;">
        <div class="container text-center pt-5 pb-3">

        <div class="container-fluid px-4" style="margin-left: 100px; height:200px;" >
<!--  Container    --->

<!-- new row   --->




<form method="post" action="">
  <div class="row mt-3" >
  <div class="col-2" style=" margin-top:5px;">
      <div class="input-group mb-3">
        <span class="input-group-text"> Name:</span>
        <input type="text" class="form-control" required name="value">
      </div>
    </div>
    <div class="col-2" style=" margin-top:5px;">
      <div class="input-group mb-3">
        <span class="input-group-text">Common:</span>
        <input type="text" class="form-control" required name="Common">
      </div>
    </div>
    <div class="col-2" style=" width:300px;">
      <div class="input-field">
        <div class="input-select">
          <select id="star-rating">
            <option placeholder="" value="">Type Of Product</option>
            <option value="1">Sweety</option>
            <option value="2">Salty</option>
            <option value="3">Sweety && Salty (Both)</option>

          </select>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="input-field">
        <div class="input-select">
          <select id="star-rating">
            <option placeholder="" value="">Ratings</option>
            <option value="1">1 star</option>
            <option value="2">2 stars</option>
            <option value="3">3 stars</option>
            <option value="4">4 stars</option>
            <option value="5">5 stars</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-2">
      <button class="btn btn-outline-primary text-light" style="background-color: #e45c27; margin-top:5px;" name="submit">Search</button>
    </div>
  </div>
</form>









  </div>

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
                <div class="testimonial-item bg-white rounded p-4"  >
                    <div class="d-flex align-items-center mb-4" style="margin-left:100px">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-1.jpg" alt="">
                        <div class="ms-4">
                            <h4 class="mb-1" style="margin-left:15px">Artisan Name</h5>



                            <span></span>
                    <div class="rate" style="margin-top: 20px; margin-bottom: 20px;">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>
                      <span></span>

                            <h6 class="mb-1" style="margin-top:8px;">Common: mansourah</h5>


                            <h6 class="mb-1" style="margin-top:20px;">Type of Product : Sweety</h5>

                            <button class="btn btn-primary btn-sm" style="margin-top:20px; margin-left:30px;" >View Profile</button>

                        </div>

                    </div>

                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>


                <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4" style="margin-left:100px">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-2.jpg" alt="">
                        <div class="ms-4">
                            <h4 class="mb-1" style="margin-left:15px">Artisan Name</h5>



                            <span></span>
                    <div class="rate" style="margin-top: 20px; margin-bottom: 20px;">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>
                      <span></span>

                            <h6 class="mb-1" style="margin-top:8px;">Common: mansourah</h5>


                            <h6 class="mb-1" style="margin-top:20px;">Type of Product : Sweety</h5>
                            <button class="btn btn-primary btn-sm" style="margin-top:20px; margin-left:30px;" >View Profile</button>

                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>






                <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4" style="margin-left:100px">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-3.jpg" alt="">
                        <div class="ms-4">
                            <h4 class="mb-1" style="margin-left:15px">Artisan Name</h5>



                            <span></span>
                    <div class="rate" style="margin-top: 20px; margin-bottom: 20px;">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>
                      <span></span>

                            <h6 class="mb-1" style="margin-top:8px;">Common: mansourah</h5>


                            <h6 class="mb-1" style="margin-top:20px;">Type of Product : Salty</h5>
                            <button class="btn btn-primary btn-sm" style="margin-top:20px; margin-left:30px;" >View Profile</button>

                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>






                <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4" style="margin-left:100px">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-4.jpg" alt="">
                        <div class="ms-4">
                            <h4 class="mb-1" style="margin-left:15px">Artisan Name</h5>



                            <span></span>
                    <div class="rate" style="margin-top: 20px; margin-bottom: 20px;">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>
                      <span></span>

                            <h6 class="mb-1" style="margin-top:8px;">Common: mansourah</h5>


                            <h6 class="mb-1" style="margin-top:20px;">Type of Product : Salty</h5>
                            <button class="btn btn-primary btn-sm" style="margin-top:20px; margin-left:30px;" >View Profile</button>

                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>








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
