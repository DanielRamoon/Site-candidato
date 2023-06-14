<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Dashboard JUSMED" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Painel - Vereador Tiano Felix</title>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

		<!-- Common CSS -->
		<link rel="stylesheet" href="{{url('admin/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{url('admin/fonts/icomoon/icomoon.css')}}" />
		<link rel="stylesheet" href="{{url('admin/css/main.css')}}" />

        <!-- DataTable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

		<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
		<!-- Chartist css -->
		<link href="{{url('admin/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" />
		<link href="{{url('admin/vendor/chartist/css/chartist-custom.css')}}" rel="stylesheet" />

		<!-- include libraries(jQuery, bootstrap) -->
		<!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet"> -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

		<!-- include summernote css/js -->
		<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

	</head>
	<body>

		<!-- Loading starts -->
		<!-- <div class="loading-wrapper">
			<div class="loading">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div> -->
		<!-- Loading ends -->

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">
			<!-- BEGIN .app-heading -->
			<header class="app-header">
				<div class="container-fluid">
					<div class="row gutters">
						<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-8">
							<a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
								<i class="icon-arrow_back"></i>
							</a>
							<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
								<i class="icon-chevron-thin-left"></i>
							</a>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-4">
							<ul class="header-actions">
								<li>
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<!-- <img class="avatar" src="{{url('admin/img/user.png')}}" alt="User Thumb" /> -->
										<span class="user-name">{{Auth::user()->name}}</span>
										<i class="icon-chevron-small-down"></i>
									</a>
									<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
										<ul class="user-settings-list">
											<li>
												<a href="{{url('/usuario/edit')}}/{{Auth::user()->id}}">
													<div class="icon">
														<i class="icon-account_circle"></i>
													</div>
													<p>Editar Perfil</p>
												</a>
											</li>
											<li>
												<a href="{{url('/usuario')}}">
													<div class="icon red">
														<i class="icon-cog3"></i>
													</div>
													<p>Usuários</p>
												</a>
											</li>
											<!-- <li>
												<a href="#">
													<div class="icon yellow">
														<i class="icon-schedule"></i>
													</div>
													<p>Activity</p>
												</a>
											</li> -->
										</ul>
										<div class="logout-btn">
                                            <a class="btn btn-primary" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- END: .app-heading -->
			<!-- BEGIN .app-container -->
			<div class="app-container">
				<!-- BEGIN .app-side -->
				<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-profile -->
						<!-- <div class="user-profile">
							<a href="index.html" class="logo">
								<img src="{{url('admin/img/jusmed-logo.png')}}" alt="Unify Admin Dashboard" />
							</a>
							<h6 class="location-name">JUSMED</h6>
						</div> -->
						<!-- END .user-profile -->
						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">
								<!-- <li class="active selected">
									<a href="{{url('/home')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Dashboard</span>
									</a>
								</li> -->
								<li class="active">
									<a href="{{url('/home')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Dashboard</span>
									</a>
								</li>
								<li class="active">
									<a href="{{url('/projeto')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Projetos</span>
									</a>
								</li>
								<!-- <li class="active">
									<a href="{{url('/edital')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Editais</span>
									</a>
								</li> -->
								<li class="active">
									<a href="{{url('/noticia')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Notícias</span>
									</a>
								</li>
								<!-- <li class="active">
									<a href="{{url('/multimidia')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Multimídia</span>
									</a>
								</li> -->
								<li class="active">
									<a href="{{url('/acao')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Ações</span>
									</a>
								</li>
                                <li class="active">
									<a href="{{url('/fale')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Fale com Ronnynho</span>
									</a>
								</li>
                                <li class="active">
									<a href="{{url('/contato')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Contato</span>
									</a>
								</li>
                                <li class="active">
									<a href="{{url('/minha-historia/create')}}">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Configurações</span>
									</a>
								</li>

							</ul>
							<!-- END: side-nav-content -->
						</nav>
						<!-- END: .side-nav -->
					</div>
					<!-- END: .side-content -->
				</aside>
				<!-- END: .app-side -->

				<!-- BEGIN .app-main -->
				<div class="app-main">
                    @yield('content')
				</div>
				<!-- END: .app-main -->
			</div>
			<!-- END: .app-container -->
			<!-- BEGIN .main-footer -->
			<footer class="main-footer fixed-btm">
				Copyright Ronnynho Queiroz 2023..
			</footer>
			<!-- END: .main-footer -->
		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->
		<!-- <script src="{{url('admin/js/jquery.js')}}"></script> -->
		<script src="{{url('admin/js/tether.min.js')}}"></script>
		<script src="{{url('admin/js/bootstrap.min.js')}}"></script>
		<script src="{{url('admin/vendor/unifyMenu/unifyMenu.js')}}"></script>
		<script src="{{url('admin/vendor/onoffcanvas/onoffcanvas.js')}}"></script>
		<script src="{{url('admin/js/moment.js')}}"></script>

		<!-- Sparkline JS -->
		<script src="{{url('admin/vendor/sparkline/sparkline-retina.js')}}"></script>
		<script src="{{url('admin/vendor/sparkline/custom-sparkline.js')}}"></script>

		<!-- Slimscroll JS -->
		<script src="{{url('admin/vendor/slimscroll/slimscroll.min.js')}}"></script>
		<script src="{{url('admin/vendor/slimscroll/custom-scrollbar.js')}}"></script>

		<!-- Chartist JS -->
		<!-- <script src="{{url('admin/vendor/chartist/js/chartist.min.js')}}"></script>
		<script src="{{url('admin/vendor/chartist/js/chartist-tooltip.js')}}"></script>
		<script src="{{url('admin/vendor/chartist/js/custom/custom-line-chart3.js')}}"></script>
		<script src="{{url('admin/vendor/chartist/js/custom/custom-area-chart.js')}}"></script>
		<script src="{{url('admin/vendor/chartist/js/custom/donut-chart2.js')}}"></script>
		<script src="{{url('admin/vendor/chartist/js/custom/custom-line-chart4.js')}}"></script> -->

		<!-- Common JS -->
        <script src="{{url('admin/js/common.js')}}"></script>

		<!-- Select2 -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

		<!-- Mask -->
        <script src="{{url('admin/js/jquery.mask.js')}}"></script>
        <script src="{{url('admin/js/jquery.mask.min.js')}}"></script>
        <script src="{{url('admin/js/mask.js')}}"></script>

        <!-- DataTable -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

        <script>
            $(document).ready( function () {
                $('#basicExample').DataTable();
				$('.js-example-basic-single').select2();
				$('#summernote01').summernote({
        			height: 100
				});
				$('#summernote02').summernote({
        			height: 100
				});
				$('#summernote03').summernote({
        			height: 100
				});
				$('#summernote04').summernote({
        			height: 100
				});
				$('#summernote05').summernote({
        			height: 100
				});
				$('#summernote06').summernote({
        			height: 100
				});
				$('#summernote07').summernote({
        			height: 100
				});
				$('.note-popover').hide();
            } );
        </script>


	</body>
</html>
