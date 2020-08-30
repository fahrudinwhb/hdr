<div class="z-depth-1 padding-1vw">
	<div class="row">
		<div class="col m6 l6">
			
			<a href="#!" class="btn waves-effect RKT">Rating komik tertinggi</a>
			<a href="#!" class="btn waves-effect RKR red">Rating komik terendah</a>
		</div>
		<div class="col m6 l6">
			
			<a href="#!" class="btn waves-effect RNT">Rating novel tertinggi</a>
			<a href="#!" class="btn waves-effect RNR red">Rating novel terendah</a>
		</div>
	</div>

	<canvas id="rating" width="100" height="45"></canvas>

	<script>
		var dataBar = {
			labels: [<?php foreach ($listKomikTinggi as $k => $komik) {echo "'".$komik['judul']."',"; }?>],
			datasets: [{
				label: "Rating komik tertinggi",
				backgroundColor: "rgba(0,99,132,0.2)",
				borderColor: "rgba(0,99,132,1)",
				borderWidth: 1,
				hoverBackgroundColor: "rgba(0,99,132,0.4)",
				hoverBorderColor: "rgba(0,99,132,1)",
				data: [<?php foreach ($listKomikTinggi as $k => $komik) {echo $komik['rating'].","; }?>],
			}]
		};



		$(".RKT").click(function () {

			var newDatasets = {
				label: "Rating komik tertinggi",
				backgroundColor: "rgba(0,99,132,0.2)",
				borderColor: "rgba(0,99,132,1)",
				borderWidth: 1,
				hoverBackgroundColor: "rgba(0,99,132,0.4)",
				hoverBorderColor: "rgba(0,99,132,1)",
				data: [<?php foreach ($listKomikTinggi as $k => $komik) {echo $komik['rating'].","; }?>]
			};

			dataBar.labels.splice(0, 10);
			<?php foreach ($listKomikTinggi as $k => $komik) {
				$judul = str_replace("'", "", $komik['judul']);
				echo "dataBar.labels.push('".$judul."');"; 
			}?>

			dataBar.datasets.splice(0, 1);
			dataBar.datasets.push(newDatasets);

			window.myChart.update();
		});

		$(".RKR").click(function () {

			var newDatasets = {
				label: "Rating komik terendah",
				backgroundColor: "rgba(255,99,132,0.2)",
				borderColor: "rgba(255,99,132,1)",
				borderWidth: 1,
				hoverBackgroundColor: "rgba(255,99,132,0.4)",
				hoverBorderColor: "rgba(255,99,132,1)",
				data: [<?php foreach ($listKomikRendah as $k => $komik) {echo $komik['rating'].","; }?>]
			};

			dataBar.labels.splice(0, 10);
			<?php foreach ($listKomikRendah as $k => $komik) {
				$judul = str_replace("'", "", $komik['judul']);
				echo "dataBar.labels.push('".$judul."');"; 
			}?>

			dataBar.datasets.splice(0, 1);
			dataBar.datasets.push(newDatasets);

			window.myChart.update();
		});

		$(".RNT").click(function () {

			var newDatasets = {
				label: "Rating novel tertinggi",
				backgroundColor: "rgba(0,99,132,0.2)",
				borderColor: "rgba(0,99,132,1)",
				borderWidth: 1,
				hoverBackgroundColor: "rgba(0,99,132,0.4)",
				hoverBorderColor: "rgba(0,99,132,1)",
				data: [<?php foreach ($listNovelTinggi as $k => $novel) {echo $novel['rating'].","; }?>]
			};

			dataBar.labels.splice(0, 10);
			<?php foreach ($listNovelTinggi as $k => $novel) {
				$judul = str_replace("'", "", $novel['judul']);
				echo "dataBar.labels.push('".$judul."');"; 
			}?>

			dataBar.datasets.splice(0, 1);
			dataBar.datasets.push(newDatasets);

			window.myChart.update();
		});

		$(".RNR").click(function () {

			var newDatasets = {
				label: "Rating novel terendah",
				backgroundColor: "rgba(255,17,132,0.2)",
				borderColor: "rgba(255,99,132,1)",
				borderWidth: 1,
				hoverBackgroundColor: "rgba(255,99,132,0.4)",
				hoverBorderColor: "rgba(255,99,132,1)",
				data: [<?php foreach ($listNovelRendah as $k => $novel) {echo $novel['rating'].","; }?>]
			};

			dataBar.labels.splice(0, 10);
			<?php foreach ($listNovelRendah as $k => $novel) {
				$judul = str_replace("'", "", $novel['judul']);
				echo "dataBar.labels.push('".$judul."');"; 
			}?>

			dataBar.datasets.splice(0, 1);
			dataBar.datasets.push(newDatasets);

			window.myChart.update();
		});

		var canvas = $('#rating');
		var myChart = new Chart(canvas, {
			type: 'horizontalBar',
			data: dataBar,
			options: {
				scales: {
					xAxes: [{
						ticks: {
							beginAtZero:true,
							max:5
						}
					}]
				}, 
				legend: {
					position: 'top',
				},
			}
		});
	</script>
</div>