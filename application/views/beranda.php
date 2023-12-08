<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="">

	<title><?=$judul;?></title>

	<!-- CSS FILES -->
	<link href="<?= base_url('assets/front/') ?>css/bootstrap.min.css" rel="stylesheet">

	<link href="<?= base_url('assets/front/') ?>css/bootstrap-icons.css" rel="stylesheet">

	<link href="<?= base_url('assets/front/') ?>css/templatemo-kind-heart-charity.css" rel="stylesheet">
	<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>
<header class="site-header">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-12 d-flex flex-wrap">
				<p class="d-flex me-4 mb-0">
					<i class="bi-geo-alt me-2"></i>
					<a href="https://maps.app.goo.gl/GxJ2z6CbuBqu4Pwx9<?= $konfig->alamat;?>" class="site-footer-link">
								Alamat
							</a>
				</p>

				<p class="d-flex mb-0">
					<i class="bi-envelope me-2"></i>

					<a href="mailto:<?= $konfig->email;?>" class="site-footer-link">
								Email
							</a>
				</p>
			</div>

			<div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
				<ul class="social-icon">
					<li class="social-icon-item">
						<a href="#" class="social-icon-link bi-twitter"></a>
					</li>

					<li class="social-icon-item">
						<a href="#" class="social-icon-link bi-facebook"></a>
					</li>

					<li class="social-icon-item">
						<a href="#" class="social-icon-link bi-instagram"></a>
					</li>

					<li class="social-icon-item">
						<a href="#" class="social-icon-link bi-youtube"></a>
					</li>

					<li class="social-icon-item">
						<a href="#" class="social-icon-link bi-whatsapp"></a>
					</li>
				</ul>
			</div>

		</div>
	</div>
</header>

<body id="section_1">

	<nav class="navbar navbar-expand-lg bg-light shadow-lg">
		<div class="container">
			<a class="navbar-brand" href="#">

				<img src="<?= base_url('assets/front/images/SMKN_2_logo.png') ?> " class="logo img-fluid "
					style="width:40px" alt="Kind Heart Charity">

				<span>
					<?= $konfig->judul_website;?>
				</span>
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link click-scroll" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<?php foreach($kategori as $kate){ ?>
						<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-item nav-link">
							<?=$kate['nama_kategori'] ?>
						</a>
						<?php } ?>
					</li>
					<li class="nav-item ms-3">
						<a href="<?= base_url('auth') ?> " class="nav-link custom-btn custom-border-btn btn ">Login</a>
					</li>


				</ul>
			</div>
		</div>
	</nav>

	<main>
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<?php $no=1; foreach($caraousel as $aaa){ ?>
				<div class="carousel-item <?php if($no==1){echo 'active';} ?>">
					<img src="<?= base_url('assets/upload/caraousel/'.$aaa['foto']) ?>" class="d-block w-100">
				</div>
				<?php $no++;} ?>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<section class="section-padding">
			<div class="container">
				<div class="row">

					<div class="col-lg-10 col-12 text-center mx-auto">
						<h2 class="mb-5">Halaman Konten</h2>
					</div>
					<?php foreach($konten as $ktn){ ?>
					<div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
						<div class="featured-block d-flex justify-content-center align-items-center">
							<div class="d-block">
								<img src="<?= base_url('assets/upload/konten/'.$ktn['foto']) ?> "
									class="featured-block-image img-fluid" alt="">
								<p class="featured-block-text"><strong><?= $ktn['judul']?></strong></p>
								<div class="d-flex justify-content-center mb-3">
									<small class="mr-3"><i class="fa fa-user text-primary"></i><i
											class="bi bi-person-circle ml-3"></i><?= $ktn['nama']?></small>
									<small class="mr-3"><i class="fa fa-folder text-primary"></i> <i
											class="bi bi-book"></i><?= $ktn['nama_kategori']?></small>
								</div>
								<div class="col">
									<a href="<?= base_url('home/artikel/'.$ktn['slug']) ?>"
										class="btn btn-primary ">Baca Selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
					<?php  } ?>
				</div>
			</div>
		</section>
		<!-- footer -->
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<h5 class="site-footer-title mb-3"><?= $konfig->judul_website;?></h5>
						<p class="text-light
						"><?= $konfig->profil_website;?></p>
						<!-- <ul class="footer-menu">

							<li class="footer-menu-item"><a href="#"
									class="footer-menu-link"><?= $konfig->profil_website;?></a></li>
						</ul> -->
					</div>
					<div class="col-lg-4 col-md-6 col-12 mx-auto">
						<h5 class="site-footer-title mb-3">Quick Links</h5>
						<ul class="footer-menu text-light">
							<?php foreach($kategori as $kate){ ?>
							<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-item nav-link">
								<?=$kate['nama_kategori'] ?>
							</a>
							<?php } ?>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 col-12 mx-auto">
						<h5 class="site-footer-title mb-3">Contact Infomation</h5>

						<p class="text-white d-flex mb-2">
							<i class="bi-telephone me-2"></i>

							<a href="https://wa.me/<?= $konfig->no_wa;?>" class="site-footer-link">
								Whatsaap
							</a>
						</p>

						<p class="text-white d-flex">
							<i class="bi-envelope me-2"></i>

							<a href="mailto:<?= $konfig->email;?>" class="site-footer-link">
								Email
							</a>
						</p>

						<p class="text-white d-flex mt-3">
							<i class="bi-geo-alt me-2"></i>
							<a href="https://maps.app.goo.gl/GxJ2z6CbuBqu4Pwx9<?= $konfig->alamat;?>" class="site-footer-link">
								Alamat
							</a>
							<?= $konfig->alamat;?>
						</p>


					</div>
				</div>
			</div>

			<div class="site-footer-bottom">
				<div class="container">
					<div class="row">

						<div class="col-lg-6 col-md-7 col-12">
							<p class="copyright-text mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
								Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a><br>Distribution:
								<a href="https://themewagon.com">ThemeWagon</a>
							</p>
						</div>

						<div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
							<ul class="social-icon">
								<li class="social-icon-item">
									<a href="#" class="social-icon-link bi-twitter"></a>
								</li>

								<li class="social-icon-item">
									<a href="#" class="social-icon-link bi-facebook"></a>
								</li>

								<li class="social-icon-item">
									<a href="#" class="social-icon-link bi-instagram"></a>
								</li>

								<li class="social-icon-item">
									<a href="#" class="social-icon-link bi-linkedin"></a>
								</li>

								<li class="social-icon-item">
									<a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</footer>
		<!-- footer -->

		<!-- JAVASCRIPT FILES -->
		<script src="<?= base_url('assets/front/') ?>js/jquery.min.js"></script>
		<script src="<?= base_url('assets/front/') ?>js/bootstrap.min.js"></script>
		<script src="<?= base_url('assets/front/') ?>js/jquery.sticky.js"></script>
		<script src="<?= base_url('assets/front/') ?>js/click-scroll.js"></script>
		<script src="<?= base_url('assets/front/') ?>js/counter.js"></script>
		<script src="<?= base_url('assets/front/') ?>js/custom.js"></script>

</body>

</html>
