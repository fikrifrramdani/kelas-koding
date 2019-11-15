<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url(); ?>"><?= $title; ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link mt-2" href="#">Lecturer<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mt-2" href="#">Students</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mt-2" href="#">Lesson</a>
				</li>
				<li class="nav-item pr-5">
					<a class="nav-link mt-2" href="#">Forum</a>
				</li>
				<li class="nav-item active pr-2">
					<a class="btn btn-outline-success nav-link mt-2 mb-2" href="<?= base_url('auth/register'); ?>">Register</a>
				</li>

				<?php if ($this->session->userdata('email') == false) : ?>
					<li class="nav-item active pl-2">
						<a href="<?= base_url('auth'); ?>" class="btn btn-outline-primary nav-link mt-2 mb-2">Login</a>
					</li>
				<?php else : ?>
					<li class="nav-item active pl-2">
						<a href="<?= base_url('auth/logout'); ?>" class="btn btn-outline-warning nav-link mt-2 mb-2">logout</a>
					</li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>
