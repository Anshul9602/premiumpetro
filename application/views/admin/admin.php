<style>
    .sidebar{
        display:none !important;
    }
    .main-panel{
      width:100%;
    }
</style>
<div class="login-page sidebar-collapse">
  <div class="page-header header-filter" style="display:flex; align-items:center;">
    <div class="container text-center">
      <img src="<?php echo base_url() ?>images/logo3.png" alt="" style="width:300px;">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="<?php base_url() . 'admin' ?>">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
               </div>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="username" class="form-control" placeholder="First Name...">
                </div>
                <span class="text-danger text-center"><?php echo form_error('username'); ?></span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Password...">
                </div>
                <span class="text-danger text-center"><?php echo form_error('password'); ?></span>
              </div>
              <?php  
                          echo '<p class="text-danger text-center">'.$this->session->flashdata

                         ("error").'</p>';  
                     ?>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Get Started</button>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>