<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="icon" type="image/x-item" href="https://id.top10place.com/img_files/410213025684784">
	<title>Klinik Fitria</title>

	<style>
		.hero,
		.about {
			height: 100vh;
		}

	</style>
</head>

<body>
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="https://id.top10place.com/img_files/410213025684784" alt="Logo Klinik Fitria"
					class="img-fluid w-25">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-center">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
				</ul>
				<a href="<?php echo base_url('home/beranda') ?>" class="btn btn-primary">Masuk</a>
			</div>
		</div>
	</nav>
	<!-- END OF NAVBAR -->

	<!-- MAIN CONTENT -->
	<main class="main">
		<section class="hero bg-info">
			<div class="container h-100">
				<div class="row h-100">
					<div class="col-6 d-flex flex-column justify-content-center">
						<h1>Klink Fitria</h1>
						<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quia vel, repudiandae
							necessitatibus quos assumenda obcaecati molestiae eaque incidunt omnis illum praesentium,
							voluptate fugiat commodi cumque dolore doloremque error magnam.</h5>
					</div>
					<div class="col-6 d-flex flex-column justify-content-center">
						<img src="assets/wpa.gif" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="about">
			<div class="container h-100">
				<div class="row h-100 gx-5">
					<div class="col-6 d-flex flex-column justify-content-center">
						<img src="https://media.istockphoto.com/photos/its-our-aim-to-get-you-to-optimum-health-picture-id1304125415?b=1&k=20&m=1304125415&s=170667a&w=0&h=3bUCiYdM8jJu9MQKpn87RCih8pwSA92NzdESYFuT3mo="
							alt="About Klinik Fitria" class="img-fluid p-5">
					</div>
					<div class="col-6 d-flex flex-column justify-content-center">
						<h2>Tentang Kami</h2>
						<p>
							Klinik Fitira adalah Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto
							ab, tenetur repellendus corrupti exercitationem expedita quasi fugit excepturi obcaecati
							nihil in, qui ratione, officia sint illum consectetur iusto. Odit, mollitia!
						</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quod excepturi blanditiis est
							laboriosam mollitia! Ad nisi quibusdam deleniti, nostrum ipsam, accusantium reiciendis
							dolorum dolore error, architecto sit nihil maiores? Vel quae error natus accusantium!</p>
					</div>
				</div>
			</div>
		</section>
		<section class="film">
			<div class="container p-5">
				<div class="row p-5">
					<div class="col p-5 bg-warning shadow shadow-lg">
						<iframe width="100%" height="500" src="https://www.youtube.com/embed/1RwrSEMei8g"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>
		<section class="about">
			<div class="container h-100">
				<div class="row h-100 d-flex align-items-center">
					<div class="col-xl-4 mb-3">
						<div class="card bg-info mb-5 shadow shadow-lg">
							<div class="card-header py-3 text-light">
								<strong>Keunggulan 1</strong>
							</div>
							<div class="card-body text-light">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card shadow shadow-md">
							<div class="card-header py-3">
								<strong>Keunggulan 2</strong>
							</div>
							<div class="card-body">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card shadow shadow-md">
							<div class="card-header py-3">
								<strong>Keunggulan 3</strong>
							</div>
							<div class="card-body">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer class="footer bg-info text-light">
		<div class="container py-5">
			<div class="row">
				<div class="col-xl-4 col-md-4 col-sm-12">
					<a href="#">
						<img src="https://id.top10place.com/img_files/410213025684784" alt="" class="w-25">
					</a>
				</div>
				<div class="col-xl-4 col-md-4 col-sm-12">
					<nav class="d-flex flex-column">
						<a href="#" class="text-light ">Beranda</a>
						<a href="" class="text-light ">Tentang</a>
						<a href="" class="text-light ">Blog</a>
					</nav>
				</div>
				<div class="col-xl-4 col-md-4 col-sm-12">
					<nav class="d-flex flex-column text-end">
						<p>Sepanjang jalan kenangan</p>
						<p>Kota Solo</p>
						<p>46258</p>
						<p>Indonesia</p>
					</nav>
				</div>
			</div>
		</div>
	</footer>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
	</script>

</body>

</html>
