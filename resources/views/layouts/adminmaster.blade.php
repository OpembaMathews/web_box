<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'WEB_BOX') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- fullCalendar 2.2.5-->
    <link href="{{ asset('css/appstyle.css') }}" rel="stylesheet">
		<link href="{{ asset ('backend/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset ('backend/plugins/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" type="text/css" media='print' />
		<!-- Bootstrap 3.3.4 -->
    <link href="{{ asset ('backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset ('backend/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset ('backend/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset ('backend/plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset ('backend/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset ('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset ('backend/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset ('backend/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset ('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<body class="skin-red sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
        <!-- Logo -->
        <a href="/admin" class="logo">
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <span class="hidden-xs">
                  <img src="{{ asset ('backend/dist/img/user2-160x160.jpg') }}" class="user-image" />
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ $user->name}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                  </span>

              </li>
            </ul>
          </div>
        </nav>
      </header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">
							<img src="{{ asset ('backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p>{{ $user->name}}</p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<!-- search form -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search..." />
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li class="active treeview">
							<a href="/admin">
								<i class="fa fa-dashboard"></i>	<i class="fa fa-envelope"></i> <span>Mailbox</span>
									<small class="label pull-right bg-yellow">12</small> <i class="fa fa-angle-left pull-right"></i>
							</a>
						</li>
						<li>
							<a href="/admin/profile">
								<i class="fa fa-th"></i> <span>Admin Profile</span> <small class="label pull-right bg-green">new</small>
							</a>
						</li>

						<li class="header">CONTENT UPLOAD</li>
						<li><a href="/admin/home"><i class="fa fa-circle-o text-red"></i> <span>Home Page</span></a></li>
						<li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Resource Pages</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/lib"><i class="fa fa-circle-o"></i> Library</a></li>
                <li><a href="/admin/labs"><i class="fa fa-circle-o"></i> Laboratories</a></li>
                <li><a href="/admin/dept"><i class="fa fa-circle-o"></i> Departments</a></li>
                <li><a href="/admin/student"><i class="fa fa-circle-o"></i> Student Accounts</a></li>
              </ul>
            </li>
						<li><a href="/admin/documentation/"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->


				<!-- Main content -->
				<section class="content">
					<!-- Main row -->
					<div class="row">

							<!-- Left col -->
							@yield('content')


					</div><!-- /.row (main row) -->

				</section><!-- /.content -->
			</div><!-- /.content-wrapper -->


			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Create the tabs -->
				<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
					<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
					<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<!-- Home tab content -->
					<div class="tab-pane" id="control-sidebar-home-tab">
						<h3 class="control-sidebar-heading">Recent Activity</h3>
						<ul class="control-sidebar-menu">
							<li>
								<a href="javascript::;">
									<i class="menu-icon fa fa-birthday-cake bg-red"></i>
									<div class="menu-info">
										<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
										<p>Will be 23 on April 24th</p>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript::;">
									<i class="menu-icon fa fa-user bg-yellow"></i>
									<div class="menu-info">
										<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
										<p>New phone +1(800)555-1234</p>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript::;">
									<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
									<div class="menu-info">
										<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
										<p>nora@example.com</p>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript::;">
									<i class="menu-icon fa fa-file-code-o bg-green"></i>
									<div class="menu-info">
										<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
										<p>Execution time 5 seconds</p>
									</div>
								</a>
							</li>
						</ul><!-- /.control-sidebar-menu -->

						<h3 class="control-sidebar-heading">Tasks Progress</h3>
						<ul class="control-sidebar-menu">
							<li>
								<a href="javascript::;">
									<h4 class="control-sidebar-subheading">
										Custom Template Design
										<span class="label label-danger pull-right">70%</span>
									</h4>
									<div class="progress progress-xxs">
										<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript::;">
									<h4 class="control-sidebar-subheading">
										Update Resume
										<span class="label label-success pull-right">95%</span>
									</h4>
									<div class="progress progress-xxs">
										<div class="progress-bar progress-bar-success" style="width: 95%"></div>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript::;">
									<h4 class="control-sidebar-subheading">
										Laravel Integration
										<span class="label label-warning pull-right">50%</span>
									</h4>
									<div class="progress progress-xxs">
										<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript::;">
									<h4 class="control-sidebar-subheading">
										Back End Framework
										<span class="label label-primary pull-right">68%</span>
									</h4>
									<div class="progress progress-xxs">
										<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
									</div>
								</a>
							</li>
						</ul><!-- /.control-sidebar-menu -->

					</div><!-- /.tab-pane -->
					<!-- Stats tab content -->
					<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
					<!-- Settings tab content -->
					<div class="tab-pane" id="control-sidebar-settings-tab">
						<form method="post">
							<h3 class="control-sidebar-heading">General Settings</h3>
							<div class="form-group">
								<label class="control-sidebar-subheading">
									Report panel usage
									<input type="checkbox" class="pull-right" checked />
								</label>
								<p>
									Some information about this general settings option
								</p>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label class="control-sidebar-subheading">
									Allow mail redirect
									<input type="checkbox" class="pull-right" checked />
								</label>
								<p>
									Other sets of options are available
								</p>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label class="control-sidebar-subheading">
									Expose author name in posts
									<input type="checkbox" class="pull-right" checked />
								</label>
								<p>
									Allow the user to show his name in blog posts
								</p>
							</div><!-- /.form-group -->

							<h3 class="control-sidebar-heading">Chat Settings</h3>

							<div class="form-group">
								<label class="control-sidebar-subheading">
									Show me as online
									<input type="checkbox" class="pull-right" checked />
								</label>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label class="control-sidebar-subheading">
									Turn off notifications
									<input type="checkbox" class="pull-right" />
								</label>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label class="control-sidebar-subheading">
									Delete chat history
									<a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
								</label>
							</div><!-- /.form-group -->
						</form>
					</div><!-- /.tab-pane -->
				</div>
			</aside><!-- /.control-sidebar -->
			<!-- Add the sidebar's background. This div must be placed
					 immediately after the control sidebar -->
			<div class="control-sidebar-bg"></div>
		</div><!-- ./wrapper -->

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.2.0
			</div>
			<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
		</footer>
		</div><!-- ./wrapper -->
		    <!-- jQuery 2.1.4 -->
		    <script src="{{ asset ('backend/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
		    <!-- jQuery UI 1.11.4 -->
		    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
		    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		    <script type="text/javascript">
		      $.widget.bridge('uibutton', $.ui.button);
		    </script>
		    <!-- Bootstrap 3.3.2 JS -->
		    <script src="{{ asset ('backend/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
		    <!-- Morris.js charts -->
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		    <script src="{{ asset ('backend/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
		    <!-- Sparkline -->
		    <script src="{{ asset ('backend/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
		    <!-- jvectormap -->
		    <script src="{{ asset ('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
		    <script src="{{ asset ('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
		    <!-- jQuery Knob Chart -->
		    <script src="{{ asset ('backend/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
		    <!-- daterangepicker -->
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
		    <script src="{{ asset ('backend/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
		    <!-- datepicker -->
		    <script src="{{ asset ('backend/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
		    <!-- Bootstrap WYSIHTML5 -->
		    <script src="{{ asset ('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
		    <!-- Slimscroll -->
		    <script src="{{ asset ('backend/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
		    <!-- FastClick -->
		    <script src="{{ asset ('backend/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
		    <!-- AdminLTE App -->
		    <script src="{{ asset ('backend/dist/js/app.min.js') }}" type="text/javascript"></script>
		    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		    <script src="{{ asset ('backend/dist/js/pages/dashboard.js') }}" type="text/javascript"></script>
		    <!-- AdminLTE for demo purposes -->
		    <script src="{{ asset ('backend/dist/js/demo.js') }}" type="text/javascript"></script>
		    <!-- iCheck -->
		    <script src="{{ asset ('backend/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
		    <!-- Page Script -->
		    <script>
		      $(function () {
		        //Enable iCheck plugin for checkboxes
		        //iCheck for checkbox and radio inputs
		        $('.mailbox-messages input[type="checkbox"]').iCheck({
		          checkboxClass: 'icheckbox_flat-blue',
		          radioClass: 'iradio_flat-blue'
		        });

		        //Enable check and uncheck all functionality
		        $(".checkbox-toggle").click(function () {
		          var clicks = $(this).data('clicks');
		          if (clicks) {
		            //Uncheck all checkboxes
		            $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
		            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
		          } else {
		            //Check all checkboxes
		            $(".mailbox-messages input[type='checkbox']").iCheck("check");
		            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
		          }
		          $(this).data("clicks", !clicks);
		        });

		        //Handle starring for glyphicon and font awesome
		        $(".mailbox-star").click(function (e) {
		          e.preventDefault();
		          //detect type
		          var $this = $(this).find("a > i");
		          var glyph = $this.hasClass("glyphicon");
		          var fa = $this.hasClass("fa");

		          //Switch states
		          if (glyph) {
		            $this.toggleClass("glyphicon-star");
		            $this.toggleClass("glyphicon-star-empty");
		          }

		          if (fa) {
		            $this.toggleClass("fa-star");
		            $this.toggleClass("fa-star-o");
		          }
		        });
		      });
		    </script>

	</body>

</html>
