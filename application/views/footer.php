<?php $url_inicio=base_url().'assets/';?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2016 <a href="#">Grupo CRP</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= $url_inicio ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= $url_inicio ?>plugins/jQueryUI/jquery-ui.min1.11.4.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= $url_inicio ?>bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
<script src="<?= $url_inicio ?>plugins/raphael/raphael-min.js"></script>
<script src="<?= $url_inicio ?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= $url_inicio ?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= $url_inicio ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= $url_inicio ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= $url_inicio ?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>-->
<script src="<?= $url_inicio ?>plugins/moment/moment.min.js"></script>
<script src="<?= $url_inicio ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= $url_inicio ?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= $url_inicio ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= $url_inicio ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= $url_inicio ?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= $url_inicio ?>dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= $url_inicio ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $url_inicio ?>dist/js/demo.js"></script>
</body>
</html>