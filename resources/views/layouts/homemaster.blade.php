<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1">
		<title>WEB_BOX</title>
		<link rel="icon" href="{{ asset ('frontend/homeindexes/favicon.png') }}" type="image/png">
		<link href="{{ asset ('frontend/homeindexes/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset ('frontend/homeindexes/css/style.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset ('frontend/homeindexes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset ('frontend/homeindexes/css/animate.css') }}" rel="stylesheet" type="text/css">

		<link href="{{ asset ('frontend/libraryindexes/fonts/novecento-font/novecento-font.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset ('frontend/libraryindexes/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset ('frontend/libraryindexes/style.css') }}">
		<!--[if lt IE 9]>
		    <script src="js/respond-1.1.0.min.js"></script>
		    <script src="js/html5shiv.js"></script>
		    <script src="js/html5element.js"></script>
		<![endif]-->

	</head>
	<body style="background-color:#f7f7f2;">
		<!--Header_section-->
		<header id="header_wrapper">
		  <div class="container ">
		    <div class="header_box" >
		      <div class="logo"><a href="#"><img src="frontend/libraryindexes/images/Logo.PNG" alt="logo"></a></div>
			  <nav class="navbar navbar-inverse" role="navigation">
		      <div class="navbar-header">
		        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		        </div>
			    <div id="main-nav" class="collapse navbar-collapse navStyle " >
						<ul class="nav navbar-nav" id="mainNav">
				  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
	        <li><a href="#clients" class="scroll-link">News</a></li>
	        <li><a href="#team" class="scroll-link">Admin</a></li>
	        <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
				  <li><a href="#Portfolio" class="scroll-link">Gallery</a></li>
				  <li><a href="#contact" class="scroll-link">Contact</a></li>
					<li><a href="/library" class="scroll-link">Resources</a></li>
				</ul>
		      </div>
			 </nav>
		    </div>
		  </div>
		</header>
		<!--Header_section-->
    @yield('content')
		<footer class="site-footer">
			<div class="container wow fadeInLeft" id="contact">
				<div class="row">
					<div class="col-md-4">
						<div class="widget">
							<h3 class="widget-title">Our address</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi perspiciatis magnam, ab ipsa laboriosam tempore tenetur, aliquid repellat, ex cum dicta reiciendis accusamus. Omnis repudiandae quasi mollitia, iusto odio dignissimos.</p>
							<ul class="address">
								<li><i class="fa fa-map-marker"></i> 329 Church St, Garland, TX 75042</li>
								<li><i class="fa fa-phone"></i> (425) 853 442 552</li>
								<li><i class="fa fa-envelope"></i> info@yourchurch.com</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget">
							<h3 class="widget-title">School Affiliates</h3>
							<ul class="bullet">
								<li><a href="#">Koyonzo Boys Alumni</a></li>
								<li><a href="#">Jesma Exams Publishers</a></li>
								<li><a href="#">Cocacola Company</a></li>
								<li><a href="#">M-pesa Foundation</a></li>
								<li><a href="#">Dedan Kimathi University of Technology</a></li>
								<li><a href="#">Gtechs Printes LTD</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget">
							<h3 class="widget-title" id="contact_form">Contact Us</h3>
							<form action="#" class="contact-form">
								<div class="row">
									<div class="col-md-6"><input type="text" placeholder="Your name..."></div>
									<div class="col-md-6"><input type="text" placeholder="Email..."></div>
								</div>

								<textarea name="" placeholder="Your message..."></textarea>
								<div class="text-right"><input type="submit" value="Send message"></div>

							</form>
						</div>
					</div>
				</div> <!-- .row -->

				<p class="colophon">Copyright WEB BOX. All right reserved</p>
			</div><!-- .container -->
		</footer> <!-- .site-footer -->

		<script type="text/javascript" src="frontend/homeindexes/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="frontend/homeindexes/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="frontend/homeindexes/js/jquery-scrolltofixed.js"></script>
		<script type="text/javascript" src="frontend/homeindexes/js/jquery.nav.js"></script>
		<script type="text/javascript" src="frontend/homeindexes/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="frontend/homeindexes/js/jquery.isotope.js"></script>
		<script type="text/javascript" src="frontend/homeindexes/js/wow.js"></script>
		<script type="text/javascript" src="frontend/homeindexes/js/custom.js"></script>

		<!-- <script src="{{ asset ('frontend/libraryindexes/js/jquery-1.11.1.min.js') }}"></script> -->
		<script src="frontend/libraryindexes/js/plugins.js"></script>
		<!-- <script src="{{ asset ('frontend/libraryindexes/js/app.js') }}"></script> -->

	</body>

</html>
