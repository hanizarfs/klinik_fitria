<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Edit Pasien</title>
</head>

<body>
	<?php
    $this->load->view('layout/navbar');
  ?>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h1>Edit Pengguna</h1>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<form action="<?php echo base_url('pasien/update/' . $data_pasien['id_pasien']) ?>"
									method="POST" enctype="multipart/form-data">
									<div class="mb-3">
										<label for="nama_pasien" class="form-label">Nama Pasien</label>
										<input type="text" name="nama_pasien" class="form-control"
											value="<?php echo $data_pasien['nama_pasien'] ?>">
									</div>
									<div class="mb-3">
										<label for="alamat" class="form-label">Alamat</label>
										<input type="text" name="harga" class="form-control"
											value="<?php echo $data_pasien['alamat'] ?>">
									</div>
									<div class="mb-3">
										<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
										<input type="date" name="harga" class="form-control"
											value="<?php echo $data_pasien['tgl_lahir'] ?>">
									</div>
									<div class="mb-3">
										<label for="no_telp" class="form-label">No Telepon</label>
										<input type="text" name="harga" class="form-control"
											value="<?php echo $data_pasien['no_telp'] ?>">
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- load bootstrap js file -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>

</html>
