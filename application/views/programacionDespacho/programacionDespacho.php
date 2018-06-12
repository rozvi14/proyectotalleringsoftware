
  <!-- Content Wrapper. Contains page content -->
  <?php

  ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="content-header">
      <h1>
        Programación de Despachos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Programación de Despachos </li>
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
				  <h3 class="box-title">Datos del Despacho</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
					<?php
						if($tipoForm==1) echo form_open('programacionDespacho/buscarFecha');
						else echo form_open('programacionDespacho/nuevaProgramacion'); ?>
				  <div class="box-body">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							  <label for="fechaSalidaDespacho">Fecha de Despacho</label>
							  <input type="date" class="form-control" id="fechaSalidaDespacho" name="fechaSalidaDespacho" placeholder="Ingrese Día" value="<?php if(isset($fecha)) echo $fecha;?>">
							</div>
						</div>
						<?php if($tipoForm!=1){?>
						<div class="col-md-3">
							<div class="form-group">
							  <label for="horaSalidaDespacho">Hora de Salida: </label>
							  <input type="time" class="form-control" id="horaSalidaDespacho" name="horaSalidaDespacho" placeholder="Ingrese Hora de Salida ">
							</div>
						</div>
						<?php }if(isset($progCamiones)){?>
						<div class="col-md-3">
							<div class="form-group">
							  <label for="progCamionProgDespacho">Programacion de Camiones: </label>
							  <?php 
										if($progCamiones){
									?>
									<select class="form-control select2" style="width: 100%;" name="progCamionProgDespacho">
									  <?php
									  	foreach ($progCamiones->result() as $prog) {
									  		?>
									  		<option value="<?= $prog->idProgCamion ?>"><?= $prog->camionProgCamion.' '.$prog->choferProgCamion ?></option>
									  <?php
									  	}
									  ?>
									  
									</select>
									<?php
										}else{
											echo "<br>No existe programciones para esa fecha";
										}
									?>
							</div>
						</div>
							<?php } 
							if(isset($despachadores)){
							?>
							<div class="col-md-3">
								<div class="form-group">
									<label for="despachadorDespacho">Despachador</label>
									<?php 
										if($despachadores){
									?>
									<select class="form-control select2" style="width: 100%;" name="despachadorDespacho">
									  <?php
									  	foreach ($despachadores->result() as $despachador) {
									  		?>
									  		<option value="<?= $despachador->idUsuario ?>"><?= $despachador->nombres_Usuario.' '.$despachador->apellidoPat_usuario ?></option>
									  <?php
									  	}
									  ?>
									  
									</select>
									<?php
										}else{
											echo "<br>No hay despachadores disponibles para esa fecha";
										}
									?>
								  </div>
							</div>
							<?php }if($tipoForm!=1){?>
							<div class="col-md-12">
								<div class="form-group">
								  <label for="descripcionProgDespacho">Descripcion de la Programacion: </label>
								  <textarea class="form-control" rows="2" name="descripcionProgDespacho" placeholder="Ingrese descripcion de la programacion de despachos"></textarea>
								  
								</div>
							</div>						
							<?php } ?>
					</div>
					
				  </div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary"><?php if($tipoForm==1) echo "Buscar Fecha"; else echo "Registrar Programacion";?></button>
					<button type="reset" class="btn btn-primary">Borrar   </button> 
				  </div>
				  </form>
			  </div>
          <!-- /.box -->
			</div>
	   </div>
	   
	   <?php
	   	if(isset($ventas)){
	   ?>
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
				<div class="box-header with-border">
				  <h3 class="box-title">Detalle de Despacho</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form">
				  <div class="box-body">
					<div class="box">
						 	<?php 
						 		if($ventas){
						 	?>
						  <table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
							  <th>Nro</th>
							  <th>Cliente</th>
							  <th>Fecha de Venta</th>
							  <th>Hora de Entrega</th>
							</tr>
							</thead>
							<?php
								$i=1;
								foreach ($ventas->result() as $venta) {
							?>
							<tbody>
							<tr>
							  <td><?= $i ?></td>
							  <td><?= $venta->clienteVenta ?></td>
							  <td><?= $venta->fechaVenta ?></td>
							  <td><?= $venta->horaEntregaVenta ?></td>
							</tr>
							
							</tbody>
						 
							<?php
								$i++;
								}
							}else{
								echo "No hay ventas en esa fecha";
							}
							?>
							 </table>
					  </div>
				  </div>
				  <!-- /.box-body -->

				  
				</form>
			  </div>
          <!-- /.box -->
			</div>
	   </div>	   
    	<?php } ?>
	</section>
    <!-- /.content -->
  </div>	   
