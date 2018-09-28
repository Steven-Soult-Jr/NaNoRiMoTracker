	<script src="<?php echo base_url('assets/js/loader.js'); ?>"></script>
	<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		
		function drawChart() {
			var data = google.visualization.arrayToDataTable(<?php echo json_encode($values); ?>);
			var options = { title: 'Word Count', curveType: 'function', legend: { position: 'bottom' }, hAxis: {title: 'Date'} };
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
			chart.draw(data, options);
		}
	</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/home') ?>">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/update') ?>">Track Progress</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inspiration</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="https://www.forbes.com/sites/suwcharmananderson/2012/11/09/five-links-for-nanowrimo-inspiration/#2609766c2dc1">Forbes</a>
              <a class="dropdown-item" href="http://nanowrimoinspiration.tumblr.com/">Tumblr</a>
              <a class="dropdown-item" href="https://www.pinterest.com/maddi_dru/nanowrimo-inspiration/">Pinterest</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Welcome to the NaNoWriMo Tracker!</h1>
          <p>This is the tracking page for family progress toward our NaNoWriMo goals.</p>
          <a class="btn btn-primary btn-lg" href="https://nanowrimo.org/" role="button">Learn more &raquo;</a>
		  <a class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/update') ?>" role="button">Enter Progress &raquo;</a>
        </div>
      </div>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
			
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Select Year
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="<?php echo base_url('index.php/home') ?>">2017</a>
					<a class="dropdown-item" href="<?php echo base_url('index.php/home/2018') ?>">2018</a>
				</div>
			</div>
		
          <div id="curve_chart" style="width: 900px; height: 500px"></div>
		  
		  </main>
		<hr>

      </div> <!-- /container -->

    </main>