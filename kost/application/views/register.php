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
    <link rel="stylesheet" href="./assets/register.css" />
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
                    <a class="nav-link ml-lg-3" href="<?= base_url(); ?>login">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h1 class="text-center">Register</h1>
                    <div class="form-login">
                        <form>
                            <div class="form-group">
                                <label class="font-weight-bold">Email address</label
                                    >
                                    <input type="email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold"
                                        >Username</label
                                    >
                                    <input
                                        type="username"
                                        class="form-control"
                                    />
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold"
                                        >Password</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                    />
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold"
                                        >Re-Password</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                    />
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold"
                                        >Date of Birth</label
                                    >
                                    <input
                                        id="datepicker"
                                        class="form-control"
                                        width="150"
                                    />
                                </div>

                                <button
                                    type="submit"
                                    class="btn btn-submit btn-block"
                                >
                                    Register
                                </button>
                            </form>
                        </div>

                        <div class="login mt-2">
                            <p>
                                Already have an account ?
                                <a href="login.html">Click Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Optional JavaScript; choose one of the two! -->

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