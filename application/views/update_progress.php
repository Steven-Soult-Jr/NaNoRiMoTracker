<?php
if (isset($submitted)): ?>
<h3>Your word count has been updated!</h3>
<p><a class="btn btn-primary btn-lg" href="home" role="button">Home &raquo;</a></p>
<?php else:
    echo validation_errors();

    echo form_open('update');
    ?>

    <h5>User</h5>
    <select name="user">
        <option value="Steve">Steve Sr.</option>
        <option value="Susanne">Susanne</option>
        <option value="Michelle">Michelle</option>
        <option value="Trevor">Trevor</option>
        <option value="Katherine">Katherine</option>
        <option value="Greg">Greg</option>
        <option value="Steven">Steven Jr.</option>
    </select>

    <h5>Current Word Count</h5>
    <input type="number" name="wordcount" min="0">

    <div><input type="submit" value="Submit" /></div>

    </form>
<?php endif; ?>