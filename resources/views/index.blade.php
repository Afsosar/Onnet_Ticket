<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>OndaNetwork</title>
	<script src="{{asset('js/jquery-3.3.1.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/dataTables.responsive.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('datatable.js')}}"></script>

	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('img/onnet.png')}}" type="image/x-icon"/>


	<!-- Fonts and icons -->
	<script src="{{asset('js/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["{{asset('css/fonts.min.css')}}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/atlantis.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.dataTables.min.css')}}">

</head>
<body>

	<div class="wrapper">
					<!-- Header-->
					<!-- Sidevar-->
					@include('partials.header')
				  @include('partials.sidebar')

	<!-- Inicio panel de control -->
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Panel de Control </h2>
								<h5 class="text-white op-7 mb-2">de Tikkets</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
	<!--Tabla que muestra todos los estados que ha tenido los diferentes Ticket(s)-->
			  @yield('content')
				</div>
			</div>
<!--Footer -->
		   @include('partials.footer')
		</div>
	</div>
	<!--   pluguin js  -->
 @include('partials.pluginjs')
</body>
</html>
