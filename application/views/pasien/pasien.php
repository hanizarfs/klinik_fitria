<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Klinik Fitria</title>
</head>

<body>
	<?php $this->load->view("layout/navbar.php") ?>

	
		<!--Container Main start-->
		<div class="container bg-light">
			<table class="table table-striped table-hover" id="table">
				<thead class="table-info">
					<tr>
						<th>ID Pasien</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>TTL</th>
						<th>No. Telepon</th>
					</tr>
				</thead>
				<tbody>
					<?php forEach ($data as $row) { ?>
					<tr>
						<td><?php $row['id_pasien'] ?></td>
						<td scope="row"><?= $row['nama_pasien'] ?></td>
						<td scope="row"><?= $row['alamat'] ?></td>
						<td scope="row"><?= $row['tgl_lahir'] ?></td>
						<td scope="row"><?= $row['no_telp'] ?></td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
		<!--Container Main end-->
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script cript src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
		<script>
			$(document).ready(function () {
				$('#table').DataTable();
			});

		</script>
</body>

</html>
