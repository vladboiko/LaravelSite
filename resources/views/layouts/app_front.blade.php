<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Boiko Perfect Portfolio</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet">
	
		<link rel="stylesheet" href="{{asset('front/css/main.css')}}" />
    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('front/assets/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/assets/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front/assets/img/favicon-16x16.png')}}">
    <link rel="icon" sizes="16x16" href="{{asset('front/assets/img/favicon.ico')}}">
    <link rel="manifest" href="{{asset('front/assets/img/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('front/assets/img/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core css')}} -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}" />

    <!-- Font Awesome core css')}} -->
    <link rel="stylesheet" href="{{asset('front/assets/css/font-awesome.min.css')}}" />
    
    <!-- Custom css')}} -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}""></script>
    <![endif]-->

</head>
<body>

   @yield('hero')
    <!-- Header -->
    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation" data-spy="affix">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- Name -->
                    <div class="page-scroll site-logo">
                        <a href="#top">Vladimir</a>
                    </div>

                </div><!-- /.navbar-header -->

                <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">

                    <!-- Navigation -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll"><a href="#top">Home</a></li>
                        <li class="page-scroll"><a href="#intro">Intro</a></li>
                        <li class="page-scroll"><a href="#about">About</a></li>
                        <li class="page-scroll"><a href="#services">Services</a></li>
                    
                        <li class="page-scroll"><a href="#history">History</a></li>
                        <li class="page-scroll"><a href="#works">Works</a></li>
                        <li class="page-scroll"><a href="#contact">Contact</a></li>
				 @if (Route::has('login'))
                
                    @auth
                     <li class="page-scroll">    <a href="{{ url('/home') }}" >Admin</a></li>
                    @else
                     <li class="page-scroll">    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                       <li class="page-scroll">      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                
            @endif
			</div>
  
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->
    <!-- End Header -->

    <!-- Main content -->
    <main id="main" class="site-main">
	
	@yield('content')
    
    </main><!-- /#main -->
    <!-- End Main content -->

    <!-- Footer --> 
    <footer id="colophon" class="site-footer">

        <div class="container-fluid">

            <ul class="list-unstyled list-inline">
                <li class="page-scroll"><a href="#top">Home</a></li>
                <li class="page-scroll"><a href="#intro">Введение</a></li>
                <li class="page-scroll"><a href="#about">About</a></li>
                <li class="page-scroll"><a href="#services">Services</a></li>
                <li class="page-scroll"><a href="#team">Team</a></li>
                <li class="page-scroll"><a href="#history">History</a></li>
                <li class="page-scroll"><a href="#works">Works</a></li>
                <li class="page-scroll"><a href="#contact">Contact</a></li>
            </ul>

            <div class="page-scroll">
                <a href="#top" class="rectangle">
                    <i class="fa fa-angle-double-up"></i>
                </a>
            </div>

        </div>

        <div class="container text-center">
            <p class="copyright">&copy; <a href="http://pixelperfect.mk/" target="_blank">Boiko</a> - 2022</p>
        </div>

    </footer><!-- /#footer -->
    <!-- End Footer --> 

    <!-- Modals -->
    <div id="portfolioItem1" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{asset('front/assets/img/portfolio-1.jpg')}}"" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Project title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem2" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{asset('front/assets/img/portfolio-2.jpg')}}"" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Project title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem3" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{asset('front/assets/img/portfolio-4.jpg')}}"" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Project title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem4" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{asset('front/assets/img/portfolio-3.jpg')}}"" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Project title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem5" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{asset('front/assets/img/portfolio-5.jpg')}}"" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Project title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem6" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{asset('front/assets/img/portfolio-6.jpg')}}"" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Project title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem7" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{asset('front/assets/img/portfolio-7.jpg')}}"" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Project title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem8" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{asset('front/assets/img/portfolio-8.jpg')}}"" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Project title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery core js | Do not Delete -->
    <script src="{{asset('front/assets/js/jquery.min.js')}}""></script>

    <!-- Bootstrap core js | Do not Delete -->
    <script src="{{asset('front/assets/js/bootstrap.min.js')}}""></script>

    <!-- Bootstrap progressbar JS -->
    <script src="{{asset('front/assets/js/bootstrap-progressbar.min.js')}}""></script>

    <!-- Count To JS -->
    <script src="{{asset('front/assets/js/jquery.countTo.min.js')}}""></script>

    <!-- Easing JS -->
    <script src="{{asset('front/assets/js/jquery.easing.min.js')}}""></script>

    <!-- Shuffle JS -->
    <script src="{{asset('front/assets/js/jquery.shuffle.min.js')}}""></script>

    <!-- Slick Carousel JS -->
    <script src="{{asset('front/assets/js/slick.min.js')}}""></script>

    <!-- Touchswipe JS -->
    <script src="{{asset('front/assets/js/touchswipe.min.js')}}""></script>

    <!-- Custom JS -->
    <script src="{{asset('front/assets/js/script.js')}}""></script>
  
</body>
</html>