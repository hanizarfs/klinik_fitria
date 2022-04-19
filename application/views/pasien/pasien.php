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

	<!-- Container -->
	<div class="container bg-light">
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
				<?php forEach ($data as $row) { ?>
				<tr>
					<td> <?php echo $row['id_pasien']; ?> </td>
					<td> <?php echo $row['nama_pasien']; ?> </td>
					<td> <?php echo $row['alamat']; ?> </td>
					<td> <?php echo $row['tgl_lahir']; ?> </td>
					<td> <?php echo $row['no_telp']; ?> </td>
					<td>
						<a href="pasien/edit/<?php echo $row['id_pasien'];?>" class="btn btn-warning">Edit</a>
						<a  class="btn btn-danger">Hapus</a>
						<a href="pasien/delete/<?php echo $row['id_pasien'];?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</a>
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
	<!-- Modal -->
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
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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
