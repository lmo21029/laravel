<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>@yield('title')</title>

	<link rel="stylesheet" href="/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/neon-core.css">
	<link rel="stylesheet" href="/assets/css/neon-theme.css">
	<link rel="stylesheet" href="/assets/css/neon-forms.css">
	<link rel="stylesheet" href="/assets/css/custom.css">


	<script src="/assets/js/jquery-1.11.0.min.js"></script>
	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="">
						<img src="/assets/images/logo@2x.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="active opened active">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span class="title">Menu 1</span>
					</a>
					<ul>
						
					@if(Auth::User()->role_id==1)
						<li>
							<a href="">
								<span class="title">Persons</span>
							</a>
					
							<ul>
								<li>
									<a href="{{route('accounts.create')}}">
										<span class="title">Crear</span>
									</a>
								</li>
							
								<li>
									<a href="{{route('accounts.index')}}">
										<span class="title">accounts index</span>
										<span class="badge badge-secondary badge-roundless">New</span>
									</a>
								</li>
							</ul>
						</li>
						@endif

						<li>
							<a href="highlights.html">
								<span class="title">What's New</span>
								<span class="badge badge-success badge-roundless">v1.8</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/default-user-image.png" alt="" class="img-circle" width="44" />
							{{ Auth::user()->name." ".Auth::user()->lastname}}
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="extra-timeline.html">
									<i class="entypo-user"></i>
									Edit Profile
								</a>
							</li>
		
							<li>
								<a href="mailbox.html">
									<i class="entypo-mail"></i>
									Inbox
								</a>
							</li>
		
							<li>
								<a href="extra-calendar.html">
									<i class="entypo-calendar"></i>
									Calendar
								</a>
							</li>
		
							<li>
								<a href="#">
									<i class="entypo-clipboard"></i>
									Tasks
								</a>
							</li>
						</ul>
					</li>
				</ul>
				

		
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<li>
						<a href="{{route('session.logout')}}">
							Log Out <i class="entypo-logout right"></i>
						</a>
						
					
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />

					@if (Session::has('alert-success'))
			<div class="alert alert-success"> <p>{{ Session::get('alert-success') }}</p> </div>
			@endif

			@if (Session::has('alert-danger'))
			<div class="alert alert-danger"> <p>{{ Session::get('alert-danger') }}</p> </div>
			@endif

			<div class="row">
				@yield('content')
			</div>
		

		

		<!-- Footer -->
		<footer class="main">
			
			&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>
</div>


	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="/assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="/assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="/assets/js/gsap/main-gsap.js"></script>
	<script src="/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/joinable.js"></script>
	<script src="/assets/js/resizeable.js"></script>
	<script src="/assets/js/neon-api.js"></script>
	<script src="/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="/assets/js/jquery.sparkline.min.js"></script>
	<script src="/assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="/assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="/assets/js/raphael-min.js"></script>
	<script src="/assets/js/morris.min.js"></script>
	<script src="/assets/js/toastr.js"></script>
	<script src="/assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="/assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="/assets/js/neon-demo.js"></script>

</body>
</html>