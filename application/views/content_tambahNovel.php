<div id="judulNovel" class="col s12 z-depth-1 padding-1vw border-top">

	<form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>novel/tambahJudul">
		<div class="row">
			<div class="input-field col s12">
				<input id="judul" name="judul" type="text" class="validate" required>
				<label for="judul">Judul Novel</label>
			</div>
			<div class="file-field input-field col s12">
				<div class="btn teal">
					<span>Gambar</span>
					<input name="gambar" type="file" required>
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
