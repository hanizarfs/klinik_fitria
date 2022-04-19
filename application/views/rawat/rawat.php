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
		<h2><a href="rawat/addRawat" class="btn btn-danger">[+] Tambah</a></h2>
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
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php forEach ($data as $row) { ?>
					<tr>
						<td> <?php echo $row['id_rawat']; ?> </td>
						<td> <?php echo $row['tgl_rawat']; ?> </td>
						<td> <?php echo $row['total_tindakan']; ?> </td>
						<td> <?php echo $row['total_obat']; ?> </td>
						<td> <?php echo $row['total_harga']; ?> </td>
						<td> <?php echo $row['uang_muka']; ?> </td>
						<td> <?php echo $row['kurang']; ?> </td>
						<td> <?php echo $row['id_pasien']; ?> </td>
						<td>
							<a href="rawat/edit/ <?php echo $row['id_rawat'];?>" class="btn btn-warning">Edit</a>
							<a href="rawat/delete/ <?php echo $row['id_rawat'];?>" class="btn btn-danger">Hapus</a>
						</td>
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
