<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/jpg" href="#">
	<title>@yield('title')</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="app sidebar-mini rtl">

	<!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="/">SmartBin</a>
      	<!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      	<!-- Navbar Right Menu-->
      	<ul class="app-nav">
        	<!-- User Menu-->
        	<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
	          	<ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="#"><i class="fa fa-home fa-lg"></i> Home</a></li>
		            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
		            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
		            <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
	          	</ul>
        	</li>
      	</ul>
    </header>
    <!-- End Navbar-->

    <!-- Sidebar Menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      	<div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('img/team-1.jpg')}}" alt="User Image" width="40">
        	<div>
          		<p class="app-sidebar__user-name">Admin</p>
          		<p class="app-sidebar__user-designation">admin@mail.com</p>
        	</div>
      	</div>
      	<ul class="app-menu">
      		@yield('sidebar')
      	</ul>
    </aside>
    <!-- End Sidebar Menu-->

    <!-- Main Content-->
    <main class="app-content">
    	@yield('content')
    </main>
    <!-- End Main Content-->

	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/select2.min.js')}}"></script>
</body>
</html>