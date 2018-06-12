
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
			<div class="col-md-12">
				<div class="box box-primary">
				<div class="box-header with-border">
				  <h3 class="box-title">Buscar Perfiles</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form">
				  <div class="box-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="exampleInputText1">Nombre de Perfil</label>
							  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Perfil">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group"> 
							  <label for="exampleInputText1">Apellido Paterno</label>
							  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Apellido Paterno">
							</div>
						</div>
												
						
					</div>
					
					
				  </div>
				  <!-- /.box-body -->

				  <div class="box-footer">
					<button type="submit" class="btn btn-primary">Buscar</button>
					<button type="reset" class="btn btn-primary">Borrar</button>
				  </div>
				</form>
			  </div>
          <!-- /.box -->
			</div>
	   </div>
		<!--  -->
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
				<div class="box-header with-border">
				  <h3 class="box-title">Resultados de Busqueda de Perfiles</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form">
				  <div class="box-body">
					<div class="box">
						
						  <table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
							  <th>Nro</th>
							  <th>Perfil</th>
							  <th>Estado</th>
							  <th></th>
							  <th></th>
							</tr>
							</thead>
							<tbody>
							<tr>
							  <td>1</td>
							  <td>Administrador</td>
							  <td>Activo</td>
							  <td><a href="#"><i class="fa fa-edit"></i> Modificar</a></td>
							  <td><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>Despachador</td>
							  <td>Activo</td>
							  <td><a href="#"><i class="fa fa-edit"></i> Modificar</a></td>
							  <td><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></td>
							</tr>
							<tr>
							  <td>3</td>
							  <td>Usuario</td>
							  <td>Activo</td>
							  <td><a href="#"><i class="fa fa-edit"></i> Modificar</a></td>
							  <td><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></td>
							</tr>
							<tr>
							  <td>4</td>
							  <td>Cliente</td>
							  <td>Activo</td>
							  <td><a href="#"><i class="fa fa-edit"></i> Modificar</a></td>
							  <td><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></td>
							</tr>
							</tfoot>
						  </table>
						
					  </div>
				  </div>
				  <!-- /.box-body -->

				  <div class="box-footer">
					<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Perfil</button>
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
				  <h3 class="box-title">Agregar o Modificar Perfil</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form">
				  <div class="box-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="exampleInputText1">Nombre de Perfil</label>
							  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Perfil">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Estado</label>
								<select class="form-control select2" style="width: 100%;">
								  <option selected="selected">Activo</option>
								  <option>Inactivo</option>
								</select>
							  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label>Privilegios</label>
							<select class="form-control select2" multiple="multiple" data-placeholder="Seleccione los privilegios" style="width: 100%;">
							  <option>Acceso a Registro de Producto</option>
							  <option>Acceso a Programacion de Despachos</option>
							  <option>Acceso a Programación de Instalación</option>
							  <option>Acceso a Consultas</option>
							  <option>Acceso Reportes</option>
							  <option>Acceso a reportes</option>
							  <option>Acceso a bacth</option>
							</select>
						  </div>
						</div>
					</div>
					
					
				  </div>
				  <!-- /.box-body -->

				  <div class="box-footer">
					<button type="submit" class="btn btn-primary">Crear Usuario</button>
					<button type="reset" class="btn btn-primary">Borrar</button>
				  </div>
				</form>
			  </div>
          <!-- /.box -->
			</div>
	   </div>
		<!--  -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>
  $(function () {
	//Initialize Select2 Elements
    $(".select2").select2();
	
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  //datepicker
  $('#datepicker').datepicker({
      autoclose: true
    });
</script>
