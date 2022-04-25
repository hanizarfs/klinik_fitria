<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Required -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Data Tables CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styleDataTables.css')?>">

	<!-- BOX Icon CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Bootstrap/css/bootstrap.min.css') ?>">

	<!-- Navbar CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styleNavbar.css')?>">

	<!-- Title -->
	<title>Klinik Fitria</title>
</head>

<body>
	<!-- Wrapper -->
	<div id="body-pd">

		<!-- Header -->
		<header class="header" id="header">
			<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
			<div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
		</header>
		<!-- End of Header -->

		<!-- Sidebar as Navbar -->
		<div class="l-navbar bg-info" id="nav-bar">
			<nav class="nav">
				<div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
							class="nav_logo-name">BBBootstrap</span> </a>
					<div class="nav_list">
						<a href="<?php echo base_url('home') ?>" class="nav_link"> <i
								class='bx bx-grid-alt nav_icon'></i>
							<span class="nav_name">Dashboard</span>
						</a>
						<a href="<?php echo base_url('pasien') ?>" class="nav_link active"> <i
								class='bx bx-user nav_icon'></i>
							<span class="nav_name">Pasien</span>
						</a>
						<a href="<?php echo base_url('tindakan') ?>" class="nav_link"> <i
								class='bx bx-message-square-detail nav_icon'></i>
							<span class="nav_name">Tindakan</span>
						</a>
						<a href="<?php echo base_url('obat') ?>" class="nav_link"> <i
								class='bx bx-bookmark nav_icon'></i>
							<span class="nav_name">Obat</span>
						</a>
						<a href="<?php echo base_url('rawat') ?>" class="nav_link"> <i
								class='bx bx-folder nav_icon'></i>
							<span class="nav_name">Rawat</span>
						</a>
					</div>
				</div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i>
					<span class="nav_name">SignOut</span> </a>
			</nav>
		</div>
		<!-- End of sidebar as Navbar -->

		<div class="container">
			<div class="card mt-5">
				<div class="card-header text-center">
					<h2>Tambah Buku Baru</h2>
				</div>
				<div class="card-body">
					<form action="<?php echo base_url('pasien/insert'); ?>" method="POST" class="px-5">
						<label class="form-label" for="nama_pasien">Nama</label>
						<input class="form-control" type="text" name="nama_pasien"><br>
						<label class="form-label" for="alamat">Alamat</label>
						<input class="form-control" type="text" name="alamat"><br>
						<label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
						<input class="form-control" type="date" name="tgl_lahir"><br>
						<label class="form-label" for="no_telp">No Telepon</label>
						<input class="form-control" type="number" name="no_telp"><br>
						<button type="submit" class="btn btn-primary float-end px-4 py-2">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

		<!-- Data Tables Js -->
		<script cript src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

		<!-- Bootstrap Js -->
		<script src="<?php echo base_url("assets/Bootstrap/js/bootstrap.min.js") ?>"></script>

		<script>
			$(document).ready(function () {
				$('#table').DataTable();
			});

			document.addEventListener("DOMContentLoaded", function (event) {

				const showNavbar = (toggleId, navId, bodyId, headerId) => {
					const toggle = document.getElementById(toggleId),
						nav = document.getElementById(navId),
						bodypd = document.getElementById(bodyId),
						headerpd = document.getElementById(headerId)

					// Validate that all variables exist
					if (toggle && nav && bodypd && headerpd) {
						toggle.addEventListener('click', () => {
							// show navbar
							nav.classList.toggle('show')
							// change icon
							toggle.classList.toggle('bx-x')
							// add padding to body
							bodypd.classList.toggle('body-pd')
							// add padding to header
							headerpd.classList.toggle('body-pd')
						})
					}
				}

				showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

				/*===== LINK ACTIVE =====*/
				const linkColor = document.querySelectorAll('.nav_link')

				function colorLink() {
					if (linkColor) {
						linkColor.forEach(l => l.classList.remove('active'))
						this.classList.add('active')
					}
				}
				linkColor.forEach(l => l.addEventListener('click', colorLink))
			});

		</script>


</body>

</html>
