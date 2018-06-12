  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consultar Despacho
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
              <h3 class="box-title">Despacho</h3>
            </div>
            <?= form_open('consultas/consultarDespacho')?>
              <div class="box-body">
                <div class="col-md-4">
				          <div class="form-group">
                    <label for="idVenta">Codigo de Despacho o Venta</label>
                    <input type="text" class="form-control" name="idVenta" placeholder="Ingrese Codigo de Despacho">
                  </div>
				        </div>
                <div class="col-md-4">
  				        <div class="form-group">
                    <label for="clienteVenta">Cliente de Despacho</label>
                    <input type="text" class="form-control" id="clienteVenta" name="clienteVenta" placeholder="Ingrese codigo de Cliente" >
                  </div>
        				</div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="progDespachoVenta">Programacion de Despacho</label>
                    <input type="text" class="form-control" id="progDespachoVenta" name="progDespachoVenta" placeholder="Ingrese Codigo de Programacion" >
                  </div>
                </div>
        				<div class="col-md-4">
        				  <div class="form-group">
                    <label for="fechaVenta">Fecha de Venta</label>
                    <input type="date" class="form-control" id="fechaVenta" name="fechaVenta" >
                  </div>
        				</div>
        				<div class="col-md-4">
                  <div class="form-group">
                    <label for="fechaEntregaVenta">Fecha de Entrega</label>
                    <input type="date" class="form-control" id="fechaEntregaVenta" name="fechaEntregaVenta" >
                  </div>
                </div>
        				<div class="col-md-4">
          				<div class="form-group">
                  <label>Estado de Despacho</label>
                  <?php 
                    if($estados){
                  ?>
                  <select class="form-control select2" style="width: 100%;" name="camionProgCamion">
                    <?php
                      foreach ($estados->result() as $estado) {
                        ?>
                        <option value="<?= $estado->id_valor_parametro ?>"><?= $estado->valor_parametro ?></option>
                    <?php
                      }
                    ?>
                    
                  </select>
                  <?php
                    }else{
                      echo "Error BD";
                    }
                  ?>
                </div>
        				</div>
          							
              </div>
            
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Consultar</button>
              <button type="reset" class="btn btn-primary">Borrar</button>             
            </div>
            <?= form_close()?>
          </div>
          
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
                <th>Nro Venta</th>
                <th>Cliente</th>
                <th>Cod Programacion</th>
                <th>Fecha de Venta</th>
                <th>Fecha de Entrega</th>
                <th>Estado</th>
              </tr>
              </thead>
              <?php
                $i=1;
                foreach ($ventas->result() as $venta) {
              ?>
              <tbody>
              <tr>
                <td><?= $i ?></td>
                <td><?= $venta->idVenta ?></td>
                <td><?= $venta->clienteVenta ?></td>
                <td><?= $venta->progDespachoVenta ?></td>
                <td><?= $venta->fechaVenta ?></td>
                <td><?= $venta->fechaEntregaVenta ?></td>
                <td><?= $venta->estadoVenta ?></td>
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


	  <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Observaciones del Despacho</h3>
            </div>
	  <div class="box-body">
              <form role="form">
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Ninguna" disabled></textarea>
                </div>
			  </form>
            </div>
			</div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  