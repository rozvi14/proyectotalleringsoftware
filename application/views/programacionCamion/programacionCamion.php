
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Programacion de Camiones
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Seguridad</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

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
		        <?php } ?>
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
					  <h3 class="box-title">Registrar Programacion</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<?php
						if($tipoForm==1) echo form_open('programacionCamion/buscarFecha');
						else echo form_open('/programacionCamion/registrarProgramacion'); ?>
					  <div class="box-body">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								  <label for="fechaSalidaProgCamion">Fecha de Salida de Camion</label>
								  <input type="date" class="form-control" id="fechaSalidaProgCamion" name="fechaSalidaProgCamion" placeholder="Ingrese Día" value="<?php if($tipoForm!=1) echo $fecha; ?>">
								</div>
							</div>
							<?php if($tipoForm!=1){?>
							<div class="col-md-4">
								<div class="form-group">
								  	<label for="camionProgCamion">Seleccione camion disponible</label>
                    				<?php 
										if($camiones){
									?>
									<select class="form-control select2" style="width: 100%;" name="camionProgCamion">
									  <?php
									  	foreach ($camiones->result() as $camion) {
									  		?>
									  		<option value="<?= $camion->idCamion ?>"><?= $camion->matriculaCamion ?></option>
									  <?php
									  	}
									  ?>
									  
									</select>
									<?php
										}else{
											echo "No hay Camiones disponibles";
										}
									?>
								</div>
							</div>
							<?php }if($tipoForm!=1){?>
							<div class="col-md-4">
								<div class="form-group">
								  <label for="choferProgCamion">Chofer Disponible</label>
								  <?php 
										if($choferes){
									?>
									<select class="form-control select2" style="width: 100%;" name="choferProgCamion">
									  <?php
									  	foreach ($choferes->result() as $chofer) {
									  		?>
									  		<option value="<?= $chofer->idUsuario ?>"><?= $chofer->nombres_Usuario.' '.$chofer->apellidoPat_usuario ?></option>
									  <?php
									  	}
									  ?>
									  
									</select>
									<?php
										}else{
											echo "<br>No hay choferes disponibles";
										}
									?>
								</div>
							</div>
							<?php }if($tipoForm!=1){?>
							<div class="col-md-12">
								<div class="form-group">
								  <label for="descripcionProgCamion">Descripcion de Salida de Camion</label>
								  <textarea class="form-control" rows="2" placeholder="Ingrese descripcion de la programacion" name="descripcionProgCamion"></textarea>
								</div>
							</div>
							<?php } ?>
						</div>
						
						
					  </div>
					  <!-- /.box-body -->

					  <div class="box-footer">
						<button type="submit" class="btn btn-primary"><?php if($tipoForm==1) echo "Buscar Fecha"; else echo "Registrar Programacion";?></button>
						<button type="reset" class="btn btn-primary">Borrar</button>
					  </div>
					<?= form_close()?>
			  </div>
          <!-- /.box -->
			</div>
	   </div>
		<!--  -->
		 <?php
	      if(isset($progCamiones)){
	    ?>
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
					  <h3 class="box-title">Programaciones de Camiones</h3>
					</div>
				<!-- /.box-header -->
				<!-- form start -->
				  <div class="box-body">
					<div class="box">
							<?php
								if($progCamiones){
							?>
						  <table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
							  <th>Nro</th>
							  <th>Camion</th>
							  <th>Chofer</th>
							  <th>Fecha de Salida</th>
							  <th>Fecha Programada</th>
							  <th></th>
							</tr>
							</thead>
							<tbody>
							<?php
							$i=1;
							foreach ($progCamiones->result() as $prog) {
								$name=$i.'form';
							?>
								<tr>
									<td><?= $i ?></td>
									<td><?= $prog->camionProgCamion ?></td>
									<td><?= $prog->choferProgCamion ?></td>
									<td><?= $prog->fechaSalidaProgCamion ?></td>
									<td><?= $prog->fechaProgCamion ?></td>
									<td></td>
		                            
								</tr>
							<?php
								$i++;
								}
							?>
							
							
							</tbody>
						  </table>
							<?php
							}else{
								?>
								<p>"No hay productos"</p>
							<?php
							}
							?>
					  </div>
				  </div>
				  <!-- /.box-body -->

			  </div>
          <!-- /.box -->
			</div>
	   </div>
	   <?php
	      }
	    ?>
		<!--  -->
		
		<!--  -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

