<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ready Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/svg-with-js.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/v4-shims.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/all.min.css') }}">
    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/ready.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a class="navbar-brand" href="{{ route('home') }}" >
					<img src="{{ asset('images/eduna.jpg') }}" alt="Eduna" style="width:30px;height:30px">
				</a>
				<a href="{{ route('admin.dashboard') }}" class="logo">
					Dashboard
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item">	
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" style="text-decoration:none">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
					</ul>
				</div>
			</nav>
		</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item active">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="la la-dashboard"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.house.create') }}">
                                <i class="fa fa-home"></i>
                                <p>Post House </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.car.create') }}">
                                <i class="fa fa-car"></i>
                                <p>Post Car</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.houses') }}">
                                <i class="fa fa-home"></i>
                                <p>All House Posts</p>
                                <span class="badge badge-success">{{ $no_houses }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.cars') }}">
                                <i class="fa fa-car"></i>
                                <p>All Car Posts</p>
                                <span class="badge badge-success">{{ $no_cars }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users') }}">
                                <i class="fa fa-user"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.messages') }}">
                                <i class="fa fa-comment"></i>
                                <p>Messages</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.car.pending') }}">
                                <i class=""></i>
                                <p>Pending Cars</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.house.pending') }}">
                                <i class=""></i>
                                <p>Pending Houses</p>
                            </a>
                        </li>
                    </ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Dashboard</h4>
						<div class="row">
							<div class="col-md-4">
								<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-home"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Pending House</p>
													<a href="{{ route('admin.house.pending') }}"><h4 class="card-title">{{ $pending_houses }}</h4></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-stats card-danger">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-car"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Pending Cars</p>
												    <a href="{{ route('admin.car.pending') }}"><h4 class="card-title">{{ $pending_cars }}</h4></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-stats card-success">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-users"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Users</p>
													<a href="{{ route('admin.users') }}"><h4 class="card-title">{{ $users }}</h4></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/ready.min.js') }}"></script>
//<script src="{{ asset('assets/js/demo.js') }}"></script>

</html>