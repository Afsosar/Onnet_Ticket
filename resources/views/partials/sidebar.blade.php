<!-- Menu de Configuracion de Ticket sidebar-->
<div class="sidebar sidebar-style-2">
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <div class="avatar-sm float-left mr-2">
          <img src="{{asset('img/onnet.png')}}" alt="..." class="avatar-img rounded-circle">
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
              Onda Network
            </span>
          </a>
          <div class="clearfix"></div>
        </div>
      </div>
      <ul class="nav nav-primary">
        <li class="nav-item active">
          <a data-toggle="collapse"href="{{url('NuevoTicket')}}" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Inicio</p>
          </a>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Configuracion</h4>
        </li>
        <li class="nav-item">
          <a href="{{url('NuevoTicket')}}">
          <i class="fas fa-ticket-alt"></i>
              <p>Nuevo Ticket(s)</p>

          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('Ticket_Esperando_Respuesta')}}">
          <i class="fas fa-ticket-alt"></i>
            <p>Ticket(s) Esp Respuesta</p>
              <span class="badge";>1</span>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{url('Estado_de_Ticket')}}">
          <i class="fas fa-ticket-alt"></i>
          <p>Ticket(s) Contestados</p>
            <span class="badge badge-warning">10</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="widgets.html">
          <i class="fas fa-ticket-alt"></i>
          <p>Ticket(s) Especial</p>
            <span class="badge badge-info">53</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="widgets.html">
          <i class="fas fa-ticket-alt"></i>
          <p>Ticket(s) Cerrados</p>
            <span class="badge badge-info">53</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>
<!-- Fin menu de Ticket sidebar-->}
