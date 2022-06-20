@extends('layouts.app_front_second')
@section('title')
	
	{!! $article['article_title']!!}
@endsection

@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Blog Detail</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Detail</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Detail Start -->
            <div class="col-lg-12">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="img/blog-1.jpg" alt="blog1">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                        style="width: 80px; height: 80px; bottom: 0; left: 0;">
                        <h6 class="text-uppercase mt-2 mb-n2">May</h6>
                        <h1 class="m-0">05</h1>
                    </div>
                </div>
                <div class="pt-4 pb-2">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="">Vladimir Boiko</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="">Engineer</a>
                        </div>
                    </div>
                    
                </div>
				
						<!-- Post -->
				
								<header>
									<div class="title">
					<h2><?php print($article['article_title']);?></h2>
										
									</div>
									<div class="meta">
										<time class="published" datetime="2022-11-05">May 1, 2022</time>
										<a href="#" class="author"><span class="name">Vladimir</span><img src="{{asset('front/img/avatar.jpg')}}" alt="avatar"></a>
									</div>
								</header>
							
						
							{!!html_entity_decode($article['article_full'])!!}
							

            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Detail End -->



@endsection