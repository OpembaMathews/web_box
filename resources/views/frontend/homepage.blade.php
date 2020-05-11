@extends('layouts.homemaster')

@section('content')
<!--Hero_Section-->
<section id="hero_section" class="">
  <div class="hero_wrapper">
      <li data-bg-image="{{ asset ('frontend/libraryindexes/images/koyo_back.PNG') }}">
        <div class="container">
        <div class="hero_section">
          <div class="row">
            <div class="col-lg-6 col-sm-7">
              <div class="top_left_cont zoomIn wow animated">
                <div class="px-5">
                  <h2 class="display-4">KOYONZO BOYS SECONDARY SCHOOL</h2>
                  <p class="" style="color:white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text  printer took a galley of type and scrambled it to make a type specimen.</p>
                  <a href="#service" class="read_more2">Read more</a> </div>
                </div>

            </div>
            <div class="col-lg-1 col-sm-1">

            </div>
            <div class="col-lg-5 col-sm-5">
  			<img src="{{ asset ('frontend/libraryindexes/images/koyo_logo.png') }}" class="zoomIn wow animated" alt="" />
  		  </div>
          </div>
        </div>
        </div>
      </li>


  </div>
</section>
<!--Hero_Section-->
<section class="jumbotron-fluid slider" id="features" style="background-color:#f7f7f2;">
    <section class="page_section" id="clients"><!--page_section-->
        <div class="container zoomIn wow ">
        <div class="section-title">
          <br> <h2>School News and Events</h2>
        </div>
        <p class="text-center tall py-4" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> <hr>
      <!--page_section-->
      <br><br>
        <div class="container ">
          <div class="row slider">
              <div class="col-md-8 col-md-push-4 lazy-container loaded delay-05s animated fadeInDown">
                  <!--<img data-original="images/mockup.png" src="images/mockup.png" alt="Looks great on every device"-->
                  <!--class="lazy">-->

                  <h2 id="fontstyle" class="">New Events</h2>

                  <div class="row boxshadow">
                      <div class="col-md-6 ">
                          <div class="feature-box">
                              <div class="feature-box-icon">
                                  <i class="icon-group"></i>
                              </div>
                              <div class="feature-box-info">
                                  <h4 class="shorter">Customer Support</h4>

                                  <p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
                              </div>
                          </div>
                          <div class="feature-box">
                              <div class="feature-box-icon">
                                  <i class="icon-file"></i>
                              </div>
                              <div class="feature-box-info">
                                  <h4 class="shorter">HTML5 / CSS3 / JS</h4>

                                  <p class="tall">Lorem ipsum dolor sit amet, adip.</p>
                              </div>
                          </div>
                          <div class="feature-box">
                              <div class="feature-box-icon">
                                  <i class="icon-google-plus"></i>
                              </div>
                              <div class="feature-box-info">
                                  <h4 class="shorter">500+ Google Fonts</h4>

                                  <p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
                              </div>
                          </div>
                          <div class="feature-box">
                              <div class="feature-box-icon">
                                  <i class="icon-adjust"></i>
                              </div>
                              <div class="feature-box-info">
                                  <h4 class="shorter">Colors</h4>

                                  <p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="feature-box">
                              <div class="feature-box-icon">
                                  <i class="icon-film"></i>
                              </div>
                              <div class="feature-box-info">
                                  <h4 class="shorter">Sliders</h4>

                                  <p class="tall">Lorem ipsum dolor sit amet, consectetur.</p>
                              </div>
                          </div>
                          <div class="feature-box">
                              <div class="feature-box-icon">
                                  <i class="icon-magic small user"></i>
                              </div>
                              <div class="feature-box-info">
                                  <h4 class="shorter">Icons</h4>

                                  <p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
                              </div>
                          </div>
                          <div class="feature-box">
                              <div class="feature-box-icon">
                                  <i class="icon-reorder"></i>
                              </div>
                              <div class="feature-box-info">
                                  <h4 class="shorter">Buttons</h4>

                                  <p class="tall">Lorem ipsum dolor sit, consectetur adip.</p>
                              </div>
                          </div>
                          <div class="feature-box">
                              <div class="feature-box-icon">
                                  <i class="icon-desktop"></i>
                              </div>
                              <div class="feature-box-info">
                                  <h4 class="shorter">Lightbox</h4>

                                  <p class="tall">Lorem sit amet, consectetur adip.</p>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
              <div class="col-md-4 col-md-pull-8 fadeInDown">
                  <div class="list-group">
                  <h2 id="fontstyle2" class="">News</h2>
                      <a href="#" class="list-group-item active">
                          <h4 class="list-group-item-heading">List group item heading</h4>

                          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                              tellus ac cursus commodo, tortor </p>
                      </a>
                      <a href="#" class="list-group-item">
                          <h4 class="list-group-item-heading">List group item heading</h4>

                          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                              tellus ac cursus commodo, tortor </p>
                      </a>
                      <a href="#" class="list-group-item">
                          <h4 class="list-group-item-heading">List group item heading</h4>

                          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                              tellus ac cursus commodo, tortor </p>
                      </a>
                      <a href="#" class="list-group-item">
                          <h4 class="list-group-item-heading">List group item heading</h4>

                          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                              tellus ac cursus commodo, tortor </p>
                      </a>

                  </div>


              </div>
          </div>
      </div>
      </div>
  </section>
