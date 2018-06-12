 <?php
    include('../header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporte Despachos
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
                  <label for="exampleInputPassword1">Fecha de Salida</label>
                  <input type="text" class="form-control">
                </div>
				</div>
				<div class="col-xs-4">
				<div class="form-group">
                  <label for="exampleInputPassword1">Hora de Salida</label>
                  <input type="text" class="form-control">
                </div>
				</div>				
              </div>
			  <div class="box-footer">
					<button type="submit" class="btn btn-primary">Reporte</button>
					<button type="reset" class="btn btn-primary">Borrar</button>             
				</div>
            </form>
          </div>

        </div>
      </div>
	  <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Reporte</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>nroOrden</th>
                  <th>fechaSalida</th>
                  <th>horaSalida</th>
                  <th>estado</th>
                </tr>
                <tr>
                  <td>12346</td>
                  <td>17/10/16</td>
                  <td>4:00pm</td>
                  <td>programado</td>
                </tr>
                <tr>
                  <td>234567</td>
                  <td>17/10/16</td>
                  <td>4:00pm</td>
                  <td>recibido</td>
                </tr>
                <tr>
                  <td>334678</td>
                  <td>17/10/16</td>
                  <td>4:00pm</td>
                  <td>reclamo</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
	   <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Estadistico</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart_1" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
	  </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

<script>
  $(function () {
    "use strict";


    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart_1',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a","#FFFF6F"],
      data: [
        {label: "Programado", value: 12000},
        {label: "Recibido", value: 3000},
        {label: "Requiere Instalacion", value: 2000},
		{label: "Reclamo", value: 5000}
      ],
      hideHover: 'auto'
    });
    
  });
</script>

 <?php
    include('../footer.php');
?>