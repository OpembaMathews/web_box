<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>WEB_BOX</title>

		<!-- Loading third party fonts -->
		<link href="{{ asset ('frontend/libraryindexes/fonts/novecento-font/novecento-font.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset ('frontend/libraryindexes/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset ('frontend/libraryindexes/style.css') }}">
	</head>
	<body>
    <!-- Main content -->
        <section class="content">
          <!-- Main row -->
            <div class="site-content">
              <header class="site-header">
                <div class="container">
                  <a href="/" class="branding">
                    <img src="{{ asset ('frontend/libraryindexes/images/logo.png') }}" alt="" class="logo">
                    <h1 class="site-title">Koyonzo Resources</h1>
                  </a>

                  <div class="main-navigation">
                    <button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
                    <ul class="menu">
                      <li class="menu-item current-menu-item"><a href="/">Library <small>Lorem ipsum</small></a></li>
                      <li class="menu-item"><a href="/labs">Labs <small>Cupidatat non proident</small></a></li>
                      <li class="menu-item"><a href="/departments">Departments <small>Laboris nisi aliquip</small></a></li>
                      <li class="menu-item"><a href="/students">Students <small>Aute irure</small></a></li>
                      <li class="menu-item"><a href="/important-links">Links <small>lorem ipsum</small></a></li>
                    </ul>
                  </div>

                  <div class="mobile-navigation"></div>
                </div>
              </header> <!-- .site-header -->
                @yield('content')
                <footer class="site-footer">
                  <div class="container">
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
            </div>
        </section><!-- right col -->


		<script src="{{ asset ('frontend/libraryindexes/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset ('frontend/libraryindexes/js/plugins.js') }}"></script>
		<script src="{{ asset ('frontend/libraryindexes/js/app.js') }}"></script>
	</body>

</html>
