


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Tlemcen Testies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" />

<style>


.containeraa {
    display: flex;
    justify-content: space-between;
    width: 100%; /* Use a percentage or any other appropriate width */
    background: #fff;
    margin-top: 200px;
    
}

.containeraa .imgBx {
    width: 45%; /* Adjust the width as needed */
}





.containeraa .imgBx img {
    position: relative;
    width: 600px;
    transform: rotate(-30deg);
    left: -50px;
    transition: .9s linear;
}

.containeraa .details {
    width: 55%; /* Adjust the width as needed */
    padding: 40px;
    margin-right: 250px;
}

.containeraa .details h2{
    margin: 0;
    padding: 0;
    font-size: 2.4em;
    line-height: 1em;
    color: #444;
}

.containeraa .details h2 span {
    font-size: 0.4em;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #999;
}

.containeraa .details p {
    max-width: 85%;
    margin-left: 15%;
    color: #333;
    font-size: 15px;
    margin-bottom: 36px;
}

.containeraa .details h3 {
    margin: 0;
    padding: 0;
    font-size: 2.5em;
    color: #a2a2a2;
    float: left;
}
.containeraa .details button {
    background: #000;
    color: #fff;
    border: none;
    outline: none;
    padding: 15px 20px;
    margin-top: 5px;
    font-size: 16px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 600;
    border-radius: 40px;
    float: right;
}

.product-colors span {
    width: 26px;
    height: 26px;
    top: 7px;
    margin-right: 12px;
    left: 10px;
    border-radius: 50%;
    position: relative;
    cursor: pointer;
    display: inline-block;
}

.black {
    background: #000;
}

.red {
    background: #D5212E;
}

.orange {
    background: #F18557;
}

.product-colors .active:after{
    content: "";
    width: 36px;
    height: 36px;
    border: 2px solid #000;
    position: absolute;
    border-radius: 50%;
    box-sizing: border-box;
    left: -5px;
    top: -5px;
}

.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


/* responsive */
@media (max-width: 768px) {
    .containeraa {
        flex-direction: column; /* Change to a column layout on smaller screens */
    }
    .containeraa .imgBx {
        padding: 40px;
        box-sizing: border-box;
        width: 100% !important;
        height: auto;
        text-align: center;
        overflow: hidden;
    }
    .containeraa .imgBx img {
        left: initial;
        max-width: 100%;
        transform: rotate(0deg);
    }
    .details {
        width: 100% !important;
        height: auto;
    }
    .containeraa .details p {
        margin-left: 0;
        max-width: 100%;
    }

    .containeraa .imgBx,
    .containeraa .details {
        width: 100%; /* Make both elements take up the full width on smaller screens */
    }
}

.card {
  width: 300px;
  padding: 20px;
  background-color: #000000;
  border-radius: 5px;
  color:#999;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

input[type="range"] {
  width: 100%;
  margin-top: 10px;
}


.dropdown-item {
    font-size: 20px; /* Set the desired font size */
}

.container-fluid.page-header {
  margin-bottom: 0; /* Remove bottom margin */
  padding-bottom: 0; /* Remove bottom padding */
}



</style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!-- <div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Career</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Terms</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Privacy</a></li>
                </ol>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn-lg-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{Route('home')}}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">Tlemcen Testies</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="{{Route('home')}}" class="nav-item nav-link ">Home</a>
                <a href="{{Route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{Route('serivices')}}" class="nav-item nav-link">Services</a>
                <a href="{{Route('products')}}" class="nav-item nav-link">Products</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{Route('team')}}" class="dropdown-item">Our Team</a>
                        <a href="{{Route('testimonial')}}" class="dropdown-item">Testimonial</a>
                        <a href="{{Route('404')}}" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{Route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <!-- <div class=" d-none d-lg-flex">
                <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                    <i class="fa fa-phone text-primary"></i>
                </div> -->



            




                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:30rem;" >
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle second-text fw-bold " style="color:#EAA636;" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                <i class="bi bi-search text-primary me-2  " style="color:#EAA636;"></i>  <span style="color:#EAA636;">Search</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                            <li><a class="dropdown-item" href="{{Route('testimonial')}}" >Artisan Finder</a></li>

                            <li><a class="dropdown-item" href="{{Route('products')}}" >Product Seeker</a></li>




                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle second-text fw-bold " style="color:#EAA636;" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                <i class="bi bi-person-fill me-2" style="color:#EAA636;"></i>   <span style="color:#EAA636;">Account</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                <li><a class="dropdown-item" href="#" >Profile Data</a></li>
                                <li><a class="dropdown-item" href="#">Order History</a></li>
                                <li><a class="dropdown-item" href="#" >Delivery Review</a></li>


                                <li><a class="dropdown-item" href="#" >Log Out</a></li>



                            </ul>
                        </li>
                    </ul>
                </div>








            </div>
        </div>
    </nav>
    <!-- Navbar End -->


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
                          <div class="result-count">
                            </div>
                          <div class="group-btn">
                            <button class="btn-delete" id="delete">Reset</button>
                            <button class="btn-search">Search</button>
                          </div>
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

               <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:30px;">
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






























    <div class="containeraa " style="margin-right: 300xp;">
        <div class="imgBx">
            <img src="img/pain_choco.jpg">
        </div>
        <div class="details">
            <div class="content">
                   <h2>Pain Chocó <br> 
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

                </h2>
                <p style="color: white;">
                 
                    Cushioned Comfort: A full-length foam midsole delivers lightweight, plush cushioning.
                    Secure Traction: Exaggerated herringbone-pattern outsole offers traction on a variety of surfaces.
                </p>
              
                <h3 >10,00 DA</h3>
                <button>Buy Now</button>
            </div>
        </div>
    </div>
    

    <div class="containeraa " style="margin-right: 300xp;">
        <div class="imgBx">
            <img src="img/pain_choco.jpg">
        </div>
        <div class="details">
            <div class="content">
            <h2>Pain Chocó Double Chocolat<br> 
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

                </h2>
                <p style="color: white;">
                 
                    Cushioned Comfort: A full-length foam midsole delivers lightweight, plush cushioning.
                    Secure Traction: Exaggerated herringbone-pattern outsole offers traction on a variety of surfaces.
                </p>
              
                <h3>12,50 DA</h3>
                <button>Buy Now</button>
            </div>
        </div>
    </div>


    <div class="containeraa " style="margin-right: 300xp;">
        <div class="imgBx">
            <img src="img/petit_pain.jpg">
        </div>
        <div class="details">
            <div class="content">
                <h2>Pain Chocó Sucrè <br>
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

                </h2>
                <p style="color: white;">
                 
                    Cushioned Comfort: A full-length foam midsole delivers lightweight, plush cushioning.
                    Secure Traction: Exaggerated herringbone-pattern outsole offers traction on a variety of surfaces.
                </p>
              
                <h3>15,00 DA</h3>
                <button>Buy Now</button>
            </div>
        </div>
    </div>

    <!-- Product End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 200px;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Office Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Photo Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-1.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-1.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>




    <script src="js/choices.js"></script>
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
</body>

</html>