<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/font/material-icons-regular/material.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/pill.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/front.css"/>

	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.scrollUp.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/front.js"></script>
	<link rel="icon" href="<?php echo base_url() ?>assets/img/logo.png" sizes="32x32">
	<title>HD'R Comic Cafe</title>
</head>

<body class="gradien">
	<!-- NAV -->
	<nav class="orange">
		<div class="nav-wrapper">
			<a href="<?php echo base_url() ?>" class="brand-logo"><p class="logo"><i class="fa fa-home"></i> COMIC CAFE</p></a>
			<a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons">menu</i></a>

			<!-- Menu Big Screen -->
			<ul class="right hide-on-med-and-down">
				<li>
					<a class='dropdown-button' data-hover="true" data-beloworigin="true" href='<?php echo base_url() ?>komik' data-activates='dropdownNavKomik'><i class="material-icons left">import_contacts</i>Komik</a>
					<!-- Dropdown Structure -->
					<ul id='dropdownNavKomik' class='dropdown-content'>
						<li><a class="orange-text" href='<?php echo base_url() ?>komik'>All</a></li>
						<li class="divider"></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>komik/cari?q=action'>Action</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>komik/cari?q=comedy'>Comedy</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>komik/cari?q=mystery'>Mystery</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>komik/cari?q=romance'>Romance</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>komik/cari?q=sport'>Sport</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>komik/cari?q=Slice of life'>Slice of Life</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>komik/cari?q=adventure'>Adveture</a></li>
					</ul>
				</li>
				<li>
					<a  class='dropdown-button' data-hover="true" data-beloworigin="true" href="<?php echo base_url() ?>novel" data-activates='dropdownNavNovel'><i class="material-icons left">import_contacts</i>Novel</a>
					<ul id='dropdownNavNovel' class='dropdown-content'>
						<li><a class="orange-text" href='<?php echo base_url() ?>novel'>All</a></li>
						<li class="divider"></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>novel/cari?q=fiksi'>Fiksi</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>novel/cari?q=misteri'>Misteri</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>novel/cari?q=roman'>Roman</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>novel/cari?q=fantasi'>Fantasi</a></li>
						<li><a class="orange-text" href='<?php echo base_url() ?>novel/cari?q=kehidupan'>Kehidupan</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url() ?>home/form_request"><i class="material-icons left">feedback</i>Request</a></li>
				<li><a class="modal-trigger" href="#login"><i class="material-icons left">account_box</i>Admin</a></li>
				
			</ul>
			
			<!-- Menu Small Screen -->
			<ul class="side-nav" id="mobile-demo">
				<li><a class="modal-triger" href='<?php echo base_url() ?>komik'><i class="material-icons left">import_contacts</i>Komik</a></li>
				<li><a class="modal-trigger" href="<?php echo base_url() ?>novel"><i class="material-icons left">import_contacts</i>Novel</a></li>
				<li><a class="modal-trigger" href="<?php echo base_url() ?>home/form_request"><i class="material-icons left">feedback</i>Request</a></li>
				<li><a class="modal-trigger" href="#login"><i class="material-icons left">account_box</i>Admin</a></li>
			</ul>
		</div>
	</nav>

	<!-- CONTENT -->
	<?php $this->load->view($content); ?>

	<!-- FOOTER -->
	<footer class="page-footer orange">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">HD'R Comic Cafe</h5>
					<p class="grey-text text-lighten-4">Address : jl. bunga coklat no.11, Malang, East Java</p>
					<p class="grey-text text-lighten-4">Phone : 0812-3306-0097</p>


				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Find Us On</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="https://twitter.com/comiccafe_hdr">Twitter</a></li>
						<li><a class="grey-text text-lighten-3" href="https://www.facebook.com/HdrComicCafe">Facebook</a></li>
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

	<!-- Modal Structure Login -->
	<div id="login" class="modal">
		<div class="modal-content">
			<div class="row">
				<form method="post" class="col s12" action="<?php echo base_url() ?>admin/login">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">account_circle</i>
							<input id="username" name="username" type="text" class="validate">
							<label for="username">Username</label>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">mode_edit</i>
							<input id="password" name="password" type="password" class="validate">
							<label for="password">Password</label>
						</div>
						<div class="input-field col s12">
							<button class="btn waves-effect waves-light right orange" type="submit" name="action">Login
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Structure Rating -->
	<div id="ratingSukses" class="modal bottom-sheet">
		<div class="modal-content">
			<p class="flow-text center-align">Berhasil memberi rating</p>
		</div>
	</div>

	<!-- Modal Structure Request -->
	<div id="requestSukses" class="modal bottom-sheet">
		<div class="modal-content">
			<p class="flow-text center-align">Berhasil melakukan request</p>
		</div>
	</div>


	<script type="text/javascript">
		<?php 

		if(isset($login)){
			echo "$('#login').openModal()";
		} 

		if(isset($ratingSukses)){
			echo "$('#ratingSukses').openModal()";
		}

		if(isset($requestSukses)){
			echo "$('#requestSukses').openModal()";
		}

		?>

		$(function () {
			$("#nama").val($.cookie("cnama"));
			$("#email").val($.cookie("cemail")); 
		});  
	</script>
</body>
</html>
