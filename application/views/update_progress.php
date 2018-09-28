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


<div class="jumbotron">
    <div class="container">

<?php
if (isset($submitted)): ?>
<h3>Your word count has been updated to <?php echo $wordcount ?>, <?php echo $user ?>!</h3>

<p><a class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/home') ?>" role="button">Home &raquo;</a></p>
<?php else:
    echo validation_errors();

    echo form_open('update/submit');
    ?>

    <h5>User</h5>
    <select name="user" required>
        <option disabled selected value>Choose User...</option>
        <option value="Steve">Steve Sr.</option>
        <option value="Susanne">Susanne</option>
        <option value="Michelle">Michelle</option>
        <option value="Katherine">Katherine</option>
        <option value="Greg">Greg</option>
        <option value="Steven">Steven Jr.</option>
    </select>

    <h5>Current Word Count</h5>
    <input type="number" name="wordcount" min="0" required>

    <div><input type="submit" value="Submit" /></div>

    <?php echo form_close(); ?>
<?php endif; ?>

    </div>
</div>