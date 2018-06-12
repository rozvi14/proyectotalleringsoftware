 <?php
    include('../header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

	
    <section class="content-header">
      <h1>
        Batch
        <small></small>
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
		
          <h3 class="box-title">Mantenimiento de BD</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<div class="row">
				<div class="col-md-9">
					 <div class="box-header">
						  <h3 class="box-title">Opciones de Mantenimiento</h3>
					</div>
				</div>
			</div>
        </div>
		
		                  <!-- radio -->
		<div class="box-body">
			<div class="row">
				
                <div class="form-group">
				<div class="col-md-9">
                  <div class="radio">
				  <div class="box-header">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Desfragmentar Disco
                    </label>
					</div>
                  </div>
                  <div class="radio">
				  <div class="box-header">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Formatear Disco
                    </label>
					</div>
                  </div>
					  
				  
                  <div class="radio">
				  <div class="box-header">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                      Realizar Backup
					  <div class="form-group">
						<select class="form-control select2" style="width: 100%;">
						  <option>Despacho</option>
						  <option>Camión</option>
						  <option>Requerimientos</option>
						</select>
					  </div>
                    </label>
					</div>
                  </div>
				  </div>
				  
				
				  
                
			</div>
			</div>
        </div>
		
		<div class="box-footer">
					     <button type="submit" class="btn btn-primary">Realizar   </button>  
						
 					     <button type="submit" class="btn btn-primary">Cancelar</button>	  
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