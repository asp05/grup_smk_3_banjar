<!-- page content -->
<div class="right_col" role="main">

    <div>
      <div class="">
        <div class=" col-md-2 col-sm-12 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <!-- <a href="javascript:void(0)" onclick="reload_table()" title="Print To Pdf" class="btn btn-danger"><i class="fa fa-download"></i> Report Pdf</a> -->
            <a href="<?= site_url('Laporan/Excel/siswa') ?>" title="Download Excel" class="btn btn-success"><i class="fa fa-download"></i> Report Excel</a>
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
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li>
                    <a href="<?php echo base_url('Biodata/Siswa/tambah') ?>"><i class="fa fa-plus"></i></a>
                </li>
                 <li>
                    <a href="javascript:void(0)" onclick="reload_table()"><i class="fa fa-refresh"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table id="table" class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th><center>NIS</center></th>
                    <th><center>Nama</center></th>
                    <th><center>L/P</center></th>
                    <th><center>Tempat Lahir</center></th>
                    <th><center>Tanggal Lahir</center></th>
                    <th><center>Kelas</center></th>
                    <th><center>Foto Siswa</center></th>
                    <th><center>QR Code</center></th>
                    <th><center>Alamat</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>

              </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"> Form siswa</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="nama"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Siswa</label>
                            <div class="col-md-9">
                                <input name="firstName" placeholder="First Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">jenis kelamin</label>
                            <div class="col-md-9">
                                <select name="jk" class="form-control">
                                    <option value="">--Select Gender--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <textarea name="address" placeholder="Address" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


<!-- ini plugin nya kawan -->
<!-- <script src="<?php //echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script> -->
<!-- <script src="<?php //echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script> -->
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
<!-- ini akhir plugin nya kawan -->

<!-- yg ini script js nya -->
<script type="text/javascript">

var save_method; //for save method string
var table;
var base_url = '<?php echo base_url(); ?>';

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Biodata/Siswa/Ajax_list') ?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            {
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            {
                "targets": [ -2 ], //2 last column (photo)
                "orderable": false, //set not orderable
            },
        ],

    });

    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,
    });

    //set input/textarea/select event when change value, remove class error and remove text help block
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

});

// Untuk Edit
function edit_siswa(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Biodata/Siswa/Ajax_edit/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="nama"]').val(data.nama);
            $('[name="jk"]').val(data.jk);
            $('[name="kelas"]').val(data.kelas);
            $('[name="photo_siswa"]').val(data.photo_siswa);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit siswa'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}

</script>
<!-- akhir script js nya kawan -->