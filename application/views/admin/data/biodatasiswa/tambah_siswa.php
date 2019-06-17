<!-- page content -->
<div class="right_col" role="main">

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
                <form method="post" action="<?php echo base_url('Biodata/siswa/tambah') ?>">
                <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="nm">NIS</label>
                            <input type="text" id="nm" name="nis" placeholder="Masukan Nis.." class="form-control">
                            <?= form_error('nis','<small class="text-danger">','</small>') ?>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="tgl">Tanggal Lahir</label>
                            <input type="date" name="ttl" class="form-control">
                            <?= form_error('ttl','<small class="text-danger">','</small>') ?>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="nm">NAMA</label>
                            <input type="text" id="nm" name="nama" placeholder="Masukan Nama.." class="form-control">
                            <?= form_error('nama','<small class="text-danger">','</small>') ?>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="ft">kelas</label>
                            <select name="id_kelas" class="form-control">
                              <?php foreach ($kelas as $k): ?>
                                <option value="<?=$k->id_kelas; ?>"><?= $k->kelas; ?></option>   
                              <?php endforeach ?> 
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="st">JENIS KELAMIN</label><br>
                            <div class="btn-group btn-group-toggle " data-toggle="buttons">
                              <label class="btn btn-dark active">
                                <input type="radio" name="jk" value="laki-laki" checked> Laki-Laki
                              </label>
                              <label class="btn btn-dark">
                                <input type="radio" name="jk" value="perempuan"> Perempuan
                              </label>
                            <?= form_error('jk','<small class="text-danger">','</small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="ket">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="masukan alamat">
                            <?= form_error('alamat','<small class="text-danger">','</small>') ?>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="ket">Tempat Lahir</label>
                            <input type="text" name="tempat_ttl" class="form-control" placeholder="masukan tempat lahir">
                            <?= form_error('tempat_ttl','<small class="text-danger">','</small>') ?>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <input type="submit" class="btn btn-danger btn-block" value="Tambahkan">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <input type="reset" class="btn btn-info btn-block" value="Reset">
                        </div>
                      </div>        
                </form>
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
