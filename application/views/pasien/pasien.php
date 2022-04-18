<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Klinik Fitria</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css
">
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
				<form action="<?= base_url('pasien/search') ?>" method="POST" class="my-4">
					<div class="input-group">
						<input type="text" class="form-control" name="keyword"
							placeholder="Cari berdasarkan nama pasien . . .">
						<span class="input-group-btn">
							<button class="btn btn-primary px-4" type="submit">Cari</button>
						</span>
					</div>
				</form>
				<?php if(!empty($keyword)){ ?>
				<p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>
				<?php } ?>
				<table class="table table-striped table-hover" id="example">
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
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
						</tr>

						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#example').DataTable();
		});

	</script>
</body>

</html>
