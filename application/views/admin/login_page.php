
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Page</title>
  <!-- plugins:css -->
   <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
    <!-- DataTable -->
    <link href="<?php echo base_url();?>assets/datatables/dataTables.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(); ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(); ?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- DataTable -->
    <script src="<?php echo base_url(); ?>assets/datatables/dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/custom/css_custom/login.css'); ?>">
    
    
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.png')?>" />
</head>

<body style="background: radial-gradient(purple,black);">
  <div class="right_col" role="main">
    <div class="row">
      <div class="col-md-4 tengah" style="background: radial-gradient(gray,black); border-radius: 10px; text-align: center;">
       
        <div class="x_panel" style="background: radial-gradient(purple,black); border-radius: 10px;">

          <div class="x_title">
              <h1><font face="times new roman" color="white">Form login<font></h1>              
              <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <br />
            <br />
            <form class="form-horizontal input_mask" action="<?php echo site_url('login/proses');?>" method="post" >

                <div class="row">
                  <div class="col-md-12 col-md-offset-2 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" name="username_admin" id="inputSuccess2" placeholder="Username">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group has-feedback">
                    <input type="password" class="form-control has-feedback-left" name="password" id="inputSuccess4" placeholder="Password">
                    <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>

              <br />

                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="">
                    <button type="submit" class="btn btn-success btn-block" style="background-color: blue;">Login</button>
                  </div>
                </div>
                <?php
                  if ($this->session->flashdata('errormsg')){
                ?>
                          
                    <div class="alert alert-danger" role="alert">
                      <?php echo $this->session->flashdata('errormsg'); ?>
                    </div>

                <?php } ?>

            </form>
          </div>
                  <p class="footer-text text-center text-white">Copyright © Your Website 2019</p>

       </div>
    </div>         
  </div>

  <!-- container-scroller -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/custom/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/custom/dist/belajar_swal.js"></script>
  <!-- endinject -->
</body>

</html>