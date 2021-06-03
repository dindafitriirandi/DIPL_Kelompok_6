<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="./assets/asset/Logo.svg" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./assets/login.css" />
    <title>Kost Hunter</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="./assets/asset/Logo.svg" alt="" width="120" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link ml-lg-3" href="<?= base_url(); ?>register">Register</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container" style="margin-top: 110px">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h1 class="text-center">Login</h1>
                    <div class="form-login">
                        <form action="<?=base_url('login')?>" method="post">
                            <div class="form-group">
                                <label for="username" class="font-weight-bold">Username</label>
                                <input type="text" class="form-control" id="username" name="username" style="border-radius: 20px">
                                <small class="form-text text-danger"><?= form_error('username')?></small>
                            </div>
                            <div class="form-group">
                                <label for="password" class="font-weight-bold">Password</label>
                                <input type="password" class="form-control" id="Password" name="password" style="border-radius: 20px">
                                <small class="form-text text-danger"><?= form_error('password')?></small>
                            </div>
                            <div class="forgot-remember d-flex justify-content-between">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"/>
                                    <label class="form-check-label" for="exampleCheck1">Remember Me!</label>
                                </div>
                                <div class="forgot-password">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                            <!-- <button type="submit" class="btn btn-submit btn-block"> -->
                            <button type="submit" class="btn btn-submit btn-block" style="background-color: #35aab1; color: white;">
                                Login
                            </button>
                        </form>
                    </div>
                    <div class="register mt-2">
                        <p>
                            Don't have an account ?
                            <a href="<?= base_url(); ?>register">Click Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>