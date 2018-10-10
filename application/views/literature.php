		<div class="jumbotron">
			<table class="table table-dark">
				<tr><th>Author</th><th>Literature Name</th><th>Literature Description</th><th>Words</th><th>Research/Other Words</th></tr>
				<?php for($i = 0; $i < $numBooks; $i++): ?><tr><td><?php echo $books[$i]['writer']; ?></td><td><?php echo $books[$i]['bookName']; ?></td><td><?php echo $books[$i]['bookDesc']; ?></td><td><?php echo $books[$i]['wordCount']; ?></td><td><?php echo $books[$i]['extraWords']; ?></td></tr>
			<?php endfor; ?></table>
		</div>	