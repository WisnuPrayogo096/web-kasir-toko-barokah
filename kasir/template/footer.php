<!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Informatics UMM | Powered By <a href="https://www.google.com/maps/place/Sehat+tentrem+toko+barokah/@-7.8958044,112.6061807,20z/data=!4m14!1m7!3m6!1s0x2e7881caf1ff3bc3:0xd8e2b2990a496df0!2sJasa+buat+kaos!8m2!3d-7.8967089!4d112.6082736!16s%2Fg%2F11hynm25ym!3m5!1s0x2e788152145b6477:0x9d058040eeca2558!8m2!3d-7.895703!4d112.6061979!16s%2Fg%2F11rx6jvm5f?entry=ttu" target="_blank">Toko Barokah</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="//localhost/web-kasir/vendors/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="//localhost/web-kasir/vendors/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="//localhost/web-kasir/vendors/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="//localhost/web-kasir/vendors/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="//localhost/web-kasir/vendors/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="//localhost/web-kasir/vendors/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="//localhost/web-kasir/vendors/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="//localhost/web-kasir/vendors/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="//localhost/web-kasir/vendors/plugins/moment/moment.min.js"></script>
<script src="//localhost/web-kasir/vendors/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="//localhost/web-kasir/vendors/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="//localhost/web-kasir/vendors/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="//localhost/web-kasir/vendors/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="//localhost/web-kasir/vendors/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="//localhost/web-kasir/vendors/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="//localhost/web-kasir/vendors/dist/js/demo.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      
      $(document).on('click', '#tb_produk', function (e) {
        document.getElementById("kdproduk").value = $(this).attr('data-kdproduk');
        document.getElementById("nm_produk").value = $(this).attr('data-nm_produk');
        document.getElementById("kategori").value = $(this).attr('data-kategori');
        document.getElementById("harga").value = $(this).attr('data-harga');
        
        
       
        $('#modal_produk').modal('hide');
      }); 
      
    });
    </script>
</body>
</html>