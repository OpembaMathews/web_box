@extends('layouts.index')

@section('content')
		<div class="site-content">
			<div class="hero">
				<div class="slides">
					<li data-bg-image="{{ asset ('frontend/libraryindexes/images/koyo_back.PNG') }}">
						<div class="container">
							<div class="slide-content">
								<small class="slide-subtitle">The E-Library</small>
								<h2 class="slide-title">Our future In Writing</h2>

								<a href="#new_books" class="button">Latest Books</a>
							</div>
						</div>
					</li>

					<li data-bg-image="{{ asset ('frontend/libraryindexes/images/koyo_back.PNG') }}">
						<div class="container">
							<div class="slide-content">
								<small class="slide-subtitle">The E-Library</small>
								<h2 class="slide-title">Our future In Writing</h2>

								<a href="#new_books" class="button">Latest Books</a>
							</div>
						</div>
					</li>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container" id="new_books">
						<h2 class="section-title">Latest Books</h2>

						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<image class="news-image" src="{{ asset ('frontend/libraryindexes/images/news-thumb-1.jpg') }}"></image>
									<h3 class="news-title"><a href="#">laboris nisi ut aliquip</a></h3>
									<small class="date"><i class="fa fa-calendar"></i>24 mar 2014</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<image class="news-image" src="{{ asset ('frontend/libraryindexes/images/news-thumb-2.jpg') }}"></image>
									<h3 class="news-title"><a href="#">laboris nisi ut aliquip</a></h3>
									<small class="date"><i class="fa fa-calendar"></i>24 mar 2014</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<image class="news-image" src="{{ asset ('frontend/libraryindexes/images/news-thumb-3.jpg') }}"></image>
									<h3 class="news-title"><a href="#">laboris nisi ut aliquip</a></h3>
									<small class="date"><i class="fa fa-calendar"></i>24 mar 2014</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<image class="news-image" src="{{ asset ('frontend/libraryindexes/images/news-thumb-4.jpg') }}"></image>
									<h3 class="news-title"><a href="#">laboris nisi ut aliquip</a></h3>
									<small class="date"><i class="fa fa-calendar"></i>24 mar 2014</small>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2 class="section-title">Library Program</h2>
								<ul class="event-list">
									<li>
										<a href="#">
											<h3 class="event-title">Form Four</h3>
											<span class="event-meta">
												<span><i class="fa fa-calendar"></i>Monday & Friday</span>
												<span><i class="fa fa-map-marker"></i> Evening</span>

											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Form Three</h3>
											<span class="event-meta">
												<span><i class="fa fa-calendar"></i>Tuesday</span>
												<span><i class="fa fa-map-marker"></i> Evening</span>

											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Form Two</h3>
											<span class="event-meta">
												<span><i class="fa fa-calendar"></i>Wednesday</span>
												<span><i class="fa fa-map-marker"></i> Tea Break</span>

											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Form One</h3>
											<span class="event-meta">
												<span><i class="fa fa-calendar"></i>Thursday</span>
												<span><i class="fa fa-map-marker"></i> Tea Break</span>

											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Teachers</h3>
											<span class="event-meta">
												<span><i class="fa fa-calendar"></i>Monday & Friday</span>
												<span><i class="fa fa-map-marker"></i> Tea Break</span>

											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Others</h3>
											<span class="event-meta">
												<span><i class="fa fa-calendar"></i>Saturday</span>
												<span><i class="fa fa-map-marker"></i> Lunch Break</span>

											</span>
										</a>
									</li>
								</ul>

								<div class="text-center">
									<a href="#contact_form" class="button">Send Us Feedback</a>
								</div>
							</div>
							<div class="col-md-6">
								<h2 class="section-title">Library QOUTES</h2>
								<ul class="seremon-list">
									<li>
										<img src="{{ asset ('frontend/libraryindexes/images/small-thumb-1.jpg') }}" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">I believe in god with all my heart</a></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-user"></i> Alan Ray</div>
												<div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
											</div>
										</div>
									</li>
									<li>
										<img src="{{ asset ('frontend/libraryindexes/images/small-thumb-2.jpg') }}" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Trusting in jesus and god</a></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-user"></i> David Clark</div>
												<div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
											</div>
										</div>
									</li>
									<li>
										<img src="{{ asset ('frontend/libraryindexes/images/small-thumb-3.jpg') }}" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Love your kids</a></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-user"></i> anthony roberts</div>
												<div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
											</div>
										</div>
									</li>
								</ul>

								<div class="text-center">
									<a href="#" class="button">Read Library Rules</a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->
			</main> <!-- .main-content -->


		</div>
@endsection
