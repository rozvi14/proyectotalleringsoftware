<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de Despachos | Grupo CRP</title>
  <?php $url_inicio=base_url().'assets/';?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= $url_inicio ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="<?= $url_inicio ?>dist/css/font-awesome/font-awesome.min.css">
  <!-- Ionicons -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
  <link rel="stylesheet" href="<?= $url_inicio ?>dist/css/ionicons/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $url_inicio ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= $url_inicio ?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="inicio"><b>Grupo</b>CRP</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrar un nuevo usuario</p>

    <?= form_open('seguridad/nuevousuario','onSubmit="return validar();"') ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nombres" placeholder="Nombres">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="apellidopat" placeholder="Apellido Paterno">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="apellidomat" placeholder="Apellido Materno">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
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
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nrodocumento" placeholder="Numero Documento">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="date" class="form-control" name="fechanac" placeholder="Fecha de Nacimiento">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="direccion" placeholder="Direccion">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="telefono" placeholder="Telefono">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="repassword" placeholder="Repetir password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" id="condiciones"> Acepto los <a href="#">Terminos</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
      </div>

      <input type="hidden" name="perfil" value="2">
      <input type="hidden" name="tipregistro" value="2">
    <?= form_close() ?>
    <!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>-->

    <a href="inicio/login" class="text-center">Ya tengo una cuenta</a>
  </div>
  <!-- /.form-box -->
</div>

<!-- /.register-box -->
<script>

function validar(){
if (document.getElementById('condiciones').checked){
return true;
}
else
{
alert("Acepte lor terminos");
return false;
}
}
</script>




<!-- jQuery 2.2.3 -->
<script src="<?= $url_inicio ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= $url_inicio ?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= $url_inicio ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
