
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Seguridad
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
					  <h3 class="box-title">Buscar Usuarios</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<?= form_open('/seguridad/buscarusuario')?>
					  <div class="box-body">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								  <label for="nombre">Nombres</label>
								  <input type="text" class="form-control" id="nombre" name="nombres" placeholder="Ingrese Nombres">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  <label for="apellidopat">Apellido Paterno</label>
								  <input type="text" class="form-control" id="apellidopat" name="apellidopat" placeholder="Ingrese Apellido Paterno">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  <label for="apellidomat">Apellido Materno</label>
								  <input type="text" class="form-control" id="apellidomat" placeholder="Ingrese Apellido Materno">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Tipo de Documento</label>
									<select class="form-control select2" style="width: 100%;" name="tipdocumento">
									   <?php 
									  	if($documentos){
									  		foreach ($documentos->result() as $doc) {
									  		
									  ?>
									  		<option value="<?= $doc->id_valor_parametro?>"><?= $doc->valor_parametro ?></option>
									  <?php
									  		}
									  	}
									  ?>
									</select>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  <label for="nrodocumento">Numero de Documento</label>
								  <input type="text" class="form-control" id="nrodocumento" name="nrodocumento" placeholder="Ingrese Numero de Doc.">
								</div>
							</div>
							
							
						</div>
						
						
					  </div>
					  <!-- /.box-body -->

					  <div class="box-footer">
						<button type="submit" class="btn btn-primary">Buscar</button>
						<button type="reset" class="btn btn-primary">Borrar</button>
					  </div>
					<?= form_close()?>
			  </div>
          <!-- /.box -->
			</div>
	   </div>
		<!--  -->
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
				<div class="box-header with-border">
				  <h3 class="box-title">Resultados de Busqueda de Usuarios</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form">
				  <div class="box-body">
					<div class="box">
							<?php
							if(isset($usuarios)){
								if($usuarios){
							?>
						  <table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
							  <th>Nro</th>
							  <th>Nombres</th>
							  <th>Apellidos</th>
							  <th>Documento</th>
							  <th>Perfil</th>
							  <th></th>
							  <th></th>
							</tr>
							</thead>
							<tbody>
							<?php
							$i=1;
							foreach ($usuarios->result() as $usuario) {
							?>
								<tr>
								  <td><?= $i ?></td>
								  <td><?= $usuario->nombres_usuario ?></td>
								  <td><?= $usuario->apellidoPat_usuario.' '. $usuario->apellidoMat_usuario ?></td>
								  <td><?= $usuario->tipDoc_usuario.' - '.$usuario->nroDocumento_usuario ?></td>
								  <td><?= $usuario->perfil_usuario ?></td>
								  <td><a href="seguridad/modificarusuario/<?= $usuario->idUsuario ?>"><i class="fa fa-edit"></i> Modificar</a></td>
								  <td><a href="seguridad/eliminarusuario/<?= $usuario->idUsuario ?>"><i class="fa fa-trash-o"></i> Eliminar</a></td>
								</tr>
							<?php
								$i++;
								}
							}else{
								?>
								  <p>No hay Usuarios</p>
								<?php
							}
							?>
							
							
							</tfoot>
						  </table>
							<?php
							}else{
								?>
								<p>"ERROR EN LA BD"</p>
							<?php
							}
							?>
					  </div>
				  </div>
				  <!-- /.box-body -->

				  <div class="box-footer">
					<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Usuario</button>
				  </div>
				</form>
			  </div>
          <!-- /.box -->
			</div>
	   </div>
		<!--  -->
		<div class="row">
			<div class="col-md-12">
				<div class="box box-success">
				<div class="box-header with-border">
				  <h3 class="box-title">Agregar o Modificar Usuario</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<?= form_open('/seguridad/nuevousuario')?>
				  <div class="box-body">
						<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="nombre">Nombres</label>
							  <input type="text" class="form-control" id="nombre" name="nombres" placeholder="Ingrese Nombres">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="apellidopat">Apellido Paterno</label>
							  <input type="text" class="form-control" id="apellidopat" name="apellidopat" placeholder="Ingrese Apellido Paterno">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="apellidomat">Apellido Materno</label>
							  <input type="text" class="form-control" id="apellidomat" name="apellidomat" placeholder="Ingrese Apellido Materno">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Tipo de Documento</label>
								<select class="form-control select2" style="width: 100%;" name="tipdocumento">
								  <?php 
								  	if($documentos){
								  		foreach ($documentos->result() as $doc) {
								  		
								  ?>
								  		<option value="<?= $doc->id_valor_parametro?>"><?= $doc->valor_parametro ?></option>
								  <?php
								  		}
								  	}
								  ?>
								</select>
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="nrodocumento">Numero de Documento</label>
							  <input type="text" class="form-control" id="nrodocumento" name="nrodocumento" placeholder="Ingrese Numero de Doc.">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label>Fecha de Nacimiento:</label>

							<div class="input-group date">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="date" class="form-control pull-right" id="datepicker" name="fechanac">
							</div>
							<!-- /.input group -->
						  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="direccion">Direccion</label>
							  <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese Direccion">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="telefonoUsuario">Telefono</label>
							  <input type="text" class="form-control" id="telefonoUsuario" name="telefonoUsuario" placeholder="Ingrese Telefono">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="email">E-mail</label>
							  <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese Email">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Perfil</label>
								<?php 
									if($perfiles){
								?>
								<select class="form-control select2" style="width: 100%;" name="perfil">
								  <?php
								  	foreach ($perfiles->result() as $perfil) {
								  		?>
								  		<option value="<?= $perfil->idPerfil ?>"><?= $perfil->nombrePerfil ?></option>
								  <?php
								  	}
								  ?>
								  
								</select>
								<?php
									}
								?>
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="pass">Password</label>
							  <input type="password" class="form-control" id="pass" name="password" placeholder="Ingrese Contrasenia">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="reppassword">Repetir Password</label>
							  <input type="password" class="form-control" id="reppassword" name="reppassword" placeholder="Repita la Contrasenia">
							</div>
						</div>
					</div>
					
					
				  </div>
				  <!-- /.box-body -->

				  <div class="box-footer">
					<button type="submit" class="btn btn-primary">Crear Usuario</button>
					<button type="reset" class="btn btn-primary">Borrar</button>
				  </div>


				  <input type="hidden" name="tipregistro" value="1">
				<?= form_close() ?>
			  </div>
          <!-- /.box -->
			</div>
	   </div>
		<!--  -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

