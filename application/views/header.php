<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Steven Soult">
        <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

        <title><?php echo $title ?></title>

        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Home') ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Update') ?>">Track Progress</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Literature') ?>">Literature</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inspiration</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="https://nanowrimo.org">NaNoWriMo Website</a>
							<a class="dropdown-item" href="https://www.forbes.com/sites/suwcharmananderson/2012/11/09/five-links-for-nanowrimo-inspiration/#2609766c2dc1">Forbes</a>
							<a class="dropdown-item" href="http://nanowrimoinspiration.tumblr.com/">Tumblr</a>
							<a class="dropdown-item" href="https://www.pinterest.com/maddi_dru/nanowrimo-inspiration/">Pinterest</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
