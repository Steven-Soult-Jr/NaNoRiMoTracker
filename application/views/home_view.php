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
          <h1 class="display-3">Welcome to NaNoWriMo 2017!</h1>
          <p>This is the tracking page for family progress toward our NaNoWriMo 2017 goals.</p>
          <p><a class="btn btn-primary btn-lg" href="https://nanowrimo.org/" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Dashboard</h1>
		  
		  <p><a class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/update') ?>" role="button">Enter Progress &raquo;</a></p>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Week</th>
                  <th>Steve</th>
                  <th>Susanne</th>
                  <th>Steven</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Nov 1st 2017 - Nov 4th</td>
                  <td><?php echo $Steve1 ?></td>
                  <td><?php echo $Susanne1 ?></td>
                  <td><?php echo $Steven1 ?></td>
                </tr>
                <tr>
                  <td>Nov 5th - Nov 11th</td>
                  <td><?php echo $Steve2 ?></td>
                  <td><?php echo $Susanne2 ?></td>
                  <td><?php echo $Steven2 ?></td>
                </tr>
                <tr>
                  <td>Nov 12th - Nov 18th</td>
                  <td><?php echo $Steve3 ?></td>
                  <td><?php echo $Susanne3 ?></td>
                  <td><?php echo $Steven3 ?></td>
                </tr>
                <tr>
                  <td>Nov 19th - Nov 25th</td>
                  <td><?php echo $Steve4 ?></td>
                  <td><?php echo $Susanne4 ?></td>
                  <td><?php echo $Steven4 ?></td>
                </tr>
                <tr>
                  <td>Nov 26th - Nov 30th</td>
                  <td><?php echo $Steve5 ?></td>
                  <td><?php echo $Susanne5 ?></td>
                  <td><?php echo $Steven5 ?></td>
                </tr>
				<tr>
                  <td>Dec 1st - Dec 9th</td>
                  <td><?php echo $Steve6 ?></td>
                  <td><?php echo $Susanne6 ?></td>
                  <td><?php echo $Steven6 ?></td>
                </tr>
				<tr>
                  <td>Dec 10th - Dec 16th</td>
                  <td><?php echo $Steve7 ?></td>
                  <td><?php echo $Susanne7 ?></td>
                  <td><?php echo $Steven7 ?></td>
                </tr>
				<tr>
                  <td>Dec 17th - Dec 23rd</td>
                  <td><?php echo $Steve8 ?></td>
                  <td><?php echo $Susanne8 ?></td>
                  <td><?php echo $Steven8 ?></td>
                </tr>
				<tr>
                  <td>Dec 24th - Dec 30th</td>
                  <td><?php echo $Steve9 ?></td>
                  <td><?php echo $Susanne9 ?></td>
                  <td><?php echo $Steven9 ?></td>
                </tr>
				<tr>
                  <td>Dec 31st 2017 - Jan 6th 2018</td>
                  <td><?php echo $Steve10 ?></td>
                  <td><?php echo $Susanne10 ?></td>
                  <td><?php echo $Steven10 ?></td>
                </tr>
				<tr>
                  <td>Jan 7th - Jan 13th</td>
                  <td><?php echo $Steve11 ?></td>
                  <td><?php echo $Susanne11 ?></td>
                  <td><?php echo $Steven11 ?></td>
                </tr>
				<tr>
                  <td>Jan 14th - Jan 20th</td>
                  <td><?php echo $Steve12 ?></td>
                  <td><?php echo $Susanne12 ?></td>
                  <td><?php echo $Steven12 ?></td>
                </tr>
				<tr>
                  <td>Jan 21st - Jan 27th</td>
                  <td><?php echo $Steve13 ?></td>
                  <td><?php echo $Susanne13 ?></td>
                  <td><?php echo $Steven13 ?></td>
                </tr>
				<tr>
                  <td>Jan 28th - Feb 3rd</td>
                  <td><?php echo $Steve14 ?></td>
                  <td><?php echo $Susanne14 ?></td>
                  <td><?php echo $Steven14 ?></td>
                </tr>
				<tr>
                  <td>Feb 4th - Feb 10th</td>
                  <td><?php echo $Steve15 ?></td>
                  <td><?php echo $Susanne15 ?></td>
                  <td><?php echo $Steven15 ?></td>
                </tr>
				<tr>
                  <td>Feb 11th - Feb 17th</td>
                  <td><?php echo $Steve16 ?></td>
                  <td><?php echo $Susanne16 ?></td>
                  <td><?php echo $Steven16 ?></td>
                </tr>
				<tr>
                  <td>Feb 18th - Feb 24th</td>
                  <td><?php echo $Steve17 ?></td>
                  <td><?php echo $Susanne17 ?></td>
                  <td><?php echo $Steven17 ?></td>
                </tr>
				<tr>
                  <td>Feb 25th - Mar 3rd</td>
                  <td><?php echo $Steve18 ?></td>
                  <td><?php echo $Susanne18 ?></td>
                  <td><?php echo $Steven18 ?></td>
                </tr>
				<tr>
                  <td>Mar 4th - Mar 10th</td>
                  <td><?php echo $Steve19 ?></td>
                  <td><?php echo $Susanne19 ?></td>
                  <td><?php echo $Steven19 ?></td>
                </tr>
				<tr>
                  <td>Mar 11th - Mar 17th</td>
                  <td><?php echo $Steve20 ?></td>
                  <td><?php echo $Susanne20 ?></td>
                  <td><?php echo $Steven20 ?></td>
                </tr>
				<tr>
                  <td>Mar 18th - Mar 24th</td>
                  <td><?php echo $Steve21 ?></td>
                  <td><?php echo $Susanne21 ?></td>
                  <td><?php echo $Steven21 ?></td>
                </tr>
				<tr>
                  <td>Mar 25th - Mar 31st</td>
                  <td><?php echo $Steve22 ?></td>
                  <td><?php echo $Susanne22 ?></td>
                  <td><?php echo $Steven22 ?></td>
                </tr>
				<tr>
                  <td>Apr 1st - Apr 7th</td>
                  <td><?php echo $Steve23 ?></td>
                  <td><?php echo $Susanne23 ?></td>
                  <td><?php echo $Steven23 ?></td>
                </tr>
				<tr>
                  <td>Apr 8th - Apr 14th</td>
                  <td><?php echo $Steve24 ?></td>
                  <td><?php echo $Susanne24 ?></td>
                  <td><?php echo $Steven24 ?></td>
                </tr>
				<tr>
                  <td>Apr 15th - Apr 21st</td>
                  <td><?php echo $Steve25 ?></td>
                  <td><?php echo $Susanne25 ?></td>
                  <td><?php echo $Steven25 ?></td>
                </tr>
				<tr>
                  <td>Apr 22nd - Apr 28th</td>
                  <td><?php echo $Steve26 ?></td>
                  <td><?php echo $Susanne26 ?></td>
                  <td><?php echo $Steven26 ?></td>
                </tr>
				<tr>
                  <td>Apr 29th - May 5th</td>
                  <td><?php echo $Steve27 ?></td>
                  <td><?php echo $Susanne27 ?></td>
                  <td><?php echo $Steven27 ?></td>
                </tr>
				<tr>
                  <td>May 6th - May 12th</td>
                  <td><?php echo $Steve28 ?></td>
                  <td><?php echo $Susanne28 ?></td>
                  <td><?php echo $Steven28 ?></td>
                </tr>
				<tr>
                  <td>May 13th - May 19th</td>
                  <td><?php echo $Steve29 ?></td>
                  <td><?php echo $Susanne29 ?></td>
                  <td><?php echo $Steven29 ?></td>
                </tr>
				<tr>
                  <td>May 20th - May 26th</td>
                  <td><?php echo $Steve30 ?></td>
                  <td><?php echo $Susanne30 ?></td>
                  <td><?php echo $Steven30 ?></td>
                </tr>
				<tr>
                  <td>May 27th - June 2nd</td>
                  <td><?php echo $Steve31 ?></td>
                  <td><?php echo $Susanne31 ?></td>
                  <td><?php echo $Steven31 ?></td>
                </tr>
				<tr>
                  <td>June 3rd - June 9th</td>
                  <td><?php echo $Steve32 ?></td>
                  <td><?php echo $Susanne32 ?></td>
                  <td><?php echo $Steven32 ?></td>
                </tr>
				<tr>
                  <td>June 10th - June 16th</td>
                  <td><?php echo $Steve33 ?></td>
                  <td><?php echo $Susanne33 ?></td>
                  <td><?php echo $Steven33 ?></td>
                </tr>
				<tr>
                  <td>June 17th - June 23rd</td>
                  <td><?php echo $Steve34 ?></td>
                  <td><?php echo $Susanne34 ?></td>
                  <td><?php echo $Steven34 ?></td>
                </tr>
				<tr>
                  <td>June 24th - June 30th</td>
                  <td><?php echo $Steve35 ?></td>
                  <td><?php echo $Susanne35 ?></td>
                  <td><?php echo $Steven35 ?></td>
                </tr>
				<tr>
                  <td>July 1st - July 7th</td>
                  <td><?php echo $Steve36 ?></td>
                  <td><?php echo $Susanne36 ?></td>
                  <td><?php echo $Steven36 ?></td>
                </tr>
				<tr>
                  <td>July 8th - July 14th</td>
                  <td><?php echo $Steve37 ?></td>
                  <td><?php echo $Susanne37 ?></td>
                  <td><?php echo $Steven37 ?></td>
                </tr>
				<tr>
                  <td>July 15th - July 21st</td>
                  <td><?php echo $Steve38 ?></td>
                  <td><?php echo $Susanne38 ?></td>
                  <td><?php echo $Steven38 ?></td>
                </tr>
				<tr>
                  <td>July 22nd - July 28th</td>
                  <td><?php echo $Steve39 ?></td>
                  <td><?php echo $Susanne39 ?></td>
                  <td><?php echo $Steven39 ?></td>
                </tr>
				<tr>
                  <td>July 29th - Aug 4th</td>
                  <td><?php echo $Steve40 ?></td>
                  <td><?php echo $Susanne40 ?></td>
                  <td><?php echo $Steven40 ?></td>
                </tr>
				<tr>
                  <td>Aug 5th - Aug 11th</td>
                  <td><?php echo $Steve41 ?></td>
                  <td><?php echo $Susanne41 ?></td>
                  <td><?php echo $Steven41 ?></td>
                </tr>
				<tr>
                  <td>Aug 12th - Aug 18th</td>
                  <td><?php echo $Steve42?></td>
                  <td><?php echo $Susanne42 ?></td>
                  <td><?php echo $Steven42 ?></td>
                </tr>
				<tr>
                  <td>Aug 19th - Aug 25th</td>
                  <td><?php echo $Steve43 ?></td>
                  <td><?php echo $Susanne43 ?></td>
                  <td><?php echo $Steven43 ?></td>
                </tr>
				<tr>
                  <td>Aug 26th - Sept 1st</td>
                  <td><?php echo $Steve44 ?></td>
                  <td><?php echo $Susanne44 ?></td>
                  <td><?php echo $Steven44 ?></td>
                </tr>
				<tr>
                  <td>Sept 2nd - Sept 8th</td>
                  <td><?php echo $Steve45 ?></td>
                  <td><?php echo $Susanne45 ?></td>
                  <td><?php echo $Steven45 ?></td>
                </tr>
				<tr>
                  <td>Sept 9th - Sept 15th</td>
                  <td><?php echo $Steve46 ?></td>
                  <td><?php echo $Susanne46 ?></td>
                  <td><?php echo $Steven46 ?></td>
                </tr>
				<tr>
                  <td>Sept 16th - Sept 22nd</td>
                  <td><?php echo $Steve47 ?></td>
                  <td><?php echo $Susanne47 ?></td>
                  <td><?php echo $Steven47 ?></td>
                </tr>
				<tr>
                  <td>Sept 23rd - Sept 29th</td>
                  <td><?php echo $Steve48 ?></td>
                  <td><?php echo $Susanne48 ?></td>
                  <td><?php echo $Steven48 ?></td>
                </tr>
				<tr>
                  <td>Sept 30th - Oct 6th</td>
                  <td><?php echo $Steve49 ?></td>
                  <td><?php echo $Susanne49 ?></td>
                  <td><?php echo $Steven49 ?></td>
                </tr>
				<tr>
                  <td>Oct 7th - Oct 13th</td>
                  <td><?php echo $Steve50 ?></td>
                  <td><?php echo $Susanne50 ?></td>
                  <td><?php echo $Steven50 ?></td>
                </tr>
				<tr>
                  <td>Oct 14th - Oct 20th</td>
                  <td><?php echo $Steve51 ?></td>
                  <td><?php echo $Susanne51 ?></td>
                  <td><?php echo $Steven51 ?></td>
                </tr>
				<tr>
                  <td>Oct 21th - Oct 27th</td>
                  <td><?php echo $Steve52 ?></td>
                  <td><?php echo $Susanne52 ?></td>
                  <td><?php echo $Steven52 ?></td>
                </tr>
				<tr>
                  <td>Oct 28th - Oct 31st</td>
                  <td><?php echo $Steve53 ?></td>
                  <td><?php echo $Susanne53 ?></td>
                  <td><?php echo $Steven53 ?></td>
                </tr>
              </tbody>
            </table>
          </div>
		  
		  </main>
		<hr>

      </div> <!-- /container -->

    </main>