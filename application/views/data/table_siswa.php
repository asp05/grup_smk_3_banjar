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
                    <h2>Tabel<strong>Siswa</strong></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th><center>Nis</center></th>
                          <th><center>Foto Siswa</center></th>
                          <th><center>Nama</center></th>
                          <th><center>Jenis Kelamin</center></th>
                          <th><center>Kelas</center></th>
                          <th><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($pengguna as $x) :?>
                    <tr>
                        <td style="vertical-align: middle;"><?=$x->nis?></td>
                        <td class="align-center"><img style="width: 100px;" src="<?php echo base_url().'assets/images/siswa/'.$x->photo_siswa;?>"></td>
                        <td style="vertical-align: middle;"><?=$x->nama?></td>
                        <td style="vertical-align: middle;"><?=$x->jk?></td>
                        <td style="vertical-align: middle;"><?=$x->kelas?></td>
                         <td style="align-items: center;">
                           <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false">Primary <span class="caret"></span>
                    </button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                    </ul>
                    </div>
                        </td>
                        <?php endforeach;?>
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