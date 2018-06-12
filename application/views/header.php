<!DOCTYPE html>
<html lang="es">
<head>
  <?php $url_inicio=base_url().'assets/';?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?= $url_inicio ?>img/favicon.ico" type="image/ico" />
  <title>Sistema de Despachos | Grupo CRP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= $url_inicio ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="<?= $url_inicio ?>dist/css/font-awesome/font-awesome.min.css">
  <!-- Ionicons -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
  <link rel="stylesheet" href="<?= $url_inicio ?>dist/css/ionicons/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $url_inicio ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= $url_inicio ?>dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= $url_inicio ?>plugins/iCheck/flat/blue.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?= $url_inicio ?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= $url_inicio ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= $url_inicio ?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= $url_inicio ?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= $url_inicio ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url()?>" class="logo">
		<img src="<?= $url_inicio ?>img/logo-2.png" width="20%" height="100%" style="float: left;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CRP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Grupo</b>CRP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li>
            <a href="<?= base_url().'venta'?>" class="dropdown-toggle">
              <i class="fa fa-barcode"></i>Productos
              
            </a>
          </li>
          <li>
            <a href="<?= base_url().'venta/carrito'?>" class="dropdown-toggle">
              <i class="fa fa-inbox"></i> Carrito
              <span class="label label-success"><?= $this->cart->total_items()?></span>
            </a>
          </li>
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">1</span>
            </a>
            
            <ul class="dropdown-menu">
              <li class="header">Tienes 1 Mensaje</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= $url_inicio ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Jorge Sotelo
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Demora en Despacho</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todos los mensajes</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes 1 notificacion</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 25 despachos entregados
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver Todos</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes 1 Tarea</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Programar Despachos
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Completo</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Ver todas las tareas</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= $url_inicio ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->session->userdata('nombre_usuario').' '.$this->session->userdata('apellidopat_usuario')?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= $url_inicio ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?= $this->session->userdata('nombre_usuario').' '.$this->session->userdata('apellidopat_usuario')?> - Administrador
                  <small>Miembro desde <?= date("M", strtotime($this->session->userdata('fechaRegistro_usuario'))); ?>. <?= date("Y", strtotime($this->session->userdata('fechaRegistro_usuario'))); ?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="inicio/logout" class="btn btn-default btn-flat"><i class="fa fa-reply"></i> Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= $url_inicio ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->userdata('nombre_usuario').' '.$this->session->userdata('apellidopat_usuario')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php
        //$priv=$this->session->userdata('privilegios_usuario');
        $priv=array(true,true,true,true,
                    true,true,true,true,
                    true,true,true,true,
                    true,true,true,true,true
                    );
      ?>

      <ul class="sidebar-menu">
        <li class="header">MENU DE NAVEGACION</li>
        <li>
          <a href="<?= base_url()?>inicio">
            <i class="fa fa-dashboard"></i> <span>Inicio</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        <?php
          if($priv[0]){
        ?>
		    <li>
          <a href="<?= base_url().'registrarProductos'?>">
            <i class="fa fa-pencil"></i> <span>Registro de Productos</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        <?php } 
          if($priv[1]){
        ?>
		    <li>
          <a href="<?= base_url().'programacionDespacho'?>">
            <i class="fa fa-calendar-o"></i> <span>Programacion de Despachos</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        <?php } 
          if($priv[2]){
        ?>
		    <li>
          <a href="<?= base_url().'programacionInstalacion'?>">
            <i class="fa fa-calendar-o"></i> <span>Programacion de Instalacion</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        <?php } 
          if($priv[16]){
        ?>
        <li>
          <a href="<?= base_url().'programacionCamion'?>">
            <i class="fa fa-calendar-o"></i> <span>Programacion de Camiones</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        <?php } 
          //if($priv[3] or $priv[4] or $priv[5] or $priv[6]){
        ?>
		    <li class="treeview">
          <a href="#">
            <i class="fa fa-search"></i>
            <span>Consultas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($priv[3]) { ?><li><a href="<?= base_url().'consultas/ProgramacionDespachos'?>"><i class="fa fa-circle-o"></i> Despachos</a></li><?php } ?>
      			<?php if ($priv[4]) { ?><li><a href="<?= base_url().'consultas/programacionCamiones'?>"><i class="fa fa-circle-o"></i> Programacion de Camiones</a></li><?php } ?>
      			<?php if ($priv[5]) { ?><li><a href="<?= base_url().'consultas/horaLlegada'?>"><i class="fa fa-circle-o"></i> Hora de Llegada</a></li><?php } ?>
      			<?php if ($priv[6]) { ?><li><a href="<?= base_url().'consultas/ventas'?>"><i class="fa fa-circle-o"></i> Ordenes de Venta - Despachos</a></li><?php } ?>
          </ul>
        </li>
        <?php //} 
          //if($priv[7] or $priv[8] or $priv[9]){
        ?>
		    <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($priv[7]) { ?><li><a href="#"><i class="fa fa-circle-o"></i> Despachos</a></li><?php } ?>
      			<?php if ($priv[8]) { ?><li><a href="#"><i class="fa fa-circle-o"></i> Camiones</a></li><?php } ?>
      			<?php if ($priv[9]) { ?><li><a href="#"><i class="fa fa-circle-o"></i> Programaciones</a></li><?php } ?>
          </ul>
        </li>
        <?php //} 
          //if($priv[10] or $priv[11]){
        ?>
		    <li class="treeview">
          <a href="#">
            <i class="fa fa-unlock-alt"></i>
            <span>Seguridad</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($priv[10]) { ?><li><a href="<?= base_url() ?>seguridad"><i class="fa fa-circle-o"></i> Usuarios</a></li><?php } ?>
			      <?php if ($priv[11]) { ?><li><a href="<?= base_url() ?>seguridad/perfil"><i class="fa fa-circle-o"></i> Perfiles</a></li><?php } ?>
          </ul>
        </li>
        <?php //} 
          //if($priv[12] or $priv[13]or $priv[14]){
        ?>
		    <li class="treeview">
          <a href="#">
            <i class="fa fa-hourglass-half"></i>
            <span>Batch</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($priv[12]) { ?><li><a href="mantenimientoBD.html"><i class="fa fa-circle-o"></i> Mantenimiento de BD</a></li><?php } ?>
      			<?php if ($priv[13]) { ?><li><a href="#"><i class="fa fa-circle-o"></i> Actualizacion de BD</a></li><?php } ?>
      			<?php if ($priv[14]) { ?><li><a href="#"><i class="fa fa-circle-o"></i> Contingencia</a></li><?php } ?>
          </ul>
        </li>
        <?php //} 
          if($priv[15]){
        ?>
		    <li>
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Mantenimiento de Parametros</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        <?php } ?>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
