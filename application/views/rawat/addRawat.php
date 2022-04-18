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
				<form action="<?php echo base_url('pasien/insertRawat'); ?>" method="POST" class="px-5">
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

</body>

</html>
