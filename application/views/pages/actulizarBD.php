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
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active"> Actualizar la BD</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
				<div class="box-header with-border">
				  <h3 class="box-title">Actualización de BD</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form">
				  <div class="box-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="exampleInputText1">Opcion de Actualización</label><br>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>
								  <input type="radio" name="r3" class="flat-red" checked>
								  Archivo
								</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<select class="form-control select2" style="width: 100%;">
								  <option>Excel</option>
								  <option>Text</option>
								  <option>Access</option>
								  <option>Reporte</option>
								</select>
							 </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>
								  <input type="radio" name="r3" class="flat-red" checked>
								  Online
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="exampleInputFile">Archivo..</label>
							  <input type="file" id="exampleInputFile">

							  <p class="help-block">Seleccione archivo para actualización</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Seleccione BD</label>
								<select class="form-control select2" style="width: 100%;">
								  <option selected="selected">DB1</option>
								  <option>DB2</option>
								</select>
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Seleccione Tabla</label>
								<select class="form-control select2" style="width: 100%;">
								  <option selected="selected">Camion</option>
								  <option>Cliente</option>
								  <option>Despacho</option>
								</select>
							  </div>
						</div>
					</div>
					
				  </div>
				  <!-- /.box-body -->

				  <div class="box-footer">
					<button type="submit" class="btn btn-primary">Aceptar</button>
					<button type="reset" class="btn btn-primary">Cancelar</button>
				  </div>
				</form>
			  </div>
          <!-- /.box -->
			</div>
	   </div>
		<!--  -->
      <!-- Default box -->
      
      
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
    include('../footer.php');
?>