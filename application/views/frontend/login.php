

<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Login</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post" action="<?php echo base_url('login');?>">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">            
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
       <!--  <p>Belum punya akun? <a href="#">Daftar Disini</a></p> -->
        <!--<p>Lupa Password? <a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Klik disini</a></p>-->
      </div>
    </div>
  </div>
</div>