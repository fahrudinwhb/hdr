<div class="z-depth-1 padding-1vw border-top">
	<ul class="tabs">
		<li class="tab col s6"><a href="#komik" class="active green-text" >Komik</a></li>
		<li class="tab col s6"><a href="#novel" class="green-text">Novel</a></li>
	</ul>
	<div class="margin-top center-align">
		<div id="komik">
			<table class="bordered striped responsive-table">
				<thead>
					<tr>
						<th data-field="no">No</th>
						<th data-field="Nama">Nama</th>
						<th data-field="Email">Email</th>
						<th data-field="Judul">Judul</th>
						<th data-field="Action">Action</th>

					</tr>
				</thead>

				<tbody>
					<?php
					$cek = 1;
					foreach ($listKomik as $k => $komik) {
						$id_request =  $komik['id_request'];
						$judul =  $komik['judul'];
						$email =  $komik['email'];
						$nama =  $komik['nama'];

						echo '<tr>';
						echo '<td>'.$cek.'</td>';
						echo '<td>'.$nama.'</td>';
						echo '<td>'.$email.'</td>';
						echo '<td>'.$judul.'</td>'; ?>

						<td>
							<a href="#hapusRequestKomik<?php echo $cek ?>" class="modal-trigger tooltipped" data-position="bottom" data-tooltip="Hapus">
								<i class="material-icons">delete</i>
							</a>

							<a href="#balasRequestKomik<?php echo $cek ?>" class="modal-trigger tooltipped" data-position="top" data-tooltip="Balas">
								<i class="material-icons">mail</i>
							</a>

							<!-- Modal Structure Hapus -->
							<div id="hapusRequestKomik<?php echo $cek ?>" class="modal bottom-sheet">
								<div class="modal-content">
									<p class="flow-text center-align">Apakah anda yakin ingin menghapus request ini?</p>
								</div>
								<div class="divider"></div>
								<br>
								<div class=" center-align">
									<a href="<?php echo base_url().'admin/hapusRequest/'.$id_request?>" class="modal-action modal-close waves-effect waves-green btn-flat hoverable">Ya</a>
									<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat hoverable">Tidak</a>
								</div>
								<br>
							</div>

							<!-- Modal Structure Balas -->
							<div id="balasRequestKomik<?php echo $cek ?>" class="modal modal-fixed-footer">
								<form method="post" action="<?php echo base_url() ?>admin/balasRequest">
									<div class="modal-content">
										<!-- <h4>Balas Request</h4> -->
										<div class="input-field col s12 m6">
											<input name="email" id="email<?php echo $cek?>" type="email" class="validate" value="<?php echo $email?>" required>
											<label for="email<?php echo $cek?>">Email</label>
										</div>
										<div class="input-field col s12 m6">
											<input name="subject" id="subject<?php echo $cek?>" type="text" class="validate" value="Info HD'R Comic Cafe" required>
											<label for="subject<?php echo $cek?>">Subject</label>
										</div>
										<div class="input-field col s12">
											<textarea name="pesanKomik<?php echo $cek?>" required>
												Hai <b><?php echo $nama?></b>, <br>
												Komik berjudul <b><?php echo $judul?></b> yang anda request, sudah tersedia di HD'R Comic Cafe loh :) <br>
												Ayo segera berkunjung ke HD'R Comic Cafe untuk membaca novel tersebut secara gratis !
											</textarea>
											<script>
												CKEDITOR.replace('pesanKomik<?php echo $cek?>');
											</script>
										</div>
									</div>

									<div class="modal-footer">
										<!-- <button class="modal-action modal-close waves-effect waves-green btn-flat" type="submit" name="action">Kirim Email
										</button> -->
										<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
									</div>

								</form>
							</div>
						</td>

						<?php
						echo '</tr>';
						$cek += 1;
					}
					?>
				</tbody>
			</table>

		</div>

		<div id="novel">
			<table class="bordered striped">
				<thead>
					<tr>
						<th data-field="No">No</th>
						<th data-field="Nama">Nama</th>
						<th data-field="Email">Email</th>
						<th data-field="Judul">Judul</th>
						<th data-field="Action">Action</th>

					</tr>
				</thead>

				<tbody>
					<?php
					$cek = 1;
					foreach ($listNovel as $k => $novel) {
						$id_request =  $novel['id_request'];
						$judul =  $novel['judul'];
						$email =  $novel['email'];
						$nama =  $novel['nama'];

						echo '<tr>';
						echo '<td>'.$cek.'</td>';
						echo '<td>'.$nama.'</td>';
						echo '<td>'.$email.'</td>';
						echo '<td>'.$judul.'</td>'; ?>

						<td>
							<a href="#hapusRequestNovel<?php echo $cek ?>" class="modal-trigger tooltipped" data-position="bottom" data-tooltip="Hapus">
								<i class="material-icons">delete</i>
							</a>

							<a href="#balasRequestNovel<?php echo $cek ?>" class="modal-trigger tooltipped" data-position="top" data-tooltip="Balas">
								<i class="material-icons">mail</i>
							</a>

							<!-- Modal Structure Hapus -->
							<div id="hapusRequestNovel<?php echo $cek ?>" class="modal bottom-sheet">
								<div class="modal-content">
									<p class="flow-text center-align">Apakah anda yakin ingin menghapus request ini?</p>
								</div>
								<div class="divider"></div>
								<br>
								<div class=" center-align">
									<a href="<?php echo base_url().'admin/hapusRequest/'.$id_request?>" class="modal-action modal-close waves-effect waves-green btn-flat hoverable">Ya</a>
									<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat hoverable">Tidak</a>
								</div>
								<br>
							</div>

							<!-- Modal Structure Balas -->
							<div id="balasRequestNovel<?php echo $cek ?>" class="modal modal-fixed-footer">
								<form method="post" action="<?php echo base_url() ?>admin/balasRequest">
									<div class="modal-content">
									<div class="input-field col s12 m6">
											<input name="email" id="email<?php echo $cek?>" type="email" class="validate" value="<?php echo $email?>" required>
											<label for="email<?php echo $cek?>">Email</label>
										</div>
										<div class="input-field col s12 m6">
											<input name="subject" id="subject<?php echo $cek?>" type="text" class="validate" value="Info HD'R Comic Cafe" required>
											<label for="subject<?php echo $cek?>">Subject</label>
										</div>
										<div class="input-field col s12">
											<textarea name="pesanNovel<?php echo $cek?>" required>
												Hai <b><?php echo $nama?></b>, <br>
												Novel berjudul <b><?php echo $judul?></b> yang anda request, sudah tersedia di HD'R Comic Cafe loh :) <br>
												Ayo segera berkunjung ke HD'R Comic Cafe untuk membaca komik tersebut secara gratis !
											</textarea>
											<script>
												CKEDITOR.replace('pesanNovel<?php echo $cek?>');
											</script>
										</div>
									</div>

									<div class="modal-footer">
										
										<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
									</div>

								</form>
							</div>
						</td>

						<?php
						echo '</tr>';
						$cek += 1;
					}
					?>

				</tbody>
			</table>
			
		</div>	
	</div>
</div>

