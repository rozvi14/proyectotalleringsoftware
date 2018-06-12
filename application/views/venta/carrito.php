
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Venta
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Venta</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
     
		<!--  -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Agregar Venta</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?= form_open('venta/registrarventa'); ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="clienteVenta">Codigo de Cliente</label>
                    <input type="text" class="form-control" id="clienteVenta" name="clienteVenta" placeholder="Ingrese Codigo de Cliente">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="fechaEntregaVenta">Fecha de Entrega</label>
                    <input type="date" class="form-control" id="fechaEntregaVenta" name="fechaEntregaVenta" placeholder="Ingrese fecha de Entrega">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="horaEntregaVenta">Hora de Entrega</label>
                    <input type="time" class="form-control" id="horaEntregaVenta" name="horaEntregaVenta" placeholder="Ingrese Hora de Entrega">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="descuentoVenta">Descuento Venta</label>
                    <input type="number" class="form-control" id="descuentoVenta" name="descuentoVenta" placeholder="Ingrese Hora de Entrega" min="0">
                  </div>
                </div>
              </div>
            
            
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Registrar Venta</button>
            <button type="reset" class="btn btn-primary">Borrar</button>
            </div>
        </form>
        </div>
          <!-- /.box -->
      </div>
     </div>

     <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Carrito de Compras</h3>
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
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio Unitario</th>
                <th>Nro de unidades</th>
                <th>SubTotal</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <?php 
              $i=1;
              foreach ($this->cart->contents() as $item) {
                
               ?>
              <tr>
                <td><?= $i ?><input type="hidden" name="<?=$i ?>[rowid]" value="<?= $item['rowid'] ?>"></td>
                <td><?= $item['id'] ?><input type="hidden" name="<?=$i ?>[id]" value="<?= $item['id'] ?>"></td>
                <td><?= $item['name'] ?><input type="hidden" name="<?=$i ?>[name]" value="<?= $item['name'] ?>"></td>
                <td>S/. <?= number_format($item['price'],2,',','.') ?><input type="hidden" name="<?=$i ?>[price]" value="<?= $item['price'] ?>"></td>
                <td><?= $item['qty'] ?><input type="hidden" name="<?=$i ?>[qty]" value="<?= $item['qty'] ?>"></td>
                <td>S/. <?= number_format($item['subtotal'],2,',','.') ?></td>
                <td><td><a href="<?= base_url() ?>venta/eliminaritem/<?= $item['rowid'] ?>"><i class="fa fa-trash-o"></i> Eliminar Item</a></td>
              </tr>
              <?php 
              $i++;
              } ?>
              <tfoot>
                <tr>
                  <td colspan="5">TOTAL</td>
                  <td>S/. <?= number_format($this->cart->total(),2,',','.') ?></td>
                  <td></td>
                </tr>
              </tfoot>
              </tbody>
              </table>
            </div>
            
            
          
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
          <?= anchor('venta','+ Agregar mas productos...') ?>
          <?= anchor('venta/vaciarcarrito','Vaciar carrito de compras') ?>
          <!--<button type="submit" class="btn btn-primary">Vaciar Carrito</button>-->
          </div>
        </form>
        </div>
          <!-- /.box -->
      </div>
     </div>

     
		<!--  -->
		
		<!--  -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
