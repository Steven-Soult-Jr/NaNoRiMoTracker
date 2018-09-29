</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('home') ?>">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('update') ?>">Track Progress</a>
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


<div class="jumbotron">
<?php if(isset($writer)):
	if(isset($submitted)): ?>
		<h3>Your word count has been updated to <?php echo $wordcount ?>, <?php echo $writer ?>!</h3>
		<p><a class="btn btn-primary btn-lg" href="<?php echo base_url('home') ?>" role="button">Home &raquo;</a></p>
	<?php else:
		echo validation_errors();
		echo form_open('update/submit');
		?>
		<h5>Please enter your current word count, <?php echo $writer; ?>.</h5>
		<input type="hidden" name="writer" value="<?php echo $writer; ?>">
		<input type="number" name="wordcount" min="0" required>
		<div><input type="submit" value="Submit" /></div>
		<?php echo form_close();
		if(isset($numBooks)): ?>
		
			<table class="table table-dark">
				<tr><th>Book Name</th><th>Book Description</th><th>Words</th><th>Research/Other Words</th></tr>
				<?php for($i = 0; $i < $numBooks; $i++): ?>
					<tr><td><?php echo $books[$i]['bookname']; ?></td><td><?php echo $books[$i]['bookdesc']; ?></td><td><?php echo $books[$i]['words']; ?></td><td><?php echo $books[$i]['extrawords']; ?></td></tr>
				<?php endfor; ?>
			</table>
	<?php endif;
	endif;

	else: ?>
    <div class="container">
		<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Select User
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="<?php echo base_url('update/user/Steve/'); ?>">Steve Sr.</a>
					<a class="dropdown-item" href="<?php echo base_url('update/user/Susanne/'); ?>">Susanne</a>
					<a class="dropdown-item" href="<?php echo base_url('update/user/Michelle/'); ?>">Michelle</a>
					<a class="dropdown-item" href="<?php echo base_url('update/user/Trevor/'); ?>">Trevor</a>
					<a class="dropdown-item" href="<?php echo base_url('update/user/Katherine/'); ?>">Katherine</a>
					<a class="dropdown-item" href="<?php echo base_url('update/user/Greg/'); ?>">Greg</a>
					<a class="dropdown-item" href="<?php echo base_url('update/user/Steven/'); ?>">Steven Jr.</a>
					<a class="dropdown-item" href="<?php echo base_url('update/user/Tamarah/'); ?>">Tamarah</a>
				</div>
		</div>
    </div>
<?php endif; ?>
</div>