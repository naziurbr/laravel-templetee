<!DOCTYPE html>
<html lang="en">
<!-- Head -->
 @yield("head")
<!-- End Head -->
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  
<!-- Header -->
 @include("backend.layouts.header")
<!-- End Header -->


  <!-- Left side column. contains the logo and sidebar -->
<!-- left bar -->
 @include("backend.layouts.left_bar")
<!-- End left bar -->

<!-- Main Contant -->
  <!-- Content Wrapper. Contains page content -->
@yield("content")
  <!-- /.content-wrapper -->
<!-- End Main Contant -->

  <!-- Footer -->
   @include("backend.layouts.footer")
  <!-- End Footer -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"> 
    <!-- Tab panes -->
    <div class="tab-content"> 
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
      <!-- /.tab-pane --> 
    </div>
  </aside>
  <!-- /.control-sidebar --> 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper --> 

<!-- Script --> 
@yield("script")
<!--End Script-->
</body>
</html>
