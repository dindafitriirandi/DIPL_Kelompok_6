<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/asset/Logo.svg" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/detailkost.css" />
    <title>Kost Hunter</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="../assets/asset/Logo.svg" alt="" width="120" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link ml-lg-3" href="<?= base_url(); ?>home">Dashboard</a>
                    <a class="nav-link ml-lg-3 active" href="<?= base_url(); ?>kost/listkost">List Kost</a>
                    <div class="dropdown">
                        <a class="nav-link ml-lg-3 dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown">
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
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="img-kost">
                    <img src="../assets/asset/WhatsApp Image 2021-04-09 at 20.35 2.svg" alt="" width="700" />
                </div>
                <h2>Price</h2>
                <h2 style="color: red;">Rp 1.100.000 <span style="color: black">/Month</span></h2>
                <div class="form-book d-flex my-3">
                    <form action="#">
                        <div class="d-flex" style="width: 400px;">
                            <input id="datepicker" class="form-control" />
                            <input type="number" placeholder="Month" class="form-control ml-5">
                        </div>
                        <button type="submit" class="btn btn-startrent btn-block mt-3">Start Rent</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <h1>Kost Raflesia</h1>
                <h4>Left <span style="color: red">2 rooms</span></h2>
                    <p style="color: gray;">Last Update 8 Apr 2021</p>
                    <h1>Facilities</h1>
                    <ul>
                        <li>AC</li>
                        <li>Kasur</li>
                        <li>Dapur Bersama</li>
                        <li>Kamar Mandi Dalam</li>
                    </ul>
                    <h1>Description</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio id nobis ad ipsa dolorem eos saepe nostrum, excepturi explicabo cupiditate!</p>
                    <div class="owner d-flex align-items-center justify-content-between">
                        <div class="owner-info mr-3">
                            <p><span class="font-weight-bold">Agnes Zahrani</span> <br>Actived from Apr 2021</p>
                        </div>
                        <img src="http://placekitten.com/g/200/200" alt="">
                    </div>
                    <a href="tel:62123321123" class="btn btn-askowner btn-block my-3">Ask Owner</a>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center mb-5">
        <div class="row">
            <div class="col">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Telkom%20University&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 1080px;
                            }
                        </style><a href="https://www.embedgooglemap.net">google maps websites</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none!important;
                                height: 500px;
                                width: 1080px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $("#datepicker").datepicker({
            uiLibrary: "bootstrap4",
        });
    </script>
</body>

</html>