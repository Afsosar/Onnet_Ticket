<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Forms - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/atlantis.min.css')}}">
  <link href="{{asset('css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
</head>
<body>
	<div class="wrapper sidebar_minimize">


		<div class="main-panel">
			<div class="content">
				<div class="page-inner">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-warning">
									<div class="card-title">Nuevo Ticket de Soporte</div>
								</div>

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
          <input type="text" class="form-control" id="inputAddress">
        </div>
            </div>
            <div class="form-group col-md-6">
                <div class="form-group">
                <label for="inputAddress">Nombre del Solititante</label>
                <input type="text" class="form-control" id="inputAddress" >
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

	<!--   Core JS Files   -->
	<script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('js/core/popper.min.js')}}"></script>
	<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
	<!-- jQuery UI -->
	<script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<!-- Atlantis JS -->
	<script src="{{asset('js/atlantis.min.js')}}"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{asset('js/setting-demo2.js')}}"></script>
</body>
</html>
