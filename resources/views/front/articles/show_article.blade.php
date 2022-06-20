@extends('layouts.app_front')

@section('content')

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
					<h2><?php print($article->article_title);?></h2>
										
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">May 1, 2022</time>
										<a href="#" class="author"><span class="name">Vladimir</span><img src="{{asset('front/img/avatar.jpg')}}" alt=""></a>
									</div>
								</header>
								<span class="image featured"><img src="{{asset('front/img/pic01.jpg')}}" alt=""></span>
								<h3><?php print($article->article_full);?></h3>
								

			</article>



@endsection