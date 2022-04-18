<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Klinik Fitria</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
</head>

<body>
	<?php $this->load->view("layout/navbar") ?>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header">
				<h1>PASIEN</h1>
			</div>
			<div class="card-body">
				<a href="<?php echo base_url('pasien/addPasien')?>" class="btn btn-primary">Tambah Pasien [+]</a>
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
						<?php foreach ($data as $row) { ?>
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
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>	
	<script	cript src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
    		$('#table').DataTable();
		} );
	</script>
</body>

</html>
