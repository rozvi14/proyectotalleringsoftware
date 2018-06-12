 <?php
    include('../header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PROGRAMACIÓN DE DESPACHOS
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
        
      <div class="box-body">
		<div class="col-md-5">
			<div class="box-header">
			
				
				<h5>Fecha </h5>
				
				<div class="col-md-3">
				<h5>Día:  </h5>
				<input type="text" class="form-control" id="exampleInputEmail1" >
				
				
				
				<h5>Mes:  </h5>
				<input type="text" class="form-control" id="exampleInputEmail1" >
				
			
				<h5>Año:  </h5>
				<input type="text" class="form-control" id="exampleInputEmail1" >
				
				
				</div>
				
				
			</div>
			
			<div class="box-header">
			
				
				<h5>Hora de Salida </h5>
				<input type="text" class="form-control" id="exampleInputEmail1" >
			
			</div>
			
			
			 
			
			<div class="box-header">
			   <h5>Camión    </h5>
			   
						<div class="form-group">
							<select class="form-control select2" style="width: 100%;">
							 
							</select>
						 </div>
			</div>
			
			<div class="box-header">
			   <h5>Chofer   </h5>
			   
						<div class="form-group">
							<select class="form-control select2" style="width: 100%;">
							 
							</select>
						 </div>
			</div>
			
			<div class="box-header">
			   <h5>Despachador   </h5>
			   
						<div class="form-group">
							<select class="form-control select2" style="width: 100%;">
							 
							</select>
						 </div>
			</div>
			
				<form role="form">
				  <div class="box-body">
					<div class="box">
						
						  <table id="example2" class="table table-bordered table-hover" >
							<thead>
							<tr>
							  <th>Código</th>
							  <th>Nombre</th>
							  <th>Cantidad</th>
							  <th>Medida</th>							  
							</tr>
							<thead>
							
							
							<tbody>
							<tr>
							  <td>0015</td>
							  <td>Clavos</td>
							  <td>100</td>
							  <td>unidad</td>							  
							</tr>
							
							<tr>
							  <td>0084</td>
							  <td>Cemento</td>
							  <td>3</td>
							  <td>bolsa</td>

							</tr>
							<tr>
							  <td>0083</td>
							  <td>Taladro</td>
							  <td>1</td>
							  <td>unidad</td>

							</tr>
							<tr>
							  <td>0074</td>
							  <td>Ladrillo</td>
							  <td>40</td>
							  <td>unidad</td>

							</tr>
							</tfoot>
						  </table>
						
					  </div>
				  </div>
				  <!-- /.box-body -->

				</form>  
							
			
        
		
			<div class="box-footer">
					     <button type="submit" class="btn btn-primary">Registrar   </button>  
							  
			</div>
		</div>
		</div>
		
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
   <?php
    include('../footer.php');
?>