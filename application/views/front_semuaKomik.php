<div class="slider"> <!-- tambahi class fullscreen  -->
	<ul class="slides">
		<?php
		foreach ($listSlider as $k => $slider) {
			$id_komik =  $slider['id_komik'];
			$judul =  $slider['judul'];
			$gambar =  $slider['gambar'];
			$deskripsi =  $slider['deskripsi'];
			$rating =  $slider['rating'];
			?>
			<li>
				<img src="<?php echo base_url().'assets/img/'.$gambar ?>">
				<div class="caption legft-align">
					<span class="shadow2"> <?php echo $judul ?></span><br><br> 
					<span class="light grey-text text-lighten-3 shadow"><i class="fa fa-star"></i> <?php echo $rating ?>/5</span>
				</div>
			</li>
			<?php
		}
		?>
	</ul>
</div>

<br>
<div class="container">
	<div class="row z-depth-1 padding-2vw border-top white">
		<form method="get" action="<?php echo base_url() ?>komik/cari">
			<div class="row">
				<div class="input-field col s11">
					<input name="q" id="q" type="text" class="validate" required>
					<label for="q">Pencarian</label>
				</div>
				<div class="input-field col s1">
					<button class="btn-flat waves-effect waves-light right" type="submit">
						<i class="material-icons right">search</i>
					</button>
				</div>
			</div>
		</form>

		<?php
		if(isset($listKomik[0]['judul'])) { ?>

		<div class="row">
			<?php
			$cek = 0;
			foreach ($listKomik as $k => $komik) {
				$id_komik =  $komik['id_komik'];
				$judul =  $komik['judul'];
				$gambar =  $komik['gambar'];
				$deskripsi =  $komik['deskripsi'];
				$rating =  $komik['rating'];
				?>

				<div class="col s12 m4 l3">
					<div class="card hoverable"> <!-- small, medium, large -->
						<div class="card-image waves-effect waves-block waves-light gambar">
							<img class="activator" src="<?php echo base_url().'assets/img/'.$gambar ?>">
							<span class="card-title"><span class="shadow activator"><i class="fa fa-star"></i> <?php echo $rating ?>/5</span></span>
						</div>
						<div class="card-content judul-card">
							<span class="card-title activator grey-text text-darken-4">
								<div class="row">
									<div class="col s10">
										<p class="judul-font truncate activator"><?php echo $judul ?></p>
									</div>
									<div class="col s2">
										<i class="material-icons right">more_vert</i>
									</div>
								</div>
							</span>
						</div>
						<div class="card-reveal">
							<div class="row">
								<a class="left orange-text modal-trigger trate" href="#rate<?php echo $cek ?>">Rate</a>
								<a class="right orange-text modal-trigger" href="<?php echo base_url().'komik/koleksi/'.$id_komik?>">Lihat Koleksi</a>
							</div>

							<div class="divider"></div>
							<div class="card-title grey-text text-darken-4">
								<p class="judul-font"><?php echo $judul ?>
									<i class="material-icons right">close</i>
								</p>
							</div>
							<i class="fa fa-star"></i> <?php echo $rating ?>
							<p><?php echo $deskripsi ?></p>

						</div>
					</div>
				</div>


				<!-- Modal Structure -->
				<div id="rate<?php echo $cek ?>" class="modal bottom-sheet">
					<div class="modal-content">
						<p class="flow-text center-align ratemsg">Berikan rating untuk buku ini !</p>
						<div class=" center-align">

							<form method="post" action="<?php echo base_url() ?>komik/rate">
								<div class="row">
									<div class="col s12 m8 offset-m2">
										<div class="input-field col s12 m6 l6">
											<input placeholder="Masukkan nama" name="nama" type="text" id="rnama<?php echo $cek ?>" class="validate inama rnama<?php echo $cek ?>" required>
											<label for="rnama<?php echo $cek ?>">Nama</label>
										</div>
										<div class="input-field col s12 m6 l6">
											<input placeholder="Masukkan email" name="email" type="email" id="remail<?php echo $cek ?>" class="validate iemail remail<?php echo $cek ?>" required>
											<label for="remail<?php echo $cek ?>"  data-error="wrong">Email</label>
										</div>

										<input name="id_komik" type="text" value="<?php echo $id_komik?>" hidden>

										<div class="input-field col s2 m2 offset-m1">
											<button class="btn-floating btn-large center-align waves-effect waves-light white brate1 brate1_<?php echo $cek ?>" name="rate" value="1" type="submit">
												<i class="fa fa-star grey-text rate1"></i>
											</button>
										</div>

										<div class="input-field col m2 s2">
											<button class="btn-floating btn-large center-align waves-effect waves-light white brate2 brate2_<?php echo $cek ?>" name="rate" value="2" type="submit">
												<i class="fa fa-star grey-text rate2"></i>
											</button>
										</div>
										<div class="input-field col m2 s2">
											<button class="btn-floating btn-large center-align waves-effect waves-light white brate3 brate3_<?php echo $cek ?>" name="rate" value="3" type="submit">
												<i class="fa fa-star grey-text rate3"></i>
											</button>
										</div>
										<div class="input-field col m2 s2">
											<button class="btn-floating btn-large center-align waves-effect waves-light white brate4 brate4_<?php echo $cek ?>" name="rate" value="4" type="submit">
												<i class="fa fa-star grey-text rate4"></i>
											</button>
										</div>
										<div class="input-field col m2 s2">
											<button class="btn-floating btn-large center-align waves-effect waves-light white brate5 brate5_<?php echo $cek ?>" name="rate" value="5" type="submit">
												<i class="fa fa-star grey-text rate5"></i>
											</button>
										</div>
									</div>
								</div>
							</form>

							<script type="text/javascript">
								$(".brate5_<?php echo $cek ?>, .brate4_<?php echo $cek ?>, .brate3_<?php echo $cek ?>, .brate2_<?php echo $cek ?>, .brate1_<?php echo $cek ?>").click(function () {
									$.removeCookie("cnama");
									$.removeCookie("cemail");
									$.cookie("cnama", $(".rnama<?php echo $cek ?>").val());
									$.cookie("cemail", $(".remail<?php echo $cek ?>").val());
								});
							</script>

						</div>
					</div>
				</div>

				<?php $cek += 1;
			}

			echo '</div>';

		} else { ?>
		<h1 class="flow-text center-align">tidak ada komik yang tersedia</h1>
		<div class="center-align">
			<a class="btn waves-effect waves-light orange" href="<?php echo base_url() ?>home/form_request">Request komik ini
				<i class="material-icons right">feedback</i>
			</a>
		</div>
		<br>
		<?php
	}

	echo '</div>';
	echo '</div>';
	$this->load->view('pagination'); ?>
