<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div id="container">
	<div class="row">
		<div class="col-md-12">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?php echo site_url('home');?>">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo site_url('auth/viewRegister');?>">Register </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('auth/viewLogin');?>">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('auth/viewSearch');?>">Search</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
				</ul>
			</div>
		</nav>
		</div>
	</div>
</div>

</body>
</html>
