@extends('layouts.app_front')


@section('hero')
	 <!-- Hero Section, Background Image change in css')}} -->
    <div id="top" class="hero background-overlay">
    
        <!-- Name & Description -->
        <div class="hero-content">
            <h1>I am Vladimir Boiko</h1>
            <p class="hero-job"><span>AM I CREATIVE DEVELOPER? <br><br> NO! OR YES!<br><br>I AM ENGINEER!</span></p>
            <p class="hero-job-desc">I STAND ON A SWEET SPOT WHERE CAN NOT ONLY SEE, BUT CAN TOUCH AND MANAGE DEVICES. </p>

        </div><!-- /.hero-content -->

        <div class="hero-arrow page-scroll home-arrow-down">
            <a class="" href="#intro"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        </div><!-- /.hero-arrow -->

    </div><!-- /.hero -->
    <!-- End Hero -->


@endsection

@section('content')
	    <!-- Hello section -->
		<section class="site-section section-hello" id="intro">
			<div class="container">
				<h2><a href ="#">HELLO &amp; WELCOME</a></h2>
				<p class="section-subtitle"><span>EXPLORE MY WORLD</span></p>
				<div class="row">
					<div class="col-sm-4">
						<div class="main-service text-right">
							<div class="rectangle">
								<i class="fa fa-calendar" aria-hidden="true"></i>
							</div><!-- /.rectangle -->
							<h3>Электроника - работа, хобби и жизнь</h3>
							<p> Компьютеры и периферия, электротехническое промышленное и бытовое оборудование. HARD &amp SOFT - ремонт аппаратного обеспечения (оборудования), настройка программного обеспечения </p>
						</div><!-- /.main-service -->
                        <div class="main-service text-right">
                            <div class="rectangle">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                            </div>
                            <h3>Здоровье и спорт</h3>
                            <p>Спорт это движение! Движение это здоровье! Здоровье это жизнь! </p>
                        </div><!-- /.main-service -->
					</div>
					<div class="col-sm-4">
						<div class="big-rectangle">
							<img src="{{asset('front/assets/img/vladimir-logo.png')}}" alt="">
						</div><!-- /.big-rectangle -->
					</div>
					<div class="col-sm-4">
                        <div class="main-service text-left">
                            <div class="rectangle">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <h3>Хобби</h3>
                            <p>Модное слово DIY или ДиАйВай, или Do-It-Yourself, или сделай это сам.</p>
							<p>Домашние животные
							<p>
                        </div><!-- /.main-service -->
						<div class="main-service text-left">
							<div class="rectangle">
								<i class="fa fa-list" aria-hidden="true"></i>
							</div><!-- /.rectangle -->
							<h3>Креатив и опыт</h3>
							<p>Только вперед, изучая - обучаясь!</p>
						</div><!-- /.main-service -->
					</div>
				</div>
			</div>
		</section><!-- /.section-hello -->
        <!-- End Hello section -->

        <!-- Quote section -->
		<section class="section-background section-quote background-overlay text-center">
			<div class="container">
				<p>Один проект - одна жизнь! Много проектов - много жизней! Но! Один проект - одна жизнь!!!</p>
			</div>
		</section><!-- /.section-quote -->
        <!-- End Quote section -->

        <!-- About section -->
        <section class="site-section section-about text-center" id="about">
            <div class="container">
                <h2>Моя работа</h2>
                <p class="section-subtitle"><span>Цель - построение продукта или сервиса, тестирование и проверка.</span></p>
                <div class="row">
                      <div class="col-sm-3 col-xs-6">
                        <div class="feature-about">
                            <div class="medium-rectangle rectangle">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div><!-- /.rectangle -->
                            <h3>Электроника</h3>
                            <p>Ремонт и техническое обслуживание электронного, электротехнического, как бытового, так и промышленного оборудования. Разработка электронных схем, работа с программируемыми логическими контроллерами (ПЛК), микроконтроллерами.</p>
                        </div><!-- /.feature-about -->
                    </div> 
					<div class="col-sm-3 col-xs-6">
                        <div class="feature-about">
                            <div class="medium-rectangle rectangle">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                            </div><!-- /.rectangle -->
                            <h3>Веб приложения</h3>
                            <p>Правильный подход к разработке веб приложений это  не только улучшение внешнего вида или скорости загрузки, но и легкость использования продукта или сервиса - интуитивно-понятный интерфейс. </p>
                        </div><!-- /.feature-about -->
                    </div>                    
                    
					<div class="col-sm-3 col-xs-6">
                        <div class="feature-about">
                            <div class="medium-rectangle rectangle">
                                <i class="fa fa-code" aria-hidden="true"></i>
                            </div><!-- /.rectangle -->
                            <h3>Приложения для компьютеров</h3>
                            <p>Разработка софта для стационарных компьютеров, мобильных телефонов.</p>
                        </div><!-- /.feature-about -->
                    </div>                    
                                     
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature-about">
                            <div class="medium-rectangle rectangle">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div><!-- /.rectangle -->
                            <h3>Безопасность</h3>
                            <p> Информационная безопасность - обеспечение защищенности от случайного или умышленного доступа. </p>
                        </div><!-- /.feature-about -->
                    </div>
                </div>
            </div>
        </section><!-- /.section-about -->
        <!-- End About section -->

        <!-- Skills section -->
        <section class="site-section section-skills">
            <div class="container">
                <div class="row">
                 
                    <div class="col-sm-6">
                        <h2>Навыки</h2>
                        
						<div class="progress-group">
                            <p>Electronics</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="80">
                                </div>
                            </div><!-- /.progress -->
                        </div><!-- /.progress-group -->

						<div class="progress-group">
                            <p>Web</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="50">
                                </div>
                            </div><!-- /.progress -->
                        </div><!-- /.progress-group -->

                        <div class="progress-group">
                            <p>Device</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="60">
                                </div>
                            </div><!-- /.progress -->
                        </div><!-- /.progress-group -->

                        
                        <div class="progress-group">
                            <p>Security</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="40">
                                </div>
                            </div><!-- /.progress -->
                        </div><!-- /.progress-group -->

                       
                    </div>
                </div>
            </div>
        </section><!-- /.section-skills -->
        <!-- End Skills section -->


        <!-- Counters section -->
        <sect
        <!-- End Counters section -->

        <!-- Services section -->
        <section class="site-section section-services" id="services">

            <div class="container-fluid">
                <h2>Стремление</h2>
                <p class="section-subtitle"><span>Исключительный уровень сервиса</span></p>
            </div>

            <div class="container">

                <div class="carousel slide" id="services-carousel">

                    <div class="item-controls text-center">
                        <a href="#services-carousel" class="left btn carousel-control" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a href="#services-carousel" class="right btn carousel-control" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div><!-- /.item-controls -->

                    <div class="carousel-indicators nav-tabs text-center">
                        <a data-target="#services-carousel" href="#" data-slide-to="0" class="active">
                            <div class="col-xs-4 col-sm-fifth">
                                <div class="service">
                                    <div class="rectangle">
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                    </div>
                                    <p class="hidden-xs">Web</p>
                                </div>
                            </div>
                        </a><!-- /.item -->
                        <a data-target="#services-carousel" href="#" data-slide-to="1">
                            <div class="col-xs-4 col-sm-fifth">
                                <div class="service">
                                    <div class="rectangle">
                                        <i class="fa fa-code" aria-hidden="true"></i>
                                    </div>
                                    <p class="hidden-xs">Device</p>
                                </div>
                            </div>
                        </a><!-- /.item -->
                        <a data-target="#services-carousel" href="#" data-slide-to="2">
                            <div class="col-xs-4 col-sm-fifth">
                                <div class="service">
                                    <div class="rectangle">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                    </div>
                                    <p class="hidden-xs">Electronics</p>
                                </div>
                            </div>
                        </a><!-- /.item -->
                        <a data-target="#services-carousel" href="#" data-slide-to="3">
                            <div class="col-xs-4 col-sm-fifth">
                                <div class="service">
                                    <div class="rectangle">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                    <p class="hidden-xs">Security</p>
                                </div>
                            </div>
                        </a><!-- /.item -->
                       
                    </div><!-- /.carousel-indicators -->
                        
                           
                    <div class="carousel-inner">
                        <!-- Item 1 -->   
                        <div id="item1" class="item tab-pane active">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="service-info">
                                        <h3 class="service-title">Web</h3>
                                        <p>Легковесные, адаптивные, кроссбраузерные с интуитивно-понятным интерфейсом, интереснефшим контентом и красивым дизайном - вот мечта, которую хочется воплотить в реальных проектах</p>
                                    </div>
                                </div>
                              <div class="col-md-7">
                                    <img src="{{asset('front/assets/img/web-development.jpg')}}"" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div><!-- /.item -->
                        <!-- Item 2 -->   
                        <div id="item2" class="item tab-pane">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="service-info">
                                        <h3 class="service-title">Device</h3>
                                        <p>Разработка устройств, которые работают стабильно, быстро и безопасно.
                                        <p>Креатив, изобретательность вот качества, которым должны завидовать инженеры NASA и формулы 1.</p>
                                    </div>
                                </div>
  <div class="col-md-7">
                                    <img src="{{asset('front/assets/img/web-design.jpg')}}"" class="img-responsive" alt="">
                                </div>                              

							  
                            </div>
                        </div><!-- /.item -->
                        <!-- Item 3 -->   
                        <div id="item3" class="item tab-pane">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="service-info">
                                        <h3 class="service-title">Electronics</h3>
                                        <p>Изучать схемы и улучшать уже готовые решения.</p>                                     
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="{{asset('front/assets/img/mobile-development.jpg')}}"" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div><!-- /.item -->
                        <!-- Item 4 -->   
                        <div id="item4" class="item tab-pane">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="service-info">
                                        <h3 class="service-title">Security</h3>
                                        <p>Безопасность всегда неизученная и загадочная область.</p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="{{asset('front/assets/img/seo-optimization.jpg')}}"" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div><!-- /.item -->
                      
                    </div><!-- /.carousel-inner -->
                </div><!-- /.carousel -->
            </div>
        </section><!-- /.section-services -->
        <!-- End Services section -->

        <!-- Team section -->
     
        <!-- End Team section -->

        <!-- History section --> 
        <section class="section-history" id="history">
            <div class="container">          
                <div class="text-center section-diff-title">     
                    <h2>A Look Back At Our History</h2>
                    <p>This my Education and Experience</p>
                </div> 
                <!-- Timeline --> 
                <ul class="timeline">
                    <!-- Timeline badge --> 
                    <li class="timeline-start">
                        <div class="rectangle"><span>2022</span></div>
                    </li><!-- /.timeline-start -->

                    <!-- Timeline job & description  --> 
                    <li>
                        <div class="rectangle timeline-rectangle"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <div class="timeline-date">
                                    <p></p>
                                </div><!-- /.timeline-date -->
                                <div class="timeline-position">
                                    <p>Web design &amp; Development</p>
                                </div><!-- /.timeline-position -->
                            </div><!-- /.timeline-heading -->
                            <div class="timeline-body">
                                <div class="timeline-body-thumb">
                                    <img src="{{asset('front/assets/img/timeline-img.jpg')}}"" class="img-res" alt="">
                                </div><!-- /.timeline-body-thumb -->
                                <p>Проектирование и разработка веб сайта на laravel&amp php!</p>
                            </div><!-- /.timeline-body -->
                        </div><!-- /.timeline-panel -->
                    </li>

                    <!-- Timeline badge --> 
                    <li class="timeline-start">
                        <div class="rectangle"><span>2022</span></div>
                    </li><!-- /.timeline-start -->

                    <!-- Timeline job & description, inverted  --> 
                    <li class="timeline-inverted">
                        <div class="rectangle timeline-rectangle"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                               <div class="timeline-position">
                                    <p>Web Design</p>
                                </div><!-- /.timeline-position -->
                                <div class="timeline-date">
                                    <p></p>
                                </div><!-- /.timeline-date -->
                            </div><!-- /.timeline-heading -->
                            <div class="timeline-body">
                                <div class="timeline-body-thumb">
                                    <img src="{{asset('front/assets/img/timeline-img.jpg')}}"" class="img-res" alt="">
                                </div><!-- /.timeline-body-thumb -->
                                <p>Designing a solution for mobile app</p>
                            </div><!-- /.timeline-body -->
                        </div><!-- /.timeline-panel -->
                    </li><!-- /.timeline-inverted -->

                    <!-- Timeline job & description  --> 
                    <li>
                        <div class="rectangle timeline-rectangle"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <div class="timeline-date">
                                    <p>25 Aug</p>
                                </div><!-- /.timeline-date -->
                                <div class="timeline-position">
                                    <p>Seo Optimization</p>
                                </div><!-- /.timeline-position -->
                            </div><!-- /.timeline-heading -->
                            <div class="timeline-body">
                                <div class="timeline-body-thumb">
                                    <img src="{{asset('front/assets/img/timeline-img.jpg')}}"" class="img-res" alt="">
                                </div><!-- /.timeline-body-thumb -->
                                <p>SEO optimizing a couple of websites</p>
                            </div><!-- /.timeline-body -->
                        </div><!-- /.timeline-panel -->
                    </li>

                    <!-- Timeline Badge  --> 
                    <li class="timeline-end">
                        <div class="rectangle"><span>More</span></div>
                    </li><!-- /.timeline-end -->
                </ul><!-- /.timeline -->
            </div>
        </section><!-- /.section-history -->
        <!-- End History section --> 

        <!-- Portfolio/Works section --> 
        <section class="site-section section-works" id="works">
            <div class="container">
                <h2>RECENT WORKS</h2>
                <p class="section-subtitle"><span>OUR CLIENTS LOVE US! READ WHAT THEY HAVE TO SAY</span></p>

                <div class="portfolio">
                    <ul class="portfolio-sorting list-inline">
                        <li><a href="#" class=" active" data-group="all">all</a></li>
                        <li><a href="#" class="" data-group="webdesign">Web</a></li>
                        <li><a href="#" class="" data-group="webdev">Device</a></li>
                        <li><a href="#" class="" data-group="mobileapps">Electronics</a></li>
                    </ul><!-- /.portfolio-sorting  -->

                    <div id="grid">
                        
                        <!-- Portfolio item --> 
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="{{asset('front/assets/img/portfolio-1.jpg')}}"" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>PSD Template</h3>
                                    <p>Web Design</p>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="{{asset('front/assets/img/portfolio-2.jpg')}}"" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem2">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>Website</h3>
                                    <p>Web Development</p>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["mobileapps"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="{{asset('front/assets/img/portfolio-4.jpg')}}"" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem3">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>IOS App</h3>
                                    <p>Mobile App</p>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="{{asset('front/assets/img/portfolio-3.jpg')}}"" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem4">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>PSD Template</h3>
                                    <p>Web Design</p>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="{{asset('front/assets/img/portfolio-5.jpg')}}"" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem5">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>Wordpress Website</h3>
                                    <p>Web Development</p>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["mobileapps"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="{{asset('front/assets/img/portfolio-6.jpg')}}"" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem6">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>Android App</h3>
                                    <p>Mobile App</p>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="{{asset('front/assets/img/portfolio-7.jpg')}}"" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem7">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>Woocommerce Website</h3>
                                    <p>Web Development</p>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="{{asset('front/assets/img/portfolio-8.jpg')}}"" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem8">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>PSD Template</h3>
                                    <p>Web Design</p>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->

                    </div><!-- /#grid -->
                </div>
            </div>
        </section><!-- /.section-works -->
        <!-- End Works section --> 

        <!-- Me section --> 
        <section class="section-background section-me background-overlay text-center">
            <div class="container page-scroll">
                <h2>Are You Impressed By My Work?</h2>
                <p>Durabitur commodo ras non urna mauris mollis auctor proin laoreet</p>
                <a href="#contact" class="btn">GET IN TOUCH</a>
            </div>
        </section><!-- /.section-me -->
        <!-- End Me section --> 

        <!-- Clients section --> 
        
        <!-- End Clients section --> 

        <!-- Twitter section --> 
        <section class="section-background section-twitter background-overlay text-center">
            <div class="container">
                <div class="rectangle">
                    <i class="fa fa-twitter"></i>
                </div>
                <p>Latest from Twtter</p>
                <p>So here’s how you can integrate sign up and sign in for your web and iOS apps, with AWS Cognito.</p>
                <a href="#" class="btn btn-inverted">follow me</a>
            </div>
        </section><!-- /.section-twitter-->
        <!-- End Twitter section --> 

        <!-- Contacts section --> 
        <section class="site-section section-contact" id="contact">
            <div class="container">
                <h2>CONTACT MiKE</h2>
                <p class="section-subtitle"><span>Here i am</span></p>
                <div class="row">
                    <form>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Name" required>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Subject" required>
                        </div>
                        <div class="col-sm-12">
                            <textarea class="form-control" placeholder="Your Message"  required></textarea>
                        </div>

                        <div class="col-sm-12">
                            <button class="btn btn-inverted">Send Message</button>
                        </div>  
                    </form>
                </div>
            </div>
        </section><!-- /.section-contact-->
        <!-- End Contacts section --> 
        
        <!-- Social Networks section --> 
        <section class="section-networks blue-bg">
            <div class="container">
                <a href="#" class="rectangle">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-youtube-play"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-envelope"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-dribbble"></i>
                </a>
            </div>
        </section><!-- /.section-networks-->
        <!-- End Social Networks section --> 


@endsection
