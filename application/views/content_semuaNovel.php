<div class="row z-depth-1 padding-2vw border-top">
	<form method="get" action="<?php echo base_url() ?>novel/cari">
		<div class="row">
			<div class="input-field col s11">
				<input id="q" name="q" type="text" class="validate" required>
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
	if(isset($listNovel[0]['judul'])) { ?>

	<div class="row">
		<?php
		$cek = 0;
		foreach ($listNovel as $k => $novel) {
			$id_novel =  $novel['id_novel'];
			$judul =  $novel['judul'];
			$gambar =  $novel['gambar'];
			$deskripsi =  $novel['deskripsi'];
			$rating =  $novel['rating'];
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
							<a class="left teal-text modal-trigger" href="#hapusJudul<?php echo $cek ?>">Hapus</a>
						</div>
						
						<div class="divider"></div>
						<div class="card-title grey-text text-darken-4">
							<p class="judul-font"><?php echo $judul ?>
								<i class="material-icons right">close</i>
							</p>
						</div>
						<p><?php echo $deskripsi ?></p>

					</div>
				</div>
			</div>


			<!-- Modal Structure -->
			<div id="hapusJudul<?php echo $cek ?>" class="modal bottom-sheet">
				<div class="modal-content">
					<p class="flow-text center-align">Apakah anda yakin ingin menghapus novel ini?</p>
				</div>
				<div class="divider"></div>
				<br>
				<div class=" center-align">
					<a href="<?php echo base_url().'novel/hapusJudul/'.$id_novel?>" class="modal-action modal-close waves-effect waves-green btn-flat hoverable">Ya</a>
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat hoverable">Tidak</a>
				</div>
				<br>
			</div>

			<?php 
			$cek += 1;
		}
		?>
	</div>

	<?php 

} else {
	echo '<h1 class="flow-text center-align">tidak ada novel yang tersedia</h1>';
}
echo '</div>';
$this->load->view('pagination'); 
?>
