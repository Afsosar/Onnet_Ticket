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
								<h2 class="text-white pb-2 fw-bold">Panel de Control </h2>
								<h5 class="text-white op-7 mb-2">de Tikkets</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

  <!--Tabla que muestra Ticket esperando Respuesta-->
  <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Ticket(s) Esperando Respuesta</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="add-row" class="display table table-light table-hover" >
                    <thead>
                      <tr>
                        <th>N°</th>
                        <th>Nombre del Cliente</th>
                        <th>Asunto del Ticket</th>
                       <th>Técnico</th>
                       
                        <!--<th>Fecha</th>-->
                        <!--<th>Estado del Ticket</th>-->
                        <!--<th>Abierto por</th>-->
                        <!--<th>Técnico</th>-->
                        <!--<<th style="width: 50%">Action</th>-->
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Action</th>

                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        <!--Tabla que muestra todos los estados que ha tenido los diferentes Ticket(s) fin -->

				</div>
			</div>
<!--Footer -->
		   @include('partials.footer')
		</div>
	</div>
	<!--   pluguin js  -->
 @include('partials.pluginjs')
  @include('partials.funcionamientodela_tabla')
</body>
</html>
