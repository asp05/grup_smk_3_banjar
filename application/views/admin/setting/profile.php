<!-- ini menampilkan table admin  -->

<!-- page content -->
  <div class="right_col" role="main">

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><span class="glyphicon glyphicon-user"></span> Selamat Datang <strong> Admin</strong></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"> 
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
                  <img src="<?php echo base_url('assets/images/user_admin/smk5caf2d3390cceuser.png')?>" class="img img-responsive" title="Foto Profile"/>
                </div>
                <div class="col-md-9">
                  <h1>Profile Admin</h1>
                  <!-- <div class="row">
                    <div class="col-xs-3"> <h4>NIP</h4> </div>
                    <div class="col-xs-1"> <h4> : </h4> </div>
                    <div class="col-xs-4">
                      <h4>hiji dua tilu</h4>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-xs-3"> <h4>Username</h4> </div>
                    <div class="col-xs-1"> <h4> : </h4> </div>
                    <div class="col-xs-4">
                      <h4><?php echo $this->session->username_admin; ?></h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-3"> <h4>Email</h4> </div>
                    <div class="col-xs-1"> <h4> : </h4> </div>
                    <div class="col-xs-4">
                      <h4>entin.welah@jimel.dotkom</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
<!-- /page content -->