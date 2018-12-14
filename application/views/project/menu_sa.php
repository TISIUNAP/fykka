<nav class="navbar navbar-expand navbar-dark bg-dark static-top ">

      <a class="navbar-brand mr-1" href="<?php echo site_url('sistema');?>"><i class="fa fa-laptop-code"></i> Fykka</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" >
        <div class="input-group" >
          <input type="text" class="form-control" placeholder="Busca amigos..." aria-label="Search" aria-describedby="basic-addon2" >
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
      <!-- 
        
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      Navbar -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#"><?php echo $this->session->userdata("datos");?></a>
            <a class="dropdown-item opcion" href="<?php echo site_url('sistema/perfil');?>"> <i class="fa fa-user"></i> Mi perfil</a>
            <a class="dropdown-item opcion" href="<?php echo site_url('sistema/notificaciones');?>"><i class="fas fa-cogs "></i> Configuraciones</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off"></i> Salir</a>
           </div>
        </li>
        <!-- *************************** -->

        <!-- *************************** -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
	      <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro?</h5>
	            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">×</span>
	            </button>
	          </div>
	          <div class="modal-body">Si estás seguro de cerrar sesión presiona "Salir" aquí abajo, si no presiona cancelar</div>
	          <div class="modal-footer">
	            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
	            <a class="btn btn-primary" href="<?php echo site_url('sistema/cerrar_session');?>">Salir</a>
	          </div>
	        </div>
	      </div>
	    </div>
        <!-- *************************** -->
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(''); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>

        

        <?php 
          $class=$class1=$class2=$class3='hidden';
          $menu1=$menu2=$menu3=$menu4=0;
          if ($menu!=null): 
        ?>
            <?php foreach ($menu as $row): ?>
              <?php if ($row->rol_tipo =="PROYECTOS"): ?>
                <li class="nav-item">
                  <a class="nav-link opcion" href="<?php echo $row->rol_link; ?>">
                    <i class="fas fa-fw <?php echo $row->rol_icon; ?>"></i>
                    <span><?php echo $row->rol_nombre; ?></span></a>
                </li>
              <?php endif ?>
            <?php endforeach ?>  

        <?php endif ?>
        
        <li class="nav-item">
          <a class="nav-link opcion" href="<?php echo site_url('sistema/perfil'); ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Mi Perfil</span></a>
        </li>
      </ul>

      <div id="content-wrapper" >
			<div class="container-fluid" id="body_main">

        

            
