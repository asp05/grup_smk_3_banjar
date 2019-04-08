      var save_method;
      var table;
      $(document).ready(function(){

        //datatable
         $("#e").DataTable({
          "processing"  : true,
          "serverSide"  : true,
          "order"       : [],
          "ajax"        : {
            "url"   : "<?php echo site_url('barang/ajax_list')?>",
            "type"  : "POST"
          },
          "columnDefs"  : [{
            "targets"     : [ -1 ],
            "orderable"   : false
          },
          ],  
        });
      })