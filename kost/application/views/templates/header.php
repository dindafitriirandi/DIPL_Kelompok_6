<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
		<title><?php echo $judul; ?></title>
	</head> 
	
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<a class="navbar-brand mb-0" style="font-size: 25px; font-weight: bold; color: #35AAB1" href="#">KOST HUNTER</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
				<a class="nav-link" href="<?=base_url('home/')?>">Home</a>
				</li>
				<li class="nav-item active">
				<a class="nav-link" href="<?=base_url('Kost/')?>">List Kost</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Hai, <?=$sesi['user']['namaPencari']?>
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Profile</a>
					<a class="dropdown-item" href="<?=base_url('home/logout')?>" onclick="return confirm('Logout?');">Logout</a>
				</div>
				</li>
			</ul>
		</div>
		</nav>

		<!-- <nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a href="<?=base_url('home/')?>">
				<img src="<?=base_url("assets/logo-telkom.png");?>" alt="logo-telkom" width=100>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-5">
				<a class="nav-item nav-link mx-3" href="<?=base_url('home/')?>">Home</a>
				<a class="nav-item nav-link mx-3" href="<?=base_url('Kost/')?>">List Kost</a>
				<a class="nav-item nav-link mx-3 akun" href="<?=base_url('home/logout')?>" onclick="return confirm('Logout?');">Hai, 
					<?=$sesi['user']['namaPencari']?>
				</a>
				</div>
			</div>
		</div>
		</nav> -->
