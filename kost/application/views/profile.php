<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?= base_url('assets/asset/Logo.svg')?>" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets/profile.css')?>" />
    <title>Kost Hunter</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="<?= base_url('assets/asset/Logo.svg')?>" alt="" width="120" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link ml-lg-3" href="<?= base_url(); ?>home">Dashboard</a>
                        <a class="nav-link ml-lg-3 " href="<?= base_url(); ?>kost/listkost">List Kost</a>
                        <div class="dropdown">
                            <a class="nav-link ml-lg-3 active dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fas fa-user"></i> <?=$sesi['user']['nama']?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= base_url(); ?>profile">Edit Profile</a>
                                <a class="dropdown-item" href="<?=base_url('home/logout')?>" onclick="return confirm('Logout?');">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container" style="padding-top: 10px; padding-bottom: 80px">
            <div class="section-title d-flex justify-content-center my-4">
                <h2>Edit Profile</h2>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="http://placekitten.com/200/200" alt="" style="border-radius: 50%" />
                    <!-- <img src="./assets/asset/profile" alt="" style="border-radius: 50%" /> -->
                </div>
                <div class="col-8">
                    <!-- <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?> -->
                    <form method="post" action="<?php echo base_url('profile/editUser/'.$user['idUser']); ?>">
                        <h5>Personal Information</h5>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $user['nama']?>" required/>
                        </div>
                        <!-- <div class="form-group">
                            <label for="gender">Gender</label>
                            <div class="d-flex align-items-center">
                                <div class="form-check mr-5">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="option1" checked required/>
                                    <label class="form-check-label" for="gender">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="option1" checked required/>
                                    <label class="form-check-label" for="gender">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label>Birth Date</label>
                            <input type="date" class="form-control" name="birth_date" value="<?= $user['birth_date']?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $user['email']?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="nohp" value="<?= $user['nohp']?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $user['username']?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $user['alamat']?>" required/>
                        </div>
                        <h5 style="padding-top: 12px">Change Password</h5>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Old Password</label>
                            <input type="password" class="form-control" name="oldpassword" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input type="password" class="form-control" name="newpassword" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Re-Password</label>
                            <input type="password" class="form-control" name="renewpassword" />
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <button type="submit" class="btn btn-profile mr-4" >Submit</button>
                            <a href="<?= base_url(); ?>home" class="btn btn-cancel">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
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
</body>
</html>
