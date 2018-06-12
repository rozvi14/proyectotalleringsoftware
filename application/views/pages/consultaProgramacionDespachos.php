 <?php
    include('../header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consultar Programacion de Camiones
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
                  <input type="text" class="form-control" placeholder="dd">
                </div>
                <div class="col-xs-4">
					<label>Mes</label>
                  <input type="text" class="form-control" placeholder="mm">
                </div>
                <div class="col-xs-5">
					<label>Año</label>
                  <input type="text" class="form-control" placeholder="aaaa">
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
                  <label>Estado</label>
                  <select class="form-control" disabled>
                    <option>Programado</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
				  <div class="form-group">
                  <label>Orden de Despacho</label>
                  <select class="form-control" >
                    <option>50084645</option>
                    <option>3005411</option>
                    <option>4363412</option>
                    <option>6781245</option>
                  </select>
                </div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Consultar</button>
					<button type="reset" class="btn btn-primary">Borrar</button>             
				</div>
                </div>
              </div>
            </form>
          </div>

        </div>
        <!-- right column -->
		<div class="col-md-6">
		<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Ruta</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Calle</th>
                  <th>Inicio</th>
                  <th>Fin</th>
                  <th>Distrito</th>
                </tr>
                <tr>
                  <td>Av. 28 de Julio</td>
                  <td>15</td>
                  <td>1</td>
                  <td>Cercado</td>
                </tr>
                <tr>
                  <td>Av. Abancay</td>
                  <td>12</td>
                  <td>1</td>
                  <td>Cercado</td>
                </tr>
                <tr>
                  <td>Acho</td>
                  <td>1</td>
                  <td>10</td>
                  <td>Rimac</td>
                </tr>
				<tr>
                  <td>Av. Proceres</td>
                  <td>1</td>
                  <td>18</td>
                  <td>SJL</td>
                </tr>
				<tr>
                  <td>Av. Micaela Bastidas</td>
                  <td>2</td>
                  <td>20</td>
                  <td>Comas</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          <!-- /.box -->
        </div>
      </div>
	  </div>
	  <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Despacho</h3>
            </div>
			<div class="box-body">
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
				</div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Codgio</th>
                  <th>Nombre</th>
                  <th>Cantidad</th>
                  <th>Medida</th>
				  <th>Estado</th>
                </tr>
                <tr>
                  <td>0015</td>
                  <td>Clavo</td>
                  <td>100</td>
                  <td>unidad</td>
				  <td>Registrado</td>
                </tr>
                <tr>
                  <td>0084</td>
                  <td>Cemento</td>
                  <td>3</td>
                  <td>bolsa</td>
				  <td>Registrado</td>
                </tr>
                <tr>
                  <td>0063</td>
                  <td>Taladro</td>
                  <td>1</td>
                  <td>unidad</td>
				  <td>Registrado</td>
                </tr>
				<tr>
                  <td>0074</td>
                  <td>Ladrillos</td>
                  <td>40</td>
                  <td>unidad</td>
				  <td>Registrado</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
	 </div>
  <!-- /.content-wrapper -->
   <?php
    include('../footer.php');
?>