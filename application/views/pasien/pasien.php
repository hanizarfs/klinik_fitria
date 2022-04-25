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

		<!-- Container -->
		<div class="container">
			<h2><a href="<?php echo base_url('pasien/add') ?>" class="btn btn-danger">[+] Tambah</a></h2>
			<table class="table table-striped table-hover" id="table">
				<thead class="table-info">
					<tr>
						<th>ID Pasien</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>TTL</th>
						<th>No. Telepon</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $row) { ?>
					<tr>
						<td> <?php echo $row['id_pasien']; ?> </td>
						<td> <?php echo $row['nama_pasien']; ?> </td>
						<td> <?php echo $row['alamat']; ?> </td>
						<td> <?php echo $row['tgl_lahir']; ?> </td>
						<td> <?php echo $row['no_telp']; ?> </td>
						<td>
							<a href="pasien/edit/<?php echo $row['id_pasien'];?>" class="btn btn-warning">Edit</a>
							<button class="btn btn-danger" data-bs-toggle="modal"
								data-bs-target="#exampleModal">Hapus</button>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<!-- Modal for delete -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<a href="pasien/delete/<?php echo $row['id_pasien'];?>" type="button"
							class="btn btn-primary">Save
							changes</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End of modal for delete -->

	</div>
	<!-- End of container -->

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
