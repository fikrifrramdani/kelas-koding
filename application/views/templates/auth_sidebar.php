<!-- sidebar -->
<div class="container-fluid page-body-wrapper">

	<nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav">
			<li class="nav-item nav-profile">
				<a href="#" class="nav-link">
					<div class="profile-image">
						<img class="img-xs rounded-circle" src="<?= base_url('assets/'); ?>images/faces/face8.jpg" alt="profile image">
						<div class="dot-indicator bg-success"></div>
					</div>
					<div class="text-wrapper">
						<p class="profile-name"><?= $users['name']; ?></p>
						<p class="designation"><?= $users['email']; ?></p>
					</div>
				</a>
			</li>
			<li class="nav-item nav-category">Main Menu</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin'); ?>">
					<i class="menu-icon typcn typcn-document-text"></i>
					<span class="menu-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="basic_elements.html">
					<i class="menu-icon typcn typcn-shopping-bag"></i>
					<span class="menu-title">Users</span>
				</a>
			</li>
		</ul>
	</nav>
	<!-- sidebar -->
