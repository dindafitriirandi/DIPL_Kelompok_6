<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?= base_url('assets/asset/Logo.svg')?>" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/register.css')?>" />
    <title>Kost Hunter</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="<?= base_url('assets/asset/Logo.svg')?>" alt="" width="120" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                    <a class="nav-link ml-lg-3" href="<?= base_url(); ?>login">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-9" style="padding-bottom: 80px">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h1 class="text-center">Register</h1>
                    <!-- <?php 
                        // if($this->session->flashdata('error') !='')
                        // {
                        //     echo '<div class="alert alert-danger" role="alert">';
                        //     echo $this->session->flashdata('error');
                        //     echo '</div>';
                        // }
                    ?> -->
                    <div class="form-login">
                        <form method="post" action="<?php echo base_url('register/proses_regis'); ?>">
                            <div class="form-group">
                                <label class="font-weight-bold">Full Name</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Full Name" required/>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Address</label>
                                <textarea  class="form-control" name="alamat" id="alamat exampleFormControlTextarea1" rows="3" placeholder="Jalan Sukabirus No.1" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Date of Birth</label>
                                <input class="form-control" name="birth_date" id="datepicker" width="150" placeholder="2000-01-01" required/>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Phone Number</label>
                                <input type="text" class="form-control" name="nohp" id="nohp" placeholder="08xxxx" required/>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Username</label>
                                <input type="username" class="form-control" name="username" id="username" placeholder="Username" required/>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Re-Password</label>
                                <input type="password" class="form-control" placeholder="Re-password" required/>
                            </div>
							<div class="form-group">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="level1" name="level" class="custom-control-input" value="pemilik">
								<label class="custom-control-label" for="level1">Pemilik</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="level2" name="level" class="custom-control-input" value="pencari">
								<label class="custom-control-label" for="level2">Pencari</label>
							</div>
							</div>
                            <button type="submit" class="btn btn-submit btn-block">Register</button>
                        </form>
                    </div>
                    <div class="login mt-2">
                        <p>
                            Already have an account?
                            <a href="<?= base_url(); ?>login">Click Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"
        type="text/javascript"
    ></script>
    <script>
        $("#datepicker").datepicker({
            uiLibrary: "bootstrap4",
        });
    </script>
</body>
</html>
