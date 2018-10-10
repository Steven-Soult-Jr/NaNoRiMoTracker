		<div class="jumbotron">
			<?php if(isset($writer)):
			if(isset($submitted)): ?>
			<h3>Your word count has been updated to <?php echo $wordCount ?>, <?php echo $writer ?>!</h3>
			<p><a class="btn btn-primary btn-lg" href="<?php echo base_url('Home') ?>" role="button">Home &raquo;</a></p>
			<?php else:
			echo validation_errors();
			echo form_open('Update/submit'); ?>
				<h5>Please enter your current word count for each piece of literature, <?php echo $writer; ?>.</h5>
				<input type="hidden" name="writer" value="<?php echo $writer; ?>">
			
			<table class="table table-dark">
				<tr><th>Literature Name</th><th>Literature Description</th><th>Words</th><th>Research/Other Words</th></tr>
				<?php for($i = 0; $i < $numBooks; $i++): ?><tr><td><a href="<?php echo base_url('Literature/add/'.$writer.'/'.$books[$i]['bookNum']); ?>"><?php echo $books[$i]['bookName']; ?></a></td><td><?php echo $books[$i]['bookDesc']; ?></td><td><input type="number" name="words<?php echo $i+1; ?>" value="<?php echo $books[$i]['wordCount']; ?>"</td><td><input type="number" name="extra<?php echo $i+1; ?>" value="<?php echo $books[$i]['extraWords']; ?>"</td></tr>
				<?php endfor; ?></table>
				<div><input type="submit" value="Submit" /><input type="reset" value="Reset Form"><a href="<?php echo base_url('Literature/add/'.$writer); ?>"><input type="button" value="Add Book"></a></div>
			<?php endif;
			else: ?>
			<div class="container">
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Select User
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="<?php echo base_url('Update/user/Steve/'); ?>">Steve Sr.</a>
						<a class="dropdown-item" href="<?php echo base_url('Update/user/Susanne/'); ?>">Susanne</a>
						<a class="dropdown-item" href="<?php echo base_url('Update/user/Michelle/'); ?>">Michelle</a>
						<a class="dropdown-item" href="<?php echo base_url('Update/user/Trevor/'); ?>">Trevor</a>
						<a class="dropdown-item" href="<?php echo base_url('Update/user/Katherine/'); ?>">Katherine</a>
						<a class="dropdown-item" href="<?php echo base_url('Update/user/Greg/'); ?>">Greg</a>
						<a class="dropdown-item" href="<?php echo base_url('Update/user/Steven/'); ?>">Steven Jr.</a>
						<a class="dropdown-item" href="<?php echo base_url('Update/user/Tamarah/'); ?>">Tamarah</a>
					</div>
				</div>
			</div>
		<?php endif; ?></div>
