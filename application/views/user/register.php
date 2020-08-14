<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?></title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

	<!-- Font Awesome -->
	<link href="<?= base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- Navigation -->
	<?php $this->load->view('user/navbarhome') ?>

	<!-- Page Header -->
	<header class="masthead" style="background-image: url(<?= base_url('assets/image/bg1.png'); ?>">
		<div class="overlay"></div>
		<div class="container" style="width: 600px;">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading" style="padding-top: 102px; padding-bottom: 102px;">
						<form class=" form-signin" action="<?= site_url('UserDashboard/insert_user') ?>" method="POST">
							<img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
							<h2 class="h3 mt-4 mb-3 font-weight-normal">Register your Account</h2>
							<h5 class="text-left">Name</h5>
							<label for="inputName" class="sr-only">Name</label>
							<input type="text" name="names" id="inputName" class="form-control mb-3" placeholder="Name" required="" autofocus="">
							<h5 class="text-left">Mobile Phone Number</h5>
							<label for="inputPhoneNumber" class="sr-only">Mobile Phone Number</label>
							<input type="number" name="phonenumbs" id="inputPhoneNumber" class="form-control mb-3" placeholder="Mobile Phone Number" required="" autofocus="">
							<h5 class="text-left">Username</h5>
							<label for="inputUsername" class="sr-only">Username</label>
							<input type="text" name="usernames" id="inputUsername" class="form-control mb-3" placeholder="Username" required="" autofocus="">
							<h5 class="text-left">Password</h5>
							<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" name="passwords" id="inputPassword" class="form-control mb-3" placeholder="Password" required="">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Create Account</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>

	<table class="table table-dark">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Name</th>
				<th scope="col">Username</th>
				<th scope="col">Password</th>
				<th scope="col">Phone Number</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if ($c_user > 0) {
				foreach ($user as $datas) {
			?>
					<tr>
						<th scope="row">1</th>
						<td><?= $datas->nama_lengkap; ?></td>
						<td><?= $datas->username; ?></td>
						<td><?= $datas->password; ?></td>
						<td><?= $datas->telp; ?></td>
						<td>

						</td>
					</tr>
				<?php }
			} else {
				?>
				<tr>
					<td colspan="8">
						<center> No Data Entry! </center>
					</td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>

	<!-- Footer -->
	<?php $this->load->view('user/footer') ?>

	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?= base_url() . 'assets/js/bootstrap.bundle.min.js'; ?>"></script>
	<script type="text/javascript" src="<?= base_url() . 'assets/jquery/jquery.min.js'; ?>"></script>
	<!-- Custom scripts -->
	<script type="text/javascript" src="<?= base_url() . 'assets/js/script.js'; ?>"></script>
</body>

</html>