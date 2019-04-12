<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('admin/partial_admin/header'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <!-- begin sidebar -->
          <?php $this->load->view('admin/partial_admin/sidebar'); ?>
        <!-- end sidebar -->

        <!-- top navigation -->
          <?php $this->load->view('admin/partial_admin/navigasi'); ?>
        <!-- /top navigation -->

        <!-- page content -->
          <?php $this->load->view($page); ?>
        <!-- /page content -->

        <!-- footer content -->
          <?php $this->load->view('admin/partial_admin/footer'); ?>
        <!-- /footer content -->
      </div>
    </div>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/custom/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/custom/dist/belajar_swal.js"></script>

    <!--<script src="<?php echo base_url();?>assets/custom/js/barang.js"></script>-->
    <script type="text/javascript">
      var table;
 
      $(document).ready(function() {
 
            //datatables
            table = $('#table').DataTable({ 
 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
     
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('master/barang/ajax_list')?>",
                "type": "POST"
            },
 
            //Set column definition initialisation properties.
            "columnDefs": [
              { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
              },
            ], 
          });
       
      });
    </script>
  </body>
</html>