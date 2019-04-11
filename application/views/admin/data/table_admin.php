   <!-- ini menampilkan table admin  -->

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
                    <h2>Akun<strong> Admin</strong></h2>
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
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th><center>Username</center></th>
                          <th><center>Email Address</center></th>
                          <th><center>Aksi</center></th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($isi as $x) :?>
                          <tr>
                              <td style="vertical-align: middle;"><?=$x->username_admin?></td>
                              <td style="vertical-align: middle;"><?=$x->email?></td>
                              <td style="align-items: center;">
                                 <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false">Pilih <span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu">
                                      <li><a href="#">Hapus</a>
                                      </li>
                                      <li><a href="#">Edit</a>
                                      </li>
                                    </ul>
                                  </div>
                              </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->