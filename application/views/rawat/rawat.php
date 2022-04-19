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
						<th>ID Rawat</th>
						<th>Tanggal</th>
						<th>Total Tindakan</th>
						<th>Total Obat</th>
						<th>Total Harga</th>
						<th>Uang Muka</th>
						<th>Kurang</th>
						<th>ID Pasien</th>
					</tr>
				</thead>
				<tbody>
					<?php forEach ($data as $row) { ?>
					<tr>
						<td scope="row"><?= $row['id_rawat'] ?></td>
						<td scope="row"><?= $row['tgl_rawat'] ?></td>
						<td scope="row"><?= $row['total_tindakan'] ?></td>
						<td scope="row"><?= $row['total_obat'] ?></td>
						<td scope="row"><?= $row['total_harga'] ?></td>
						<td scope="row"><?= $row['uang_muka'] ?></td>
						<td scope="row"><?= $row['kurang'] ?></td>
						<td scope="row"><?= $row['id_pasien'] ?></td>
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
