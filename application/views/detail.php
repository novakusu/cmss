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
						<a class="<?= base_url() ?>" nav-link click-scroll href="<?= base_url() ?>">Home</a>
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

	<section class="news-section section-padding" id="section_5">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-12 mb-5">
					<center>
						<h2>Detail Konten</h2>
					</center>
				</div>

				<div class="col-lg-7 col-12">

					<div class="news-block">
						<div class="news-block-top">
							<img src="<?= base_url('assets/upload/konten/' . $konten->foto)?>"
								class="news-image img-fluid" alt="">
						</div>
						<div class="news-block-info">
							<div class="news-block-title mb-2">
								<h4><a href="#" class="news-block-title-link"></a><?= $konten->judul;?></h4>
							</div>

							<div class="news-block-body">
								<p><?= $konten->keterangan;?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12 mx-auto">
					<h5 class="mt-5 mb-3">Recent news</h5>
					<div class="news-block news-block-two-col d-flex mt-4">
						<div class="news-block-two-col-info">
							<div class="d-flex justify-content-center mb-3">
								<small class="mr-5"><i class="fa fa-user text-primary"></i><i
										class="bi bi-person-circle ml-5"></i><?= $konten->nama;?></small>
								<small class="mr-5"><i class="fa fa-folder text-primary"></i> <i
										class="bi bi-book"></i><?= $konten->nama_kategori;?></small>
							</div>
							<div class="news-block-date">
								<p>
									<i class="bi-calendar4 custom-icon me-1"></i><?= $konten->tanggal;?></p>
							</div>
						</div>
					</div>

					<div class="news-block news-block-two-col d-flex mt-4">
						<div class="news-block-two-col-image-wrap">
							<a href="news-detail.html">
								<img src="images/news/close-up-happy-people-working-together.jpg"
									class="news-image img-fluid" alt="">
							</a>
						</div>

					</div>

					<div class="category-block d-flex flex-column">
						<h5 class="mb-3">Categories</h5>

						<?php foreach($kategori as $kate){ ?>
						<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-item nav-link">
							<?=$kate['nama_kategori'] ?>
						</a>
						<?php } ?>

					</div>
				</div>
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
