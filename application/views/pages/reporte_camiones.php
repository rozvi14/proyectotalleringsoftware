 <?php
    include('../header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporte Camiones
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
              <h3 class="box-title">Fecha</h3>
            </div>
            <form role="form">
              <div class="box-body">
              <div class="row">
                <div class="col-xs-4">
					<label>Dia</label>
                  <input type="text" class="form-control" placeholder="19" disabled>
                </div>
                <div class="col-xs-4">
					<label>Mes</label>
                  <input type="text" class="form-control" placeholder="Octubre" disabled>
                </div>
                <div class="col-xs-4">
					<label>Año</label>
                  <input type="text" class="form-control" placeholder="2016" disabled>
                </div>
              </div>
            </div>
			  <div class="box-footer">
					<button type="submit" class="btn btn-primary">Reporte</button>            
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
                  <th>codCamion</th>
                  <th>Matricula</th>
                  <th>Capacidad Disponile</th>
				  <th>Estado</th>
                </tr>
                <tr>
                  <td>12346</td>
                  <td>A-04-1234</td>
                  <td>1 tonelada</td>
                  <td>Programado</td>
                </tr>
                <tr>
                  <td>234567</td>
                  <td>B-05-3456</td>
                  <td>10 toneladas</td>
                  <td>Disponible</td>
                </tr>
                <tr>
                  <td>334678</td>
                  <td>C-11_6796</td>
                  <td>5 toneladas</td>
                  <td>En Despacho</td>
                </tr>
				<tr>
                  <td>456981</td>
                  <td>A-13-1000</td>
                  <td>15 toneladas</td>
                  <td>Mantenimiento</td>
                </tr>
				<tr>
                  <td>987643</td>
                  <td>A-21-2000</td>
                  <td>5 toneladas</td>
                  <td>De Baja</td>
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
        {label: "Disponibles", value: 12000},
        {label: "Programados", value: 3000},
        {label: "En Despacho", value: 2000},
		{label: "Mantenimiento", value: 5000}
      ],
      hideHover: 'auto'
    });
    
  });
</script>
  <?php
    include('../footer.php');
?>