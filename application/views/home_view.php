<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Centered nav only <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
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

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Week</th>
                  <th>Steve</th>
                  <th>Susanne</th>
                  <th>Michelle</th>
                  <th>Trevor</th>
                  <th>Katherine</th>
                  <th>Greg</th>
                  <th>Steven</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Week1</td>
                  <td><?php echo $Steve1 ?></td>
                  <td><?php echo $Susanne1 ?></td>
                  <td><?php echo $Michelle1 ?></td>
                  <td><?php echo $Trevor1 ?></td>
                  <td><?php echo $Katherine1 ?></td>
                  <td><?php echo $Greg1 ?></td>
                  <td><?php echo $Steven1 ?></td>
                </tr>
                <tr>
                  <td>Week2</td>
                  <td><?php echo $Steve2 ?></td>
                  <td><?php echo $Susanne2 ?></td>
                  <td><?php echo $Michelle2 ?></td>
                  <td><?php echo $Trevor2 ?></td>
                  <td><?php echo $Katherine2 ?></td>
                  <td><?php echo $Greg2 ?></td>
                  <td><?php echo $Steven2 ?></td>
                </tr>
                <tr>
                  <td>Week3</td>
                  <td><?php echo $Steve3 ?></td>
                  <td><?php echo $Susanne3 ?></td>
                  <td><?php echo $Michelle3 ?></td>
                  <td><?php echo $Trevor3 ?></td>
                  <td><?php echo $Katherine3 ?></td>
                  <td><?php echo $Greg3 ?></td>
                  <td><?php echo $Steven3 ?></td>
                </tr>
                <tr>
                  <td>Week4</td>
                  <td><?php echo $Steve4 ?></td>
                  <td><?php echo $Susanne4 ?></td>
                  <td><?php echo $Michelle4 ?></td>
                  <td><?php echo $Trevor4 ?></td>
                  <td><?php echo $Katherine4 ?></td>
                  <td><?php echo $Greg4 ?></td>
                  <td><?php echo $Steven4 ?></td>
                </tr>
                <tr>
                  <td>Week5</td>
                  <td><?php echo $Steve5 ?></td>
                  <td><?php echo $Susanne5 ?></td>
                  <td><?php echo $Michelle5 ?></td>
                  <td><?php echo $Trevor5 ?></td>
                  <td><?php echo $Katherine5 ?></td>
                  <td><?php echo $Greg5 ?></td>
                  <td><?php echo $Steven5 ?></td>
                </tr>
              </tbody>
            </table>
          </div>

        <p><a class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/update') ?>" role="button">Enter Progress &raquo;</a></p>
        </main>
        <hr>

      </div> <!-- /container -->

    </main>