<div class="row">
	<div id="request" class="col s12 m8 offset-m2 z-depth-1 white">
		<span class="flow-text center-align"><p class="border-bottom white-text">Masukkan request buku yang ingin anda baca di HD'R Comic Cafe. <br>Kami akan mengabari anda melalui email apabila buku tersebut sudah tersedia.</p></span>
		<form method="post" action="<?php echo base_url() ?>home/request">
			<div class="row">
				<div class="input-field col s12">
					<input id="nama" name="nama" type="text" class="validate" required>
					<label for="nama">Nama</label>
				</div>
				<div class="input-field col s12">
					<input id="email" name="email" type="email" class="validate" required>
					<label for="email">Email</label>
				</div>
				<p>
					<input name="jenis" type="radio" id="komik" value="komik" required />
					<label for="komik">Komik</label>
				</p>
				<p>
					<input name="jenis" type="radio" id="novel" value="novel" required />
					<label for="novel">Novel</label>
				</p>
				<div class="input-field col s12">
					<input id="judul" name="judul" type="text" class="validate" required>
					<label for="judul">Judul Buku</label>
				</div>

				<div class="input-field col s12">
					<button class="btn waves-effect waves-light right orange bsend" type="submit" name="action">Kirim
						<i class="material-icons right">send</i>
					</button>
				</div>
				<div class="hack2"></div>
			</div>
		</form>
	</div>
</div>