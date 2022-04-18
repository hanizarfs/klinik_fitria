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
	<div class="container">
		<div class="card mt-5">
			<div class="card-header">
				<h1>DATA RAWAT</h1>
			</div>
			<div class="card-body">
			<a href="<?php echo base_url('pasien/addRawat')?>" class="btn btn-primary">Tambah Data Rawat [+]</a>
			<form action="<?= base_url('Home/search') ?>" method="POST" class="my-4">
					<div class="input-group">
						<input type="text" class="form-control" name="keyword"
							placeholder="Cari berdasarkan nama buku . . .">
						<span class="input-group-btn">
							<button class="btn btn-primary px-4" type="submit">Cari</button>
						</span>
					</div>
				</form>
				<?php if(!empty($keyword)){ ?>
				<p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>
				<?php } ?>
				<table class="table table-striped table-hover">
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
						<?php foreach ($data as $row) { ?>
						<tr>
							<td><?php $row['id_rawat'] ?></td>
							<td><?php $row['tgl_rawat'] ?></td>
							<td><?php $row['total_tindakan'] ?></td>
							<td><?php $row['total_obat'] ?></td>
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
	</div>
</body>

</html>
