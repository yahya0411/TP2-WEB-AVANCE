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


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    @yield('Mystyle')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->




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
                            <a class="nav-link dropdown-toggle second-text fw-bold " style="color:#EAA636;" href="{{Route('testimonial')}}" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                <i class="bi bi-search text-primary me-2  " style="color:#EAA636;"></i>  <span style="color:#EAA636;">Search</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                <li><a class="dropdown-item" href="{{Route('testimonial')}}">Artisan Finder</a></li>

                                <li><a class="dropdown-item" href="{{Route('products')}}">Product Seeker</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                @if(Session::has('consumer'))

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle second-text fw-bold " style="color:#EAA636;" href="" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                <i class="bi bi-person-fill me-2" style="color:#EAA636;"></i>   <span style="color:#EAA636;">{{strtoupper(Session::get('consumer')->nom_consommateur) }}</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#data_client" >Profile Data</a></li>
                                <li><a class="dropdown-item" href="{{Route('history')}}" >Order History</a></li>


                                <li><a class="dropdown-item" href="{{Route('logout')}}" >Log Out</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>

                @else
                 <a href="{{Route('formular')}}" class="nav-link dropdown-toggle second-text fw-bold " style="color:#EAA636;">Account</a>
              @endif





            </div>
        </div>
    </nav>
    <div class="modal fade" id="data_client"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    @if(Session::has('consumer'))
 <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5">Profile</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
     <form  method="" action="">
       <div class="modal-body">
                <div class="input-group flex-nowrap">
            <span class="input-group-text bi bi-person-fill"></span>
            <input type="text" class="form-control" value="{{Session::get('consumer')->nom_consommateur}} {{Session::get('consumer')->prénom_consommateur}}" disabled>
            </div>
            <div class="input-group flex-nowrap mt-3 ">
            <span class="input-group-text  bi bi-key-fill"></span>
            <input type="password" class="form-control" value="{{Session::get('password')}}" disabled>
            </div>
            <div class="input-group flex-nowrap mt-3 ">
            <span class="input-group-text  bi bi-envelope-at-fill">
            <i class="bi bi-envelope-fill"></i>   </span>
            <input type="text" class="form-control" value="{{Session::get('consumer')->Email}}" disabled>
            </div>
            <div class="input-group flex-nowrap mt-3 ">
            <span class="input-group-text  bi bi-telephone-fill"></span>
            <input type="text" class="form-control" value="{{Session::get('consumer')->téléphone}}" disabled>
            </div>





       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <!-- <button    class="btn btn-secondary" style="background-color:#e45c27;"   ><a style="  text-decoration:none; color: white; " href=""> Edit </a></button> -->
         <button    class="btn btn-secondary"  style="background-color:#e45c27;" ><a style="  text-decoration:none; color: white;" href="{{route('consommateur.edit', ['consommateur' => Session::get('consumer')->Id_Consommateur])}}"> Edit </a></button>
         </div>

         </form>
     </div>
   </div>
   @endif
 </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="content">
    @yield('content')
    </div>


   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Office Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>01 November Ave, Tlemcen, Algeria</p>
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
                <h4 class="text-light mb-4">Photo Gallery</h4>
                <div class="row g-2">
                    <div class="col-4">




                        <img class="img-fluid bg-light rounded p-1" src="   {{asset('img/product-1.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{asset('img/product-2.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{asset('img/product-3.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{asset('img/product-2.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{asset('img/product-3.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{asset('img/product-1.jpg')}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a href="#">Tlemcen Testies </a>, All Right Reserved.
            </div>

        </div>
    </div>
</div>

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
        @yield('script')
</body>

</html>
