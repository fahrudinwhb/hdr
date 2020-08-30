<div class="row z-depth-1 padding-2vw">
	<div class="col s12 m8 offset-m2 depth-1 white">

		<?php
		if(isset($listKomik[0]['judul'])) { ?>
		<div class="row">
			<div class="col s12">
				<div class="card"> <!-- small, medium, large -->
					<div class="card-image">
						<img src="<?php echo base_url().'assets/img/'.$listKomik[0]['gambar']?>" class="materialboxed">
						<span class="card-title"><?php echo $listKomik[0]['judul']?></span>
					</div>
					<div class="card-content">
						<span class="card-title orange-text"><i class="fa fa-star"></i> <?php echo $listKomik[0]['rating'] ?></span>
						<p><?php echo $listKomik[0]['deskripsi']?></p>
					</div>
				</div>
			</div>
		</div>

		<table class="bordered striped centered">
			<thead>
				<tr>
					<th data-field="no">No</th>
					<th data-field="judul">Judul</th>
					<th data-field="volume">Volume</th>
					<?php 
					$sess = $this->session->all_userdata();
					if (isset($sess['login'])) {
						echo '<th data-field="action">Action</th>';
					}
					?>
				</tr>
			</thead>

			<tbody>
				<?php
				$cek = 1;
				foreach ($listKomik as $k => $komik) {
					$id_komik =  $komik['id_komik'];
					$judul =  $komik['judul'];
					$gambar =  $komik['gambar'];
					$deskripsi =  $komik['deskripsi'];
					$id_volume =  $komik['id_volume'];
					$volume =  $komik['volume']; 
					$rating = $komik['rating'];

					echo '<tr>';
					echo '<td>'.$cek.'</td>';
					echo '<td>'.$judul.'</td>';
					echo '<td> volume '.$volume.'</td>';

					if (isset($sess['login'])) { 
						?>
						<td>
							<a href="#hapusKoleksi<?php echo $cek ?>" class="modal-trigger">
								<i class="material-icons">delete</i>
							</a>

							<!-- Modal Structure -->
							<div id="hapusKoleksi<?php echo $cek ?>" class="modal bottom-sheet">
								<div class="modal-content">
									<p class="flow-text center-align">Apakah anda yakin ingin menghapus volume ini?</p>
								</div>
								<div class="divider"></div>
								<br>
								<div class=" center-align">
									<a href="<?php echo base_url().'komik/hapusKoleksi/'.$id_volume?>" class="modal-action modal-close waves-effect waves-green btn-flat hoverable">Ya</a>
									<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat hoverable">Tidak</a>
								</div>
								<br>
							</div>
							<?php	
						}
						$cek += 1;
					}
					echo '</td>
				</tr>';
				?>

			</tbody>
		</table>
		<!-- <br> -->
		<?php
	} else {
		echo '<h1 class="flow-text center-align">tidak ada koleksi</h1>';
	} ?>

</div>
<!-- <div class="hack"></div> -->
</div>
