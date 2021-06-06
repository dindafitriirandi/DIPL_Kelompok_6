<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?= base_url('assets/asset/Logo.svg')?>" type="image/x-icon" />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css" />
	<link rel="stylesheet" href="<?= base_url('assets/dashboard.css')?>" />
    <title>Kost Hunter</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="<?= base_url('assets/asset/Logo.svg')?>" alt="" width="120">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link ml-lg-3 active" href="<?= base_url(); ?>home">Dashboard</a>
                        <a class="nav-link ml-lg-3" href="<?= base_url(); ?>kost/listkost">List Kost</a>
                        <div class="dropdown">
                            <a class="nav-link ml-lg-3 dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fas fa-user"></i> <?=$sesi['user']['nama']?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= base_url('profile'); ?>">Edit Profile</a>
                                <a class="dropdown-item" href="<?=base_url('home/logout')?>" onclick="return confirm('Logout?');">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="top-wrapper">
            <div class="container-fluid d-flex align-items-center flex-column">
                <h1 class="font-weight-bold" style="font-size: 50px; margin-bottom: 40px">KOST HUNTER</h1>
                <h2 class="font-weight-bold">Looking for a Kos ?</h2>
                <p class="font-weight-bold">Now it's easier with kost hunter!</p>
                <a href="<?= base_url(); ?>kost/listkost" class="btn btn-find">Let's find out! 
                    <span class="arrow right"></span>
                </a>
            </div>
        </div>
    </main>
    <div class="reason-wrapper">
        <h3 class="text-center">Why Kost Hunter ?</h3>
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature-logo ">
                                <img src="./assets/asset/24-hours (1) 1.svg" alt="" />
                                <h5 class="font-weight-bold mb-3">Stay Safe</h4>
                            </div>
                            <p>Boarding environment information is in accordance with what is stated on the application.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="feature-logo text-center">
                                <img src="./assets/asset/credit-card 1.svg" alt="" />
                                <h5 class="font-weight-bold mb-3">Secure Payment</h4>
                            </div>
                            <p>We use bank transfer payments to prevent fraud.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="feature-logo text-center">
                                <img src="./assets/asset/home-icon-silhouette 1.svg" alt="" />
                                <h5 class="font-weight-bold mb-3">Original House</h4>
                            </div>
                            <p>Photos in this application are real photos of the owner of the boarding house.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
