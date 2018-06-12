<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $url_inicio=base_url().'assets/';?>
  <link rel="shortcut icon" href="<?= $url_inicio ?>img/favicon.ico" type="image/ico" />
  <title>Sistema de Despachos | Grupo CRP</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
	<img src="<?= $url_inicio ?>img/logo-2.png" width="20%" height="100%" >
    <a href="../../index2.html"><b>Grupo</b>CRP</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
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
    <p class="login-box-msg">Ingrese para iniciar sesión</p>

    <?= form_open('inicio/logueo') ?>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recuerdame
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    <?= form_close() ?>
	<!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>-->
    <!-- /.social-auth-links -->

    <a href="#">Olvidé mi contraseña</a><br>
    <a href="register.html" class="text-center">Registrar un nuevo cliente</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

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
