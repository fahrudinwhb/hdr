<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/font/material-icons-regular/material.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css" media="screen,projection"/>
	<link type="text/css"  rel="stylesheet" href="<?php echo base_url() ?>assets/css/pill.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/adminPanel.css"/>

	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.scrollUp.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/Chart.bundle.js"></script>	
	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugin/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/adminPanel.js"></script>
	<link rel="icon" href="<?php echo base_url() ?>assets/img/logo.png" sizes="32x32">
	<title>HD'R Comic Cafe</title>
</head>

<body>

	<!-- NAV -->
	<nav class="teal">
		<div class="nav-wrapper">
			<!-- <a href="<?php echo base_url() ?>" class="brand-logo"><i class="material-icons left">home</i>COMIC CAFE</a> -->
			<a href="<?php echo base_url() ?>" class="brand-logo"><p class="logo"><i class="fa fa-home"></i> Home</p></a>
			<a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons">menu</i></a>

			<ul class="right hide-on-med-and-down">
				<li><a href="<?php echo base_url() ?>admin/logout"><i class="material-icons left">account_box</i>Logout</a></li>
			</ul>

			<ul class="side-nav" id="mobile-demo">
				<li><a href="<?php echo base_url() ?>komik/semuaKomik/a"><i class="material-icons left">import_contacts</i>Lihat semua komik</a></li>
				<li><a href="<?php echo base_url() ?>novel/semuaNovel/a"><i class="material-icons left">import_contacts</i>Lihat semua novel</a></li>
				<li><a href="<?php echo base_url() ?>komik/formTambah"><i class="material-icons left">add</i>Tambah komik</a></li>
				<li><a href="<?php echo base_url() ?>novel/formTambah"><i class="material-icons left">add</i>Tambah novel</a></li>
				<li><a href="<?php echo base_url() ?>admin/ratingBuku"><i class="material-icons left">star</i>Lihat rating buku</a></li>
				<li><a href="<?php echo base_url() ?>admin/semuaRequest"><i class="material-icons left">feedback</i>Lihat request buku</a></li>
				<li><a href="<?php echo base_url() ?>admin/logout"><i class="material-icons left">account_box</i>Logout</a></li>
			</ul>
		</div>
	</nav>


	



	<div class="row">

		<!-- SIDEBAR -->
		<!-- <div class="sidebar hide-on-med-and-down col l2">

			<ul class="collection">
				<li class="collection-item avatar waves-effect waves-teal">
					<a href="<?php echo base_url() ?>komik/semuaKomik/a">
						<i class="material-icons circle red">import_contacts</i>
						<p class="teal-text">Lihat Semua Komik</p>
					</a>
				</li>
				<li class="collection-item avatar waves-effect waves-teal">
					<a href="<?php echo base_url() ?>novel/semuaNovel/a">
						<i class="material-icons circle green">import_contacts</i>
						<p class="teal-text">Lihat Semua Novel</p>
					</a>
				</li>
				<li class="collection-item avatar waves-effect waves-teal">
					<a href="<?php echo base_url() ?>komik/formTambah">
						<i class="material-icons circle blue">add</i>
						<p class="teal-text">Tambah Komik Baru</p>
					</a>
				</li>
				<li class="collection-item avatar waves-effect waves-teal">
					<a href="<?php echo base_url() ?>novel/formTambah">
						<i class="material-icons circle teal">add</i>
						<p class="teal-text">Tambah Novel Baru</p>
					</a>
				</li>
				<li class="collection-item avatar waves-effect waves-teal">
					<a href="<?php echo base_url() ?>admin/ratingBuku">
						<i class="material-icons circle purple">star</i>
						<p class="teal-text">Lihat Rating Buku</p>
					</a>
				</li>
				<li class="collection-item avatar waves-effect waves-teal">
				<a href="<?php echo base_url() ?>admin/semuaRequest">
						<i class="material-icons circle orange">feedback</i>
						<p class="teal-text">Lihat Request Buku</p>
					</a>
				</li>
			</ul>
		</div> -->

		<div class="sidebar hide-on-med-and-down col l2 grey white-text">
			<div class="section">
				<a href="<?php echo base_url() ?>admin">
					<img src="<?php echo base_url() ?>assets/img/logo.png" class="sidelogo">
				</a>
			</div>
			<div class="divider"></div>

			<div class="section">
				<a href="<?php echo base_url() ?>komik/semuaKomik/a">
					<i class="material-icons left white-text">import_contacts</i>
					<span class="white-text">Lihat Semua Komik</span>
				</a>
			</div>
			<div class="divider"></div>
			<div class="section">
				<a href="<?php echo base_url() ?>novel/semuaNovel/a">
					<i class="material-icons white-text left">import_contacts</i>
					<span class="white-text">Lihat Semua Novel</span>
				</a>
			</div>
			<div class="divider"></div>
			<div class="section">
				<a href="<?php echo base_url() ?>komik/formTambah">
					<i class="material-icons white-text left">add</i>
					<span class="white-text">Tambah Komik Baru</span>
				</a>
			</div>
			<div class="divider"></div>
			<div class="section">
				<a href="<?php echo base_url() ?>novel/formTambah">
					<i class="material-icons white-text left">add</i>
					<span class="white-text">Tambah Novel Baru</span>
				</a>
			</div>
			<div class="divider"></div>
			<div class="section">
				<a href="<?php echo base_url() ?>admin/ratingBuku">
					<i class="material-icons white-text left">star</i>
					<span class="white-text">Lihat Rating Buku</span>
				</a>
			</div>
			<div class="divider"></div>
			<div class="section">
				<a class="" href="<?php echo base_url() ?>admin/semuaRequest">
					<i class="material-icons left white-text">feedback</i>
					<span class="white-text">Lihat Request Buku</span>
				</a>
			</div>
			<!-- <div class="divider"></div> -->
		</div>

		<!-- CONTENT -->
		<div class="content col s12 m12 l10">
			<?php $this->load->view($content); ?>
		</div>
		<!-- <div class="hack"></div> -->
	</div>

	<div class="footer-top teal"></div>

	<!-- FOOTER -->
	<footer class="page-footer teal">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">HD'R Comic Cafe</h5>
					<p class="grey-text text-lighten-4">Address : jl. bunga coklat no.11, Malang, East Java</p>
					<p class="grey-text text-lighten-4">Phone : 0812-3306-0097</p>


				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Action</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="<?php echo base_url() ?>komik/semuaKomik/a">Lihat semua komik</a></li>
						<li><a class="grey-text text-lighten-3" href="<?php echo base_url() ?>novel/semuaNovel/a">Lihat semua novel</a></li>
						<li><a class="grey-text text-lighten-3" href="<?php echo base_url() ?>komik/formTambah">Tambah komik</a></li>
						<li><a class="grey-text text-lighten-3" href="<?php echo base_url() ?>novel/formTambah">Tambah novel</a></li>
						<li><a class="grey-text text-lighten-3" href="<?php echo base_url() ?>admin/ratingBuku">Lihat rating buku</a></li>
						<li><a class="grey-text text-lighten-3" href="<?php echo base_url() ?>admin/semuaRequest">Lihat request buku</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2016 Copyright HD'R Comic Cafe
			</div>
		</div>
	</footer>

	
</body>
</html>
