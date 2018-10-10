		<main role="main">
			<div class="jumbotron">
				<div class="container">
					<h1 class="display-3">Welcome to the NaNoWriMo Tracker!</h1>
					<p>This is the tracking page for family progress toward our NaNoWriMo goals.</p>
					<a class="btn btn-primary btn-lg" href="<?php echo base_url('update'); ?>" role="button">Enter Progress &raquo;</a>
				</div>
			</div>
			<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Select Year
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="<?php echo base_url('home'); ?>">All</a>
						<?php for($i = 2017; $i <= (int) date("Y"); $i++): ?>
						<a class="dropdown-item" href="<?php echo base_url('home/').$i; ?>"><?php echo $i; ?></a>
						<?php endfor; ?>
					</div>
				</div>
				<?php if(isset($year)) {
					echo "Displaying wordcount for the year 20".$year;
				} ?>
				<div id="curve_chart" style="width: 900px; height: 500px"></div>
			</main>
			<hr>
		</main>
		<script src="<?php echo base_url('assets/js/loader.js'); ?>"></script>
		<script type="text/javascript">
			google.charts.load('current', {packages:['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			
			function drawChart() {
				var data = google.visualization.arrayToDataTable(<?php echo json_encode($values); ?>);
				var options = { title: 'Word Count', curveType: 'function', width: $(window).width()*0.75, legend: { position: 'bottom' }, hAxis: {title: 'Date'}, vAxis: {title: 'Words', viewWindow: {min: 0}} };
				var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
				chart.draw(data, options);
			}
		</script>
