page content -->
  <div class="right_col" role="main">

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Tabel <strong> Absen Siswa</strong></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                    <th><center>Tanggal</center></th>
                    <th><center>NIS</center></th>
                    <th><center>Nama</center></th>
                    <th><center>jk</center></th>
                    <th><center>Kelas</center></th>
                    <th><center>status</center></th>
                    <th width="130px"><center>Aksi</center></th>
                  </tr>
                </thead>
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
                    <input type="hidden" name="id_absis"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal</label>
                            <div class="col-md-9">
                                <input name="tgl" class="form-control" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label class="control-label col-md-3">NIS</label>
                            <div class="col-md-9">
                                <input name="nis" class="form-control" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Siswa</label>
                            <div class="col-md-9">
                                <input name="nama" class="form-control" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <input name="jk" class="form-control" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Kelas</label>
                            <div class="col-md-9">
                                <input name="kelas" class="form-control" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-9">
                                <input name="status" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label class="control-label col-md-3">status_kehadiran</label>
                            <div class="col-md-9">
                                <select name="status_kehadiran" class="form-control">
                                    <option value="Hadir">Hadir</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Alfa">Alfa</option>
                                    <option value="bolos">bolos</option>
                                </select>
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
            "url": "<?php echo site_url('absensi/Tgl_absen_siswa/ajax_list') ?>",
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
function edit_siswa(id_absis)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('absensi/Tgl_absen_siswa/ajax_edit/') ?>" + id_absis,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id_absis"]').val(data.id_absis);
            $('[name="tgl"]').val(data.tgl);
            $('[name="nis"]').val(data.nis);
            $('[name="nama"]').val(data.nama);
            $('[name="jk"]').val(data.jk);
            $('[name="kelas"]').val(data.kelas);
            $('[name="status_kehadiran"]').val(data.status_kehadiran);
            $('#modal_form').modal('show');
            $('.modal-title').text('Edit Person');

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 
    if(save_method == 'add') {
        url = "<?php echo site_url('absensi/Tgl_absen_siswa/ajax_add')?>";
    } else {
        url = "<?php echo site_url('absensi/Tgl_absen_siswa/ajax_update')?>";
    }
 
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
 
            $('#modal_form').modal('hide');
            reload_table();
 
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}

// function delete_siswa(id_absis) {
//     if (confirm('yakin apa?')) {
//         $.ajax({
//             url : "<?php //echo site_url('absensi/Tgl_absen_siswa/ajax_delete/')?>" + id_absis,
//             type : "POST",
//             dataType : "JSON",
//             success : function(data) {
//                 $("#modal_form").modal('hide');
//                 reload_table();
//             },
//             error : function(jqXHR, textStatus, errorThrown) {
//                 alert('error cuk!');
//             }
//         });
//     }
// }

</script>
<!-- akhir script js nya kawan