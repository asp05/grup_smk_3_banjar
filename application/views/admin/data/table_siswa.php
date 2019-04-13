   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel <strong> Siswa</strong></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a href="<?php echo base_url('home/tabel_siswa/tambah') ?>"><i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                    <table id="table" class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th><center>Nis</center></th>
                          <th><center>Nama</center></th>
                          <th><center>Jenis Kelamin</center></th>
                          <th><center>Kelas</center></th>
                          <th><center>Foto Siswa</center></th>
                          <th><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>

                    </tr>
                      </tbody>
                    </table>
                  </div>

                  <script src="<?php echo base_url('assets/jquery/jquery-3.3.1.min.js')?>"></script>
                  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
                  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
                  <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
                  <script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>

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
            "url": "<?php echo base_url('biodata/siswa/ajax_list')?>",
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
                  </script>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->