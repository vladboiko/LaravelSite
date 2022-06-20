@extends('layouts.app_front_second')
@section('title')
Главная
@endsection

@section('content')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="{{asset('front_second/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Desire</h5>
                            <h1 class="display-3 text-white mb-md-4">Happy Clients & Positive Reviews</h1>
                     <!--       <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>-->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('front_second/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Developer</h5>
                            <h1 class="display-3 text-white mb-md-4">Стремление</h1>
                  <!--          <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('front_second/img/carousel-3.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Craftman</h5>
                            <h1 class="display-3 text-white mb-md-4"> Умение  </h1>
                  <!--          <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center pb-1">
                <div class="col-lg-5">
                    <img class="img-thumbnail p-3" src="{{asset('front_second/img/about.jpg')}}" alt="about">
                </div>
				<!-- First Project -->
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">First Project:</small>
                    <h1 class="mt-2 mb-4">Веб сайт на PHP и laravel. </h1>
                    <p class="mb-4">
					
					<?php
					foreach($second as $f){
						if($f->id == 4){
						$article_text = $f->article_full;
						$id_first = $f->id;
						}
							if($f->id == 11){
								$welding = $f->article_full;
								$id_second = $f->id;
							}
								if($f->id == 13){
									$id_third = $f->id;
									$smart_home = $f->article_full;
								}
								if($f->id == 3){
									$my_health = $f->article_full;
									$id_fourth = $f->id;
								}
					}
					print mb_substr($article_text,0,700);
					?>
				
					<p>
                    <a href="{{route('articles.show',$id_first)}}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Read More</a>
                </div>
            </div>
	<!-- End First Project -->
	<!-- Second Project -->
			      <div class="row align-items-center pb-1">
                <div class="col-lg-5">
                    <img class="img-thumbnail p-3" src="{{asset('front_second/img/SecondProject.jpg')}}" alt="Sec Proj">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">My Job:</small>
                    <h1 class="mt-2 mb-4"> Сварочный инвертор </h1>
                    <p class="mb-4">
					
					<?php
						
				print mb_substr($welding,0,500);
		
					?>
					<p>
                    <a href="{{route('articles.show',$id_second)}}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Read More</a>
                </div>
            </div>
	<!-- End Second Project -->
	<!-- Third Project -->
	      <div class="row align-items-center pb-1">
                <div class="col-lg-5">
                    <img class="img-thumbnail p-3" src="{{asset('front_second/img/ThirdProject.jpg')}}" alt="Third Proj">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Third Project:</small>
                    <h1 class="mt-2 mb-4">Проект Умный дом</h1>
                    <p class="mb-4">
					
					<?php
					print mb_substr($smart_home,0,800); 
				
					?>
					<p>
                    <a href="{{route('articles.show',$id_third)}}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Read More</a>
                </div>
            </div>
	<!-- End Third Project -->
	
	<!-- Fourth Project -->
	      <div class="row align-items-center pb-1">
                <div class="col-lg-5">
                   <video width="320" height="240" controls>
  <source src="{{asset('front_second/img/FourthProject.mp4')}}" type="video/mp4">
  <!--<source src="movie.ogg" type="video/ogg">-->
  Your browser does not support the video tag.
</video>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Fourth Project:</small>
                    <h1 class="mt-2 mb-4">Проект Остаться здоровым</h1>
                    <p class="mb-4">
					<?php
					 print mb_substr($my_health,0,750); 
					 ?>
                	<p>
				    <a href="{{route('articles.show',$id_fourth)}}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Read More</a>
                </div>
            </div>
	<!-- End Fourth Project -->
	
	
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">My location</h5>
                            <p class="m-0">220019, Minsk</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Email</h5>
                            <p class="m-0">vladimir.boiko@tut.by</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Phone</h5>
                            <p class="m-0">+375 29 856 87 **</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Что я делаю</small>
                    <h1 class="mt-2 mb-3">Электроника</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Я инженер электроник, программист. У меня большой опыт по ремонту компьютерной техники, промышленного оборудования. </h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Discover More</a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-laptop-code text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Web Design</h4>
                                    <p>Разработка веб сайтов и вебприложений, но больше нравится работать с уже готовыми проектами. Улучшать, находить слабые места.</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-code text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Development</h4>
                                    <p>Работа с микроконтроллерами.</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-health-text text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Здоровье</h4>
                                    <p>Пришлось стать врачом для себя и близких. Чистая практика.</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-chart-line text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Strategy</h4>
                                    <p>Стратегия продвижения проектов. </p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid pt-5 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Why Choose Us</small>
                    <h1 class="mt-2 mb-3">25 Years Expereince</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Множество выполненных заказов связанных с электронной техникой в целом и компьютерной в отдельности. </h4>
                    <div class="list-inline mb-4">
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Компьтеры - ремонт аппаратного обеспечения</p>
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Компьтеры - ремонт и настройка программного обеспечения</p>
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Компьтеры - разработка программного обеспечения</p>
						<p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Веб - разработка программного обеспечения</p>
						<p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Электроника - разработка систем управления </p>
                    </div>
             <!--       <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Learn More</a> -->
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">25</h2>
                                <h5 class="font-weight-bold mb-4">Years Expereince</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">5</h2>
                                <h5 class="font-weight-bold mb-4">SKills</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">100</h2>
                                <h5 class="font-weight-bold mb-4">Happy Clients</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">250</h2>
                                <h5 class="font-weight-bold mb-4">Complete Projects</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Meet The Team</small>
                    <h1 class="mt-2 mb-3">Meet Experts of Behind Work</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Уровень знаний и умений данных экспертов не подлежит сомнению.</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Meet All Experts</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('front_second/img/team-1.jpg')}}" alt="team1">
                                <div class="team-overlay position-absolute d-flex align-items-center justify-content-center m-3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Vladimir Boiko</h5>
                                <span>CEO, Founder & K</span>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('front_second/img/team-2.jpg')}}" alt="team2">
                                <div class="team-overlay position-absolute d-flex align-items-center justify-content-center m-3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Graf Toffie</h5>
                                <span>Mastermind</span>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('front_second/img/team-3.jpg')}}" alt="team3">
                                <div class="team-overlay position-absolute d-flex align-items-center justify-content-center m-3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Cat</h5>
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('front_second/img/team-4.jpg')}}" alt="team4">
                                <div class="team-overlay position-absolute d-flex align-items-center justify-content-center m-3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Sherlock Holmes & Doctor Watson</h5>
                                <span>Marketers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    
    

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center">
                <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">Мой Блог</small>
                <h1 class="mt-2 mb-5">Недавнее из блога</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('front_second/img/blog-1.jpg')}}" alt="blog1">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                            style="width: 80px; height: 80px; bottom: 0; left: 0;">
                            <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                            <h1 class="m-0">01</h1>
                        </div>
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{asset('front_second/img/user.jpg')}}" alt="">
                                <a class="text-muted ml-2" href="">Vladimir Boiko</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Сварочный инвертор</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="">Как я восстанавливал инвертор</a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('front_second/img/blog-2.jpg')}}" alt="blog2">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                            style="width: 80px; height: 80px; bottom: 0; left: 0;">
                            <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                            <h1 class="m-0">01</h1>
                        </div>
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{asset('front_second/img/user.jpg')}}" alt="">
                                <a class="text-muted ml-2" href="">Vladimir Boiko</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Мои тренировки</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="">Что я делаю в спортивном зале для того, чтобы поправить свое здоровье.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->



@endsection