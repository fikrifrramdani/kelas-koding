<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
      <div class="row w-100">
        <div class="col-lg-5 mx-auto">
          <h2 class="text-center mb-4">Register</h2>
          <div class="auto-form-wrapper">

            <form method="post" action="<?= base_url('auth/auth_register'); ?>">

              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Username" value="<?= set_value('name'); ?>">
                  <?= form_error('name', '<small class="text-danger">', '</small>'); ?>

                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" id="userName" name="userName" placeholder="Username" value="<?= set_value('userName'); ?>">
                  <?= form_error('userName', '<small class="text-danger">', '</small>'); ?>

                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Username" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>'); ?>

                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" id="gender" name="gender" placeholder="Username" value="<?= set_value('gender'); ?>">
                  <?= form_error('gender', '<small class="text-danger">', '</small>'); ?>

                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
                      <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>

                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary submit-btn btn-block">Register</button>
              </div>

              <div class="text-block text-center my-3">
                <span class="text-small font-weight-semibold">Already have and account ?</span>
                <a href="<?= base_url('auth'); ?>" class="text-black text-small">Login</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->