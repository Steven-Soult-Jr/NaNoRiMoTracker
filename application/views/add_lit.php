		<div class="jumbotron">
		<?php echo validation_errors();
			echo form_open('Literature/update'); ?>
				<h5>Please enter information about your piece of literature, <?php echo $writer; ?>.</h5>
				<input type="hidden" name="writer" value="<?php echo $writer; ?>">
				<input type="hidden" name="bookNum" value="<?php echo (isset($bookNum) ? $bookNum : 0); ?>">
				<div class="form-group">
					<div><input type="text" class="form-control" name="bookName" value="<?php echo (isset($bookName) ? $bookName : ""); ?>" placeholder="Your interesting title here" required></div>
					<div><textarea name="bookDesc" class="form-control" placeholder="A short blurb about your writing"><?php echo (isset($bookDesc) ? $bookDesc : ""); ?></textarea></div>
				</div>
				<div><input type="submit" value="Submit" /></div>
		</div>
