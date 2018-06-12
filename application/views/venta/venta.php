
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
        <li class="active">Ventas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
					  <h3 class="box-title">Buscar productos</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<?= form_open('/venta/buscarProducto')?>
					  <div class="box-body">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								  	<label for="codigoProducto">Codigo de Producto</label>
                    				<input type="text" class="form-control" id="codigoProducto" name="codigoProducto" placeholder="Ingrese codigo del Producto">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  <label for="nameProducto">Nombre de Producto</label>
								  <input type="text" class="form-control" id="nameProducto" name="nameProducto" placeholder="Ingrese Nombre del Producto">
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
		 <?php
	      if(isset($productos)){
	    ?>
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
					  <h3 class="box-title">Resultados de Busqueda de Productos</h3>
					</div>
				<!-- /.box-header -->
				<!-- form start -->
				  <div class="box-body">
					<div class="box">
							<?php
								if($productos){
							?>
						  <table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
							  <th>Nro</th>
							  <th>Codigo</th>
							  <th>Nombre</th>
							  <th>Unidad</th>
							  <th>Precio</th>
							  <th>Inventario</th>
							  <th>Nro de Productos</th>
							  <th></th>
							</tr>
							</thead>
							<tbody>
							<?php
							$i=1;
							foreach ($productos->result() as $prod) {
								$name=$i.'form';
							?>
								<tr>
									<?= form_open('venta/agregarProducto',"id=$name")?>
								  	<td><?= $i ?></td>
		                            <td><?= $prod->idProducto ?><input type="hidden" name="idProducto" value="<?= $prod->idProducto ?>"></td>
		                            <td><?= $prod->nombreProducto ?><input type="hidden" name="nombreProducto" value="<?= $prod->nombreProducto ?>"></td>
		                            <td><?= $prod->unidadProducto ?><input type="hidden" name="unidadProducto" value="<?= $prod->unidadProducto ?>"></td>
		                            <td>S/. <?= number_format($prod->precioProducto,2,',','.') ?><input type="hidden" name="precioProducto" value="<?= $prod->precioProducto ?>"></td>
		                            <td><?= $prod->existenciaProducto ?><input type="hidden" name="existenciaProducto" value="<?= $prod->existenciaProducto ?>"></td>
		                            <td><input type="number" class="form-control" id="cantidadVenta" name="cantidadVenta" placeholder="Ingrese Nro de unidades" min="0"></td>
		                            <td><button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Agregar producto</button> </td>
		                            <?= form_close()?>
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

