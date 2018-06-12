  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Inicio</li>
      </ol>
    </section>
    
     <?php
        //$priv=$this->session->userdata('privilegios_usuario');
        $priv=array(true,true,true,true,
                    true,true,true,true,
                    true,true,true,true,
                    true,true,true,true,true
                    );
      ?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <?php if($this->session->flashdata('mensaje')){ ?>
        <div>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Mensaje!</h4>
            <?= $this->session->flashdata('mensaje') ?>
          </div>
        </div>
        <?php }if($this->session->flashdata('error')){ ?>
        <div>
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Error!</h4>
            <?= $this->session->flashdata('error') ?>
          </div>
        </div>
        <?php }if($priv[0]){ ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Registro de<br>Productos</h3>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url().'registrarProductos'?>" class="small-box-footer">Registrar Productos...	 <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } if($priv[1]){ ?>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Programación<br>de Despachos</h3>

            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url().'programacionDespacho'?>" class="small-box-footer">Programar Despachos...<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } if($priv[2]){ ?>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Programación<br>de instalación</h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url().'programacionInstalacion'?>" class="small-box-footer">Programar Instalación...<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } if($priv[16]){ ?>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>Programación<br>de Camiones</h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url().'programacionCamion'?>" class="small-box-footer">Programar Camion...<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } if($priv[3] and $priv[4] and $priv[5] and $priv[6]){ ?>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Consultas<br>al Sistema</h3>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="../pages/consultaDespacho.php" class="small-box-footer">Consultar... <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <?php } if($priv[7] and $priv[8] and $priv[9]){ ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h3>Reportes</h3>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Ver Reportes...	 <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } if($priv[10] and $priv[11]){ ?>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>Seguridad</h3>

            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="seguridad" class="small-box-footer">Acceder a seguridad...<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } if($priv[12] and $priv[13] and $priv[14]){ ?>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>Procesos batch</h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="../pages/mantenimientoBD.php" class="small-box-footer">Realizar procesos batch...<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } if($priv[15] ){ ?>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-">
            <div class="inner">
              <h3>Parámetros</h3>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="../pages/parametros.php" class="small-box-footer">Realizar mantenimiento de parámetros... <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <?php }?>
      </div>
      <!-- /.row -->
      <!-- Main row -->
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
