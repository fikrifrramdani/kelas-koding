<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
      <div class="row w-100">
        <div class="col-lg-4 mx-auto">
          <div class="auto-form-wrapper">
            <form action="<?= base_url('auth'); ?>" method="post">
              <?= $this->session->flashdata('message'); ?>
              <div class="form-group">
                <label class="label">Username</label>
                <div class="input-group">
                  <input type="text" class="form-control" value="<?= set_value('userName'); ?>" id="userName" name="userName" placeholder="Username">
                  <?= form_error('userName', '<small class="text-danger">', '</small>') ?>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="label">Password</label>
                <div class="input-group">
                  <input type="password" name="password" class="form-control" placeholder="********">
                  <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary submit-btn btn-block">Login</button>
              </div>
              <div class="form-group d-flex justify-content-center">
                <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                <br>
                <span class="text-small font-weight-semibold pl-3">Not a member ?</span>
                <a href="<?= base_url('auth/register'); ?>" class="text-black text-small">Create new account</a>
              </div>
            </form>
          </div>
          <hr>
          <p class="footer-text text-center">copyright © <?php $tahun = date('Y');
                                                          echo $tahun; ?> kelas-koding.com. All rights reserved.</p>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->