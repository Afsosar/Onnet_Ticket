@extends('index')
@section('content')
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
      @endsection
