<div class="container">
	<div class="card card-register mx-auto mt-5">
		<div class="card-header text-center">Register an Account</div>
		<div class="card-body">

			<form method="post" action="<?= base_url('auth/register'); ?>">

				<div class="form-group">
					<div class="form-group">
						<input type="text" name="name" id="fullName" class="form-control" placeholder="Full name" required="required" autofocus="autofocus" value="<?= set_value('name'); ?>">
						<?= form_error('name', '<small class="text-danger">', '</small>') ?>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<input type="text" name="userName" id="userName" class="form-control" placeholder="User name" required="required" autofocus="autofocus" value="<?= set_value('userName'); ?>">
						<?= form_error('userName', '<small class="text-danger">', '</small>') ?>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" value="<?= set_value('email'); ?>">
						<?= form_error('email', '<small class="text-danger">', '</small>') ?>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<input type="text" name="gender" id="inputGender" class="form-control" placeholder="Gender" required="required" value="<?= set_value('gender'); ?>">
						<?= form_error('text', '<small class="text-danger">', '</small>') ?>
					</div>
				</div>

				<div class="form-group">
					<div class="form-row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="password" name="password1" id="Password1" class="form-control" placeholder="Password" required="required">
								<?= form_error('password1', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<input type="password" name="password2" id="Password2" class="form-control" placeholder="Confirm password" required="required">
							</div>
						</div>
					</div>
				</div>

				<button type="submit" class="btn btn-primary btn-block">Register</button>
			</form>
			<div class="text-center">
				<a class="d-block small mt-3" href="<?= base_url('auth'); ?>">Login Page</a>
				<a class="d-block small" href="forgot-password.html">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>
