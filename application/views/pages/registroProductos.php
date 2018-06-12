 <?php
    include('../header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registro de Productos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Seguridad</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
		  <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Fecha</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-3">
					<label>Dia</label>
                  <input type="text" class="form-control" placeholder="14" disabled>
                </div>
                <div class="col-xs-4">
					<label>Mes</label>
                  <input type="text" class="form-control" placeholder="Octubre" disabled>
                </div>
                <div class="col-xs-5">
					<label>Año</label>
                  <input type="text" class="form-control" placeholder="2016" disabled>
                </div>
              </div>
            </div>
          </div>		
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Camion</h3>
            </div>
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Codigo</label>
                  <input type="text" class="form-control" placeholder="Ingrese Codigo">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Matricula</label>
                  <input type="text" class="form-control" placeholder="A1A-001" disabled>
                </div>
				<div class="form-group">
                  <label>Estado</label>
                  <select class="form-control" disabled>
                    <option>Disponible</option>
                    <option>Programado</option>
                    <option>En Despacho</option>
                    <option>En Mantenimiento</option>
                    <option>De Baja</option>
                  </select>
                </div>
              </div>
            </form>
          </div>

        </div>
        <!-- right column -->
        <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Despachos</h3>
            </div>
            <div class="box-body">
              <form role="form">
                <div class="form-group">
                  <label>Despachos Programados</label>
                  <select multiple class="form-control">
                    <option>70089</option>
                    <option>44011</option>
                    <option>31456</option>
                    <option>54678</option>
                    <option>56732</option>
                  </select>
				  <span class="help-block">Capacidad Sobrante: 2 Toneladas</span>
                </div>
				<div class="form-group">
                  <label>Seleccionar Orden de Venta</label>
                  <select class="form-control">
                    <option>00523</option>
                    <option>00524</option>
                    <option>00525</option>
                    <option>00526</option>
                    <option>00527</option>
                  </select>
                </div>
              </form>
            </div>
			</div>
			<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Producto</h3>
            </div>
				<form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Codigo</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Ingrese Codigo">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
   <?php
    include('../footer.php');
?>