<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('front_second/img/favicon.ico')}}" rel="icon">
	<!--Absolute path which become blinding with your application.-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front_second/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front_second/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar p-0">
        <div class="container-lg p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-white display-4"><span class="text-primary">B</span>oi<span class="text-primary">K</span>o</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">

                        <a href="/index" <?php $uri = $_SERVER['REQUEST_URI']; if($uri == ('/index')) print	('class="nav-item nav-link active"'); 
								else print ('class="nav-item nav-link"');
							 ?>
								>Main</a>
                        <a href="/about" 
						<?php $uri = $_SERVER['REQUEST_URI']; if($uri == ('/about')) print('class="nav-item nav-link active"'); 
								else print ('class="nav-item nav-link"');
								?>
						>About</a>
              		<a href="/blog" 
						<?php $uri = $_SERVER['REQUEST_URI']; if($uri == ('/blog')) print('class="nav-item nav-link active"'); 
								else print ('class="nav-item nav-link"');
						 ?>
						>Проекты</a>
						<a href="/contact" 
						<?php $uri = $_SERVER['REQUEST_URI']; if($uri == ('/contact')) print('class="nav-item nav-link active"'); 
								else print ('class="nav-item nav-link"');
							?>
						>Контакты</a>
					
            @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/home') }}" class="nav-item nav-link">Admin</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                        @endif
                    @endauth
                
            @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
	@yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 text-white display-4"><span class="text-primary">B</span>oi<span class="text-primary">K</span>o</h1>
                </a>
                <p>Кто хочет сделать, тот ищет возможности,кто не хочет делать, тот ищет причины! (наше)</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">Quick Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="/index"><i class="fa fa-angle-right text-primary mr-2"></i>Главная</a>
                    <a class="text-white mb-2" href="/about"><i class="fa fa-angle-right text-primary mr-2"></i>About</a>
                    <a class="text-white mb-2" href="/blog"><i class="fa fa-angle-right text-primary mr-2"></i>Проекты</a>
                    <a class="text-white mb-2" href="/contact"><i class="fa fa-angle-right text-primary mr-2"></i>Контакты</a>
                 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">Popular Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="/index"><i class="fa fa-angle-right text-primary mr-2"></i>Главная</a>
                    <a class="text-white mb-2" href="/about"><i class="fa fa-angle-right text-primary mr-2"></i>About</a>
                    <a class="text-white mb-2" href="/blog"><i class="fa fa-angle-right text-primary mr-2"></i>Проекты</a>
                    <a class="text-white mb-2" href="/contact"><i class="fa fa-angle-right text-primary mr-2"></i>Контакты</a>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">Пишите, звоните</h5>
              
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>220029, Minsk</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+375 29 856 87 **</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>vladimir.boiko@tut.by</p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-semi-bold" href="#">Boiko</a>. All Rights Reserved. Designed by
            <a class="font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('front_second/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('front_second/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('front_second/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('front_second/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('front_second/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('front_second/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('front_second/js/main.js')}}"></script>
</body>

</html>