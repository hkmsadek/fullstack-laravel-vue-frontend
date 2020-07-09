@extends('layout.app')
@section('title', 'Our awesome home page title')
@section('maincontent')

		<!-- BANNER -->
		<section class="banner_sec">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10 col-lg-8">
						<div class="row">
                            @if(count($categories)>0)
                            @foreach ($categories as $nav)
                                <div class="col-12 col-md-4 col-lg-4">
                                    <a href="">
                                        <div class="banner_box">
                                            <i class="fab fa-laravel"></i>
                                        <h3 class="banner_box_h3">{{$nav->categoryName}}</h3>
                                            <p>The Toptal Blog is the top hub for developers.</p>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            @endif

                        </div>
					</div>
				</div>
			</div>
		</section>
		<!-- BANNER -->

		<!-- BODY -->
		<div class="home_body">
			<div class="container">
				<div class="latest_post">
					<div class="latest_post_top">
						<h1 class="latest_post_h1 brdr_line">Latest Blog</h1>
					</div>
					<div class="row">

                    @if(count($blogs)>0)
                        @foreach ($blogs as $b)

						<div class="col-12 col-md-6 col-lg-4">
                        <a href="/blog/{{$b->slug}}">
								<div class="home_card">
									<div class="home_card_top">
										<img src="img/card3.jpg" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
                                            @if(count($b->cat)>0)
                                                <ul class="home_card_bottom_text_ul">
                                                    @foreach ($b->cat as $c)
                                                        <li>
                                                        <a href="/">{{$c->categoryName}}</a>
                                                            {{--  <span><i class="fas fa-angle-right"></i></span>  --}}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif


											<a href="blog_post.html">
                                            <h2 class="home_card_h2">{{$b->title}}</h2>
											</a>
											<p class="post_p">
												{{$b->post_excerpt}}
											</p>
											<div class="home_card_bottom_tym">
												<div class="home_card_btm_left">
													<img src="img/man1.jpg" alt="image">
												</div>
												<div class="home_card_btm_r8">
                                                <a href="contact_me.html"><p class="author_name">{{$b->user->fullName}}</p></a>
													<ul class="home_card_btm_r8_ul">
														<li>Dec 4, 2019</li>
														<li><span class="dot"></span>3 Min Read</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
                        </div>
                        @endforeach
                    @endif



					</div>
				</div>
			</div>

		</div>
		<!-- BODY -->
@endsection

