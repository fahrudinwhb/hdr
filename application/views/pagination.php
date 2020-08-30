<?php 
if($pagination == 'komik'){
	$buku = 'komik/semuaKomik/';
} else if($pagination == 'novel'){
	$buku = 'novel/semuaNovel/';
} else{
	$buku = '';
}
?>

<div class="row center-align">
	<ul class="pagination">
		<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
		<li <?php if($abjad=='a'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>a">A</a></li>
		<li <?php if($abjad=='b'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>b">B</a></li>
		<li <?php if($abjad=='c'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>c">C</a></li>
		<li <?php if($abjad=='d'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>d">D</a></li>
		<li <?php if($abjad=='e'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>e">E</a></li>
		<li <?php if($abjad=='f'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>f">F</a></li>
		<li <?php if($abjad=='g'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>g">G</a></li>
		<li <?php if($abjad=='h'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>h">H</a></li>
		<li <?php if($abjad=='i'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>i">I</a></li>
		<li <?php if($abjad=='j'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>j">J</a></li>
		<li <?php if($abjad=='k'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>k">K</a></li>
		<li <?php if($abjad=='l'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>l">L</a></li>
		<li <?php if($abjad=='m'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>m">M</a></li>
		<li <?php if($abjad=='n'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>n">N</a></li>
		<li <?php if($abjad=='o'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>o">O</a></li>
		<li <?php if($abjad=='p'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>p">P</a></li>
		<li <?php if($abjad=='q'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>q">Q</a></li>
		<li <?php if($abjad=='r'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>r">R</a></li>
		<li <?php if($abjad=='s'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>s">S</a></li>
		<li <?php if($abjad=='t'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>t">T</a></li>
		<li <?php if($abjad=='u'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>u">U</a></li>
		<li <?php if($abjad=='v'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>v">V</a></li>
		<li <?php if($abjad=='w'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>w">W</a></li>
		<li <?php if($abjad=='x'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>x">X</a></li>
		<li <?php if($abjad=='y'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>y">Y</a></li>
		<li <?php if($abjad=='z'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku ?>z">Z</a></li>
		<li <?php if($abjad=='else'){echo 'class="active"';} else{	echo 'class="waves-effect"';}?>><a href="<?php echo base_url().$buku?>else">#</a></li>
		<li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
	</ul>
</div>