</section>
<!--/Portfolio -->
<section class="page_section team" id="team" style="background-color:lightcoral;"><!--main-section team-start-->
  <div class="container">
    <div class="section-title">
      <h2>Admin</h2>
    </div>
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6><hr>
    <div class="team_section clearfix">
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-03s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{ asset ('frontend/homeindexes/img/team_pic1.jpg') }}" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-03s">Tom Rensed</h3>
        <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
        <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="team_area">
        <div class="team_box  wow fadeInDown delay-06s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{ asset ('frontend/homeindexes/img/team_pic2.jpg') }}" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">Kathren Mory</h3>
        <span class="wow fadeInDown delay-06s">Vice President</span>
        <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-09s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{ asset ('frontend/homeindexes/img/team_pic3.jpg') }}" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Lancer Jack</h3>
        <span class="wow fadeInDown delay-09s">Senior Manager</span>
        <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
    </div>
  </div>
</section>
<!--client_logos-->
<section id="aboutUs"style="background-color:#f7f7f2;"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <div class="section-title">
      <h2>About Us</h2><hr>
    </div>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{ asset ('frontend/homeindexes/img/about-img.jpg') }}" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
			<h3>Lorem Ipsum has been the industry's standard dummy text ever..</h3><br/>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p> <br/>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>
	   </div>

      </div>


    </div>
  </div>
  </div>
</section>
<!--Aboutus-->
<!-- Portfolio -->
<section id="Portfolio" class="content" style="background-color:lightcoral;">

  <!-- Container -->
  <div class="container portfolio_title">

    <!-- Title -->
    <div class="section-title">
      <h2>Gallery</h2><hr>
    </div>
    <!--/Title -->

  </div>
  <!-- Container -->

  <div class="portfolio-top"></div>

  <!-- Portfolio Filters -->
  <div class="portfolio">

    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".prototype">
          <h5>Sports</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".design">
          <h5>Drama</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".android">
          <h5>Music</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".appleIOS">
          <h5>Inter-class</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".web">
          <h5>Other Events</h5>
          </a></li>
      </ul>
    </div>
    <!--/Portfolio Filters -->

    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">

      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   appleIOS isotope-item">
        <div class="portfolio_img"> <img src="{{ asset ('frontend/homeindexes/img/portfolio_pic1.jpg') }}"  alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">SMS Mobile App</h4>
          </div>
        </div>
        </div>
      <!--/Portfolio Item -->

      <!-- Portfolio Item-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio_img"> <img src="{{ asset ('frontend/homeindexes/img/portfolio_pic2.jpg') }}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Finance App</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item -->

      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design  isotope-item">
        <div class="portfolio_img"> <img src="{{ asset ('frontend/homeindexes/img/portfolio_pic3.jpg') }}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">GPS Concept</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item-->

      <!-- Portfolio Item-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  android  prototype web isotope-item">
        <div class="portfolio_img"> <img src="{{ asset ('frontend/homeindexes/img/portfolio_pic4.jpg') }}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Shopping</h4>
          </div>
        </div>
      </div>
      <!-- Portfolio Item -->

      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio_img"> <img src="{{ asset ('frontend/homeindexes/img/portfolio_pic5.jpg') }}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Managment</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item -->

      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item">
        <div class="portfolio_img"> <img src="{{ asset ('frontend/homeindexes/img/portfolio_pic6.jpg') }}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">iPhone</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item -->

      <!-- Portfolio Item  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design web isotope-item">
        <div class="portfolio_img"> <img src="{{ asset ('frontend/homeindexes/img/portfolio_pic7.jpg') }}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Nexus Phone</h4>
          </div>
        </div>
       </div>
      <!--/Portfolio Item -->

      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   android isotope-item">
        <div class="portfolio_img"> <img src="{{ asset ('frontend/homeindexes/img/portfolio_pic8.jpg') }}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
				<h4 class="project_name">Android</h4>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item -->

    </div>
    <!--/Portfolio Wrapper -->

  </div>
  <!--/Portfolio Filters -->

  <div class="portfolio_btm"></div>


  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>


</section>

@endsection
