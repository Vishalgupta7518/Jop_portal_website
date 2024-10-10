<footer class="main-footer">
    <strong>Copyright &copy; 2023-2024 <a href="https://adminlte.io">CurryOn</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
  </div>
<!-- ./wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#btn').click(function(){
          
          //Name 
          if($('#name').val()==""){
            // alert("please enter name ");
            $('#sname').html("#please enter name");
            $('#name').focus();
            return false;
          }
          if($('#name').val().length<3){
            // alert("please enter name ");
            $('#sname').html("#please enter atleast 3 char..");
            $('#name').val("");
            $('#name').focus();
            return false;
          }
          if($.isNumeric($('#name').val())){
            // alert("please enter name ");
            $('#sname').html("#please enter Alphanumeric");
            $('#name').val("");
            $('#name').focus();
            return false;
          }
          // Email
          if($('#email').val()==""){
            // alert("please enter name ");
            $('#semail').html("#please enter email");
            $('#email').focus();
            return false;
          }
          if($('#email').val().length<5){
            // alert("please enter name ");
            $('#semail').html("#please enter valid email");
            $('#email').val("");
            $('#email').focus();
            return false;
          }
          if($.isNumeric($('#email').val())){
            // alert("please enter name ");
            $('#semail').html("#please enter Alphanumeric");
            $('#email').val("");
            $('#email').focus();
            return false;
          }
          if($('#email').val().indexOf(['@'])== -1){
            // alert("please enter name ");
            $('#semail').html("#please enter valid email");
            $('#email').val("");
            $('#email').focus();
            return false;
          }
          if($('#email').val().indexOf(['.'])== -1){
            // alert("please enter name ");
            $('#semail').html("#please enter valid email");
            $('#email').val("");
            $('#email').focus();
            return false;
          }
          if($('#email').val().indexOf(['.'])-$('#email').val().indexOf(['@'])< 2){
            // alert("please enter name ");
            $('#semail').html("#please enter valid email");
            $('#email').val("");
            $('#email').focus();
            return false;
          }
          // password
          if($('#pass').val()==""){
            $('#spass').html("#please enter password");
            $('#pass').focus();
            return false;
          }
          if($('#pass').val().length<5){
            $('#spass').html("#please enter atleast 5 char...");
            $('#pass').val("");
            $('#pass').focus();
            return false;
          }
          if(!$('#pass').val().match('[0-9]')) {
            $('#spass').html("#please enter numeric");
            $('#pass').val("");
            $('#pass').focus();
            return false;
          }
          if(!$('#pass').val().match('[!@#$%]')) {
            $('#spass').html("#please enter any symbol");
            $('#pass').val("");
            $('#pass').focus();
            return false;
          }
          if(!$('#pass').val().match('[a-z]')){
            $('#spass').html("#please enter lowercase");
            $('#pass').val("");
            $('#pass').focus();
            return false;
          }
          if(!$('#pass').val().match('[A-Z]')){
            $('#spass').html("#please enter any uppercase");
            $('#pass').val("");
            $('#pass').focus();
            return false;
          }
          // Re-password
          if($('#rpass').val()==""){
            $('#srpass').html("#Enter re-password");
            $('#rpass').focus();
            return false;
          }
          if(!($('#rpass').val()==$("#pass").val())){
            $('#srpass').html("#password and re-password not match");
            $('#rpass').val("");
            $('#rpass').focus();
            return false;
          }


        });

        $('#lbtn').click(function(){
          // Name
          if($('#name').val()==""){
            $('#sname').html('#please enter email');
            $('#name').focus();
            return false;
          }
          if($('#name').val().length<5){
            $('#sname').html('#please enter email atleast 5 char..');
            $('#name').focus();
            return false;
          }
          if($.isNumeric($('#name').val())){
            $('#sname').html('#please enter email alphanumeric');
            $('#name').focus();
            return false;
          }
          // password
          if($('#pass').val()==""){
            $('#spass').html('#please enter password');
            $("#pass").focus();
            return false; 
          }
          if($('#pass').val().length<5){
            $('#spass').html('#please enter 5 char password');
            $("#pass").val("");
            $("#pass").focus();
            return false; 
          }
          if($.isNumeric($('#pass').val())){
            $('#spass').html('#please enter alphanumeric');
            $("#pass").val("");
            $("#pass").focus();
            return false; 
          }
          if(!$('#pass').val().match('[a-z]')){
            $('#spass').html('#please enter lowercase');
            $("#pass").val("");
            $("#pass").focus();
            return false; 
          }
          if(!$('#pass').val().match('[A-Z]')){
            $('#spass').html('#please enter uppercase');
            $("#pass").val("");
            $("#pass").focus();
            return false; 
          }
          if(!$('#pass').val().match('[!@#$%]')){
            $('#spass').html('#please enter any symbol');
            $("#pass").val("");
            $("#pass").focus();
            return false; 
          }
          if(!$('#pass').val().match('[0-9]')){
            $('#spass').html('#please enter any numeric');
            $("#pass").val("");
            $("#pass").focus();
            return false; 
          }
          
        })
          // add_banner.php
        $('#bbtn').click(function(){
          if($('#bname').val()==""){
            $('#bsname').html("#please enter brand name");
            $('#bbtn').focus();
            return false;
          }
          if($('#btitle').val()==""){
            $('#bstitle').html("#please enter brand title");
            $('#btitle').focus();
            return false;
          }
          if($('#bhead').val()==""){
            $('#bshead').html("#please enter brand head");
            $('#bhead').focus();
            return false;
          }
          if($('#bmsg').val()==""){
            $('#bsmsg').html("#please enter brand msg");
            $('#bmsg').focus();
            return false;
          }
          if($('#bfile').val()==""){
            $('#bsclass').html("#please enter brand class");
            $('#bfile').focus();
            return false;
          }
        })
        // edit_banner.php
        $('#ebtn').click(function(){
          if($('#bname').val()==""){
            $('#sname').html("#please enter brand name");
            $('#bname').focus();
            return false;
          }
          if($('#btitle').val()==""){
            $('#stitle').html("#please enter brand title");
            $('#btitle').focus();
            return false;
          }
          if($('#bhead').val()==""){
            $('#shead').html("#please enter brand head");
            $('#bhead').focus();
            return false;
          }
          if($('#bmsg').val()==""){
            $('#smsg').html("#please enter brand msg");
            $('#bmsg').focus();
            return false;
          }
          if($('#bclass').val()==""){
            $('#sclass').html("#please enter brand class");
            $('#bclass').focus();
            return false;
          }
        })
        // add_about_us.php
        $('#a_btn').click(function(){
          if($('#about').val()==""){
            $('#sabout').html("#please enter about heading");
            $('#about').focus();
            return false;
          }
          if($('#a_msg').val()==""){
            $('#smsg').html("#please enter about msg");
            $('#a_msg').focus();
            return false;
          }
          if($('#bfile').val()==""){
            $('#sfile').html("#please select img");
            $('#bfile').focus();
            return false;
          }
        })
        // edit_about.php
        $('#eabtn').click(function(){
          if($('#ahead').val()==""){
            $('#shead').html("#please enter about heading");
            $('#ahead').focus();
            return false;
          }
          if($('#amsg').val()==""){
            $('#smsg').html("#please enter about msg");
            $('#amsg').focus();
            return false;
          }
          if($('#file').val()==""){
            $('#sfile').html("#please select img");
            $('#file').focus();
            return false;
          }
        })
        // add_gallery.php
        $('#gbtn').click(function(){
          if($('#fname').val()==""){
            $('#sname').html("#please enter food name");
            $('#fname').focus();
            return false;
          }
          if($('#price').val()==""){
            $('#sprice').html("#please enter food price");
            $('#price').focus();
            return false;
          }
          if($('#fimg').val()==""){
            $('#simg').html("#please select img");
            $('#fimg').focus();
            return false;
          }
        })
        // edit_gallery.php
        $('#agbtn').click(function(){
          if($('#fname').val()==""){
            $('#sname').html("#please enter food name");
            $('#fname').focus();
            return false;
          }
          if($('#price').val()==""){
            $('#sprice').html("#please enter food price");
            $('#price').focus();
            return false;
          }
          if($('#file').val()==""){
            $('#sfile').html("#please select img");
            $('#file').focus();
            return false;
          }
        })
        // add_footer.php
        $('#fbtn').click(function(){
          if($('#bname').val()==""){
            $('#sname').html("# please enter brand name");
            $('#bname').focus();
            return false;
          }
          if($('#btitle').val()==""){
            $('#stitle').html("# please enter brand title");
            $('#btitle').focus();
            return false;
          }
          if($('#furl').val()==""){
            $('#sfurl').html("# please enter facebook url");
            $('#furl').focus();
            return false;
          }
          if($('#gurl').val()==""){
            $('#sgurl').html("# please enter google url");
            $('#gurl').focus();
            return false;
          }
          if($('#iurl').val()==""){
            $('#siurl').html("# please enter instagram url");
            $('#iurl').focus();
            return false;
          }
          if($('#yurl').val()==""){
            $('#syurl').html("# please enter youtube url");
            $('#yurl').focus();
            return false;
          }
          if($('#bimg').val()==""){
            $('#sbimg').html("# please enter brand class");
            $('#bimg').focus();
            return false;
          }
        })
        // edit_footer.php
        $('#efbtn').click(function(){
          if($('#bname').val()==""){
            $('#sname').html("# please enter brand name");
            $('#bname').focus();
            return false;
          }
          if($('#btitle').val()==""){
            $('#stitle').html("# please enter brand title");
            $('#btitle').focus();
            return false;
          }
          if($('#furl').val()==""){
            $('#sfurl').html("# please enter facebook url");
            $('#furl').focus();
            return false;
          }
          if($('#gurl').val()==""){
            $('#sgurl').html("# please enter google url");
            $('#gurl').focus();
            return false;
          }
          if($('#iurl').val()==""){
            $('#siurl').html("# please enter instagram url");
            $('#iurl').focus();
            return false;
          }
          if($('#yurl').val()==""){
            $('#syurl').html("# please enter youtube url");
            $('#yurl').focus();
            return false;
          }
          if($('#bclass').val()==""){
            $('#sbclass').html("# please enter brand class");
            $('#bclass').focus();
            return false;
          }
        })
        
        
      })
    </script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>