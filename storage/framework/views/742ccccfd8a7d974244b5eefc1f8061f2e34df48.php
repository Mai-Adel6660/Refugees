<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/layouts/footer.blade.php */ ?>
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2019-2020 <a href="https://adminlte.io">project teem</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">

        
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<!-- jQuery UI 1.11.4 -->
<!--Using Select2-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(url('/design/adminlte/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('/design/adminlte/bower_components/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!--DataTable-->
<link rel="stylesheet" href="<?php echo e(url('design/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<script src="<?php echo e(url('design/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('design/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('design/adminlte/bower_components/datatables.net-bs/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(url('vendor/datatables/buttons.server-side.js')); ?>"></script>


<!--End DataTable-->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(url('/design/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo e(url('/design/adminlte/bower_components/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(url('/design/adminlte/bower_components/morris.js/morris.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(url('/design/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo e(url('/design/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(url('/design/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(url('/design/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(url('/design/adminlte/bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(url('/design/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<!-- datepicker -->
<script src="<?php echo e(url('/design/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo e(url('/design/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo e(url('/design/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(url('/design/adminlte/bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(url('/design/adminlte/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(url('/design/adminlte/dist/js/pages/dashboard.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(url('/design/adminlte/dist/js/demo.js')); ?>"></script>
<!--jsTree-->
<script src="<?php echo e(url('/design/adminlte/jsTree/jstree.js')); ?>"></script>
<script src="<?php echo e(url('/design/adminlte/jsTree/jstree.wholerow.js')); ?>"></script>
<script src="<?php echo e(url('/design/adminlte/jsTree/jstree.checkbox.js')); ?>"></script>

<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->yieldPushContent('css'); ?>
</body>
</html>
