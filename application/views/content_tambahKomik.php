<div class="z-depth-1 padding-1vw border-top">
	<ul class="tabs">
		<li class="tab col s6"><a href="#judul" class="active green-text" >Tambah Judul Baru</a></li>
		<li class="tab col s6"><a href="#volume" class="green-text">Tambah Volume Baru</a></li>
	</ul>

	<div id="judul">
		<form method="post" class="fjkomik" enctype="multipart/form-data" action="<?php echo base_url() ?>komik/tambahJudul">
			<div class="row">
				<div class="input-field col s12">
					<input id="judul_komik" name="judul" type="text" class="validate" required>
					<label for="judul_komik">Judul Komik</label>
				</div>
				<div class="file-field input-field col s12">
					<div class="btn teal">
						<span>Gambar</span>
						<input name="gambar" type="file">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text" required>
					</div>
				</div>
				<div class="input-field col s12">
					<textarea name="deskripsi" required>Deskripsi</textarea>
					<script>
						CKEDITOR.replace('deskripsi');
					</script>
				</div>
				<div class="input-field col s12">
					<button class="btn waves-effect waves-light right teal" type="submit" name="action">Tambah
						<i class="material-icons right">send</i>
					</button>
				</div>
				
				<div class="hack2"></div>		
			</div>
		</form>

	</div>

	<div id="volume">
		<ul class="collapsible popout tbanyak" data-collapsible="accordion">
			<li>
				<div class="collapsible-header teal lighten-1 white-text waves-effect waves-light"><i class="material-icons">filter_drama</i>
					<span class="flow-text ">Masukkan volume satu persatu</span>
				</div>
				<div class="collapsible-body">
					<div class="row">
						<form method="post" class="col s12 tmbhvolume" action="<?php echo base_url() ?>komik/tambahVolume">
							<div class="row">
								<div class="input-field col s12">
									<select name="id_komik" class="icons" required>
										<option value="" disabled selected>Judul Komik</option>
										<?php 
										foreach ($listKomik as $k => $komik) {
											$id_komik =  $komik['id_komik'];
											$judul =  $komik['judul'];
											$gambar =  $komik['gambar'];
											echo "<option value='".$id_komik."' data-icon='".base_url()."assets/img/".$gambar."' class='circle'>".$judul."</option>";
										}
										?>
									</select>
								</div>

								<div class="input-field col s12">
									<input name="volume" id="vol" type="number" class="validate" required>
									<label for="vol">Volume</label>
								</div>

								<div id="warningsatu"></div>
								<div class="input-field col s12">
									<button class="btn waves-effect waves-light right teal" type="submit" id="satu" name="action">Tambah
										<i class="material-icons right">send</i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</li>

			<li>
				<div class="collapsible-header teal lighten-1 white-text waves-effect waves-light"><i class="material-icons">filter_drama</i>
					<span class="flow-text ">Masukkan volume dalam jumlah banyak sekaligus</span>
				</div>
				<div class="collapsible-body">
					<div class="row">
						<form method="post" class="col s12 tmbhvolume" action="<?php echo base_url() ?>komik/tambahVolumeBanyak">
							<div class="row">
								<div class="input-field col s12">
									<select name="id_komik" class="icons" required>
										<option value="" disabled selected>Judul Komik</option>
										<?php 
										foreach ($listKomik as $k => $komik) {
											$id_komik =  $komik['id_komik'];
											$judul =  $komik['judul'];
											$gambar =  $komik['gambar'];
											echo "<option value='".$id_komik."' data-icon='".base_url()."assets/img/".$gambar."' class='circle'>".$judul."</option>";
										}
										?>
									</select>
								</div>

								<div class="input-field col s6">
									<input id="mulai" name="mulai" type="number" class="validate" required>
									<label for="mulai">Volume awal</label>
								</div>
								<div class="input-field col s6">
									<input id="sampai" name="sampai" type="number" class="validate" required>
									<label for="sampai">Volume akhir</label>
								</div>
								<div id="warning"></div>
								<div class="input-field col s12">
									<button class="btn waves-effect waves-light right teal" type="submit" id="banyak">Tambah
										<i class="material-icons right">send</i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul>
	</div>

</div>