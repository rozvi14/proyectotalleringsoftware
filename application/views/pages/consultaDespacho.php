 <?php
    include('../header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consultar Despacho
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Seguridad</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">		
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Despacho</h3>
            </div>
            <form role="form">
              <div class="box-body">
                <div class="col-xs-4">
				<div class="form-group">
                  <label for="exampleInputEmail1">Codigo</label>
                  <input type="text" class="form-control" placeholder="Ingrese Codigo">
                </div>
				</div>
                <div class="col-xs-4">
				<div class="form-group">
                  <label for="exampleInputPassword1">Fecha de Salida</label>
                  <input type="text" class="form-control" placeholder="18/10/16" disabled>
                </div>
				</div>
				<div class="col-xs-4">
				<div class="form-group">
                  <label for="exampleInputPassword1">Hora de Salida</label>
                  <input type="text" class="form-control" placeholder="03:00 pm" disabled>
                </div>
				</div>
				<div class="col-xs-4">
				<div class="form-group">
                  <label for="exampleInputPassword1">Tiempo de Llegada</label>
                  <input type="text" class="form-control" placeholder="5 hrs" disabled>
                </div>
				</div>
				<div class="col-xs-4">
				<div class="form-group">
                  <label>Estado de Despacho</label>
                  <select class="form-control" disabled>
					<option>Reaquerimiento de Instalación</option>
                    <option>Programado</option>
                    <option>Entregado</option>
                    <option>Devuelto</option>
                  </select>
                </div>
				</div>
				<div class="col-xs-4">
				<div class="form-group">
                  <label for="exampleInputPassword1">Numero de Ordenes</label>
                  <input type="text" class="form-control" placeholder="5" disabled>
                </div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Consultar</button>
					<button type="reset" class="btn btn-primary">Borrar</button>             
				</div>			
              </div>
            </form>
          </div>

        </div>
      </div>
	  <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Detalles del Requerimiento</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 60px;">
                  <input type="text" class="form-control pull-right" placeholder="001235" disabled>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Numero</th>
                  <th>Detalle Venta</th>
                  <th>Material</th>
                  <th>Cantidad</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>Clavos</td>
                  <td>50</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>2</td>
                  <td>Alambres</td>
                  <td>20</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>10</td>
                  <td>Destornillador</td>
                  <td>10</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
	  <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Observaciones del Despacho</h3>
            </div>
	  <div class="box-body">
              <form role="form">
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Ninguna" disabled></textarea>
                </div>
			  </form>
            </div>
			</div>
    </section>
  </div>
  <!-- /.content-wrapper -->
   <?php
    include('../footer.php');
?>