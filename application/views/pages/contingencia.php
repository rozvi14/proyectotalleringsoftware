 <?php
    include('../header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Batch
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Contingencia</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
		 
        <div class="box-body">
		<div class="col-md-5">
		
			<div class="box-header">
			  Elegir tarea
						<div class="form-group">
							<select class="form-control select2" style="width: 100%;">
							  <option>Restaurar tabla</option>
							  <option>Restaurar base de datos</option>
							  <option>Restaurar vista</option>
							  <option>Restaurar procedure</option>
							  <option>Restaurar constraint</option>
							  <option>Restaurar index</option>
							</select>
						 </div>
			</div>
			
			<div class="box-header">
			  Seleccionar objeto
						<div class="form-group">
							<select class="form-control select2" style="width: 100%;">
							  
							</select>
						 </div>
			</div>
			
			
			<div class="col-md-30">
			
				<form role="form">
				  <div class="box-body">
					<div class="box">
						
						  <table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
							  <th>Nro</th>
							  <th>Nombre</th>
							  <th>Tipo</th>
							  <th>Fecha_Ult_Restauracion</th>
							  <th>Fecha_Ult_Bo</th>
							  <th>Estado</th>
							  
							</tr>
							</thead>
							<tbody>
							<tr>
							  <td>1</td>
							  <td>Camión</td>
							  <td>Tabla</td>
							  <td>12/05/16</td>
							  <td>15/05/16</td>
							  <td>Activo</td>
							  
							</tr>
							<tr>
							  <td>2</td>
							  <td>USP_Inser</td>
							  <td>Procedure</td>
							  <td>18/07/16</td>
							  <td>22/07/16</td>
							  <td>Activo</td>
							</tr>
							<tr>
							  <td>3</td>
							  <td>V_Cltes</td>
							  <td>Vista</td>
							  <td>05/08/16</td>
							  <td>15/08/16</td>
							  <td>Activo</td>
							</tr>
							<tr>
							  <td>4</td>
							  <td>Indx_Id</td>
							  <td>Index</td>
							  <td>04/09/16</td>
							  <td>11/09/16</td>
							  <td>Activo</td>
							</tr>
							</tfoot>
						  </table>
						
					  </div>
				  </div>
				  <!-- /.box-body -->

				  
				</form>
			
		
		</div>
		</div>
		</div>
        
        <!-- /.box-footer-->
      </div>
	 
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
    include('../footer.php');
?>