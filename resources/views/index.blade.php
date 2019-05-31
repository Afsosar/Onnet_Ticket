@extends('layouts/app')
@section('content')
<!--Tabla que muestra todos los estados que ha tenido los diferentes Ticket(s)-->

        <div class="row">
          <div class="col-md-12">
            <div class="card full-height">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title" role="tab">Estado de Ticket(s) </div>
                  <div class="card-tools">
                    <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Today</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">Week</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">Month</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <div class="avatar avatar-online">
                    <span class="avatar-title rounded-circle border border-white bg-info">J</span>
                  </div>
                  <div class="flex-1 ml-3 pt-1">
                    <h6 class="text-uppercase fw-bold mb-1">Joko Subianto <span class="text-warning pl-3">pending</span></h6>
                    <span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
                  </div>
                  <div class="float-right pt-1">
                    <small class="text-muted">8:40 PM</small>
                  </div>
                </div>
                <div class="separator-dashed"></div>
                <div class="d-flex">
                  <div class="avatar avatar-offline">
                    <span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                  </div>
                  <div class="flex-1 ml-3 pt-1">
                    <h6 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span class="text-success pl-3">open</span></h6>
                    <span class="text-muted">I have some query regarding the license issue.</span>
                  </div>
                  <div class="float-right pt-1">
                    <small class="text-muted">1 Day Ago</small>
                  </div>
                </div>
                <div class="separator-dashed"></div>
                <div class="d-flex">
                  <div class="avatar avatar-away">
                    <span class="avatar-title rounded-circle border border-white bg-danger">L</span>
                  </div>
                  <div class="flex-1 ml-3 pt-1">
                    <h6 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span class="text-muted pl-3">closed</span></h6>
                    <span class="text-muted">Is there any update plan for RTL version near future?</span>
                  </div>
                  <div class="float-right pt-1">
                    <small class="text-muted">2 Days Ago</small>
                  </div>
                </div>
                <div class="separator-dashed"></div>
                <div class="d-flex">
                  <div class="avatar avatar-offline">
                    <span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                  </div>
                  <div class="flex-1 ml-3 pt-1">
                    <h6 class="text-uppercase fw-bold mb-1">Peter Parker <span class="text-success pl-3">open</span></h6>
                    <span class="text-muted">I have some query regarding the license issue.</span>
                  </div>
                  <div class="float-right pt-1">
                    <small class="text-muted">2 Day Ago</small>
                  </div>
                </div>
                <div class="separator-dashed"></div>
                <div class="d-flex">
                  <div class="avatar avatar-away">
                    <span class="avatar-title rounded-circle border border-white bg-danger">L</span>
                  </div>
                  <div class="flex-1 ml-3 pt-1">
                    <h6 class="text-uppercase fw-bold mb-1">Logan Paul <span class="text-muted pl-3">closed</span></h6>
                    <span class="text-muted">Is there any update plan for RTL version near future?</span>
                  </div>
                  <div class="float-right pt-1">
                    <small class="text-muted">2 Days Ago</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!--Tabla que muestra todos los estados que ha tenido los diferentes Ticket(s) fin -->
@stop
