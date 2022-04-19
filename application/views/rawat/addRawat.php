<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap core CSS and JS-->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
	<title>Klinik Fitria</title>
</head>

<body>
	<?php $this->load->view('layout/navbar'); ?>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				<h2>Tambah Rawat Baru</h2>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('rawat/insertRawat'); ?>" method="POST" class="px-5">
					<div class="mb-3">
						<label class="form-label" for="id_rawat">ID Rawat</label>
						<input class="form-control" type="text" name="id_rawat"><br>
					</div>
					<div class="mb-3">
						<label class="form-label" for="tgl_rawat">Tanggal Rawat</label>
						<input class="form-control" type="date" name="tgl_rawat"><br>
					</div>
					<div class="mb-3">
						<label class="form-label" for="total_tindakan">Total Tindakan</label>
						<input class="form-control" type="number" name="total_tindakan"><br>
					</div>
					<div class="mb-3">
						<label class="form-label" for="total_obat">Total Obat</label>
						<input class="form-control" type="text" name="total_obat"><br>
					</div>
					<div class="mb-3">
						<label class="form-label" for="total_harga">Total Harga</label>
						<input class="form-control" type="text" name="total_harga"><br>
					</div>
					<div class="mb-3">
						<label class="form-label" for="uang_muka">Uang Muka</label>
						<input class="form-control" type="text" name="uang_muka"><br>
					</div>
					<div class="mb-3">
						<label class="form-label" for="kurang">Kurang</label>
						<input class="form-control" type="text" name="kurang"><br>
					</div>
					<div class="mb-3">
						<label class="form-label" for="id_pasien">ID Pasien</label>
						<input class="form-control" type="number" name="id_pasien"><br>
					</div>
					<button type="submit" class="btn btn-primary float-end px-4 py-2">Submit</button>
				</form>
			</div>
		</div>
	</div>

</body>

</html>
