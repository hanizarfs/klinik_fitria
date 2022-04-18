<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Klinik Fitria</title>
</head>
<body>
	<?php $this->load->view("layout/navbar") ?>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header">
				<h1>DATA DOKTER DARI API</h1>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>ID Dokter</th>
							<th>Nama</th>
						</tr>
					</thead>
					<tbody id="dokter"></tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$.ajax({
				url: "https://rosihanari.net/api/api.php?get=dokter",
				type: "GET",
				dataType: "json",
				success: function(result) {
					result.forEach(element => {
						const tr = document.createElement("tr");
						const td = document.createElement("td");
						td.innerHTML = element.iddokter;
						tr.appendChild(td);
						const td2 = document.createElement("td");
						td2.innerHTML = element.namadokter;
						tr.appendChild(td2);
						document.getElementById("dokter").appendChild(tr);
					});
				}
			})
		});
	</script>
</body>
</html>
