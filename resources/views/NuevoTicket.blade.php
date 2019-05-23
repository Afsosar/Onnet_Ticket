<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>OndaNetwork</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('img/onnet.png')}}" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}">


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


</head>
<body>

	<div class="wrapper">
					<!-- Header-->
					<!-- Sidevar-->
					@include('partials.header')
				  @include('partials.sidebar')
				  @yield('content')



	<!-- Inicio panel de control -->
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Reguistro de Ticket </h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
	<!--Formulario de creacion de un nuevo Ticket-->
	        <div class="row">
	          <div class="col-md-12">
	            <div class="card full-height">
	              <div class="card">
	               	<div class="card-header card-header-warning">
	                  <div class="card-title">Nuevo Ticket de Soporte </div>
	                </div>
	              </div>
	              <div class="card-body">
									<form>
									<div class="form-row">
									<div class="form-group col-md-6">
									<div class="form-group">
									<label for="inputState">Cliente</label>
									<select id="inputState" class="form-control">
									<option selected>Selecionar Cliente</option>
									<option>...</option>
									</select>
									</div>
									</div>
									<div class="form-group col-md-6">
									<div class="form-group">
									<label for="inputState">Técnico</label>
									<select id="inputState" class="form-control">
									<option selected>Técnico a asignar</option>
									<option>...</option>
									</select>
									</div>
									</div>
									</div>
									<div class="form-row">
									<div class="form-group col-md-6">
									<div class="form-group">
									<label for="inputAddress">Asunto del Ticket</label>
									<input type="text" class="form-control" id="input" >
									</div>
										</div>
									<div class="form-group col-md-6">
									<div class="form-group">
									<label for="inputAddress">Nombre del Solititante</label>
									<input type="text" class="form-control" id="nombre" >
									</div>
										</div>
									</div>
									<div class="form-row">
									<div class="form-group col-md-4">
									<div class="form-group">
									<label for="inputAddress">Visita agendada para</label>
									<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-group">
									<label for="inputState">Turno de la visita</label>
									<select id="inputState" class="form-control">
									<option selected>Selecionar Cliente</option>
									<option>...</option>
									</select>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-group">
									<label for="inputState">Agendado por</label>
									<select id="inputState" class="form-control">
									<option selected>Oficina</option>
									<option>...</option>
									</select>
									</div>
									</div>
									</div>
									</form>
									<div class="card-action">
										<button class="btn btn-default">Registrar</button>
										<button class="btn btn-warning">Cancelar</button>
									</div>
								</div>
								</div>
								</div>
	              </div>
	            </div>
	          </div>
	        </div>
	          <!--formulario de reguistro de tikects -->

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
