<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
	<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
		<a class="navbar-brand brand-logo" href="<?= base_url('admin'); ?>">
			<img src="<?= base_url('assets/'); ?>images/logo.svg" alt="logo">
		</a>
		<a class="navbar-brand brand-logo-mini" href="<?= base_url('admin'); ?>">
			<img src="<?= base_url('assets/'); ?>images/logo-mini.svg" alt="logo">
		</a>
	</div>

	<div class="navbar-menu-wrapper d-flex align-items-center">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
					<i class="mdi mdi-bell-outline"></i>
					<span class="count">7</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
					<a class="dropdown-item py-3">
						<p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
						<span class="badge badge-pill badge-primary float-right">View all</span>
					</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item preview-item">
						<div class="preview-thumbnail">
							<img src="<?= base_url('assets/'); ?>images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
							<div class="preview-item-content flex-grow py-2">
								<p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
								<p class="font-weight-light small-text"> The meeting is cancelled </p>
							</div>
						</a>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<img src="<?= base_url('assets/'); ?>images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
								<div class="preview-item-content flex-grow py-2">
									<p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
									<p class="font-weight-light small-text"> The meeting is cancelled </p>
								</div>
							</a>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="<?= base_url('assets/'); ?>images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
									<div class="preview-item-content flex-grow py-2">
										<p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
										<p class="font-weight-light small-text"> The meeting is cancelled </p>
									</div>
								</a>
							</div>
						</li>

						<li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
							<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
								<img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
								<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
									<div class="dropdown-header text-center">
										<img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
										<p class="mb-1 mt-3 font-weight-semibold"><?= $users['name']; ?></p>
										<p class="font-weight-light text-muted mb-0"><?= $users['email']; ?></p>
									</div>
									<div class="dropdown-divider mb-3"></div>
									<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
								</div>
							</li>
						</ul>
						<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
							<span class="mdi mdi-menu"></span>
						</button>
					</div>
				</nav>
