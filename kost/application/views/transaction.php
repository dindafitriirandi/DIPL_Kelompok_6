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
    <link rel="stylesheet" href="<?= base_url('assets/order.css')?>" />
    <title>Kost Hunter</title>
</head>

<body>
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
                            <a class="dropdown-item" href="<?= base_url(); ?>profile">Edit Profile</a>
                            <a class="dropdown-item" href="<?=base_url('home/logout')?>" onclick="return confirm('Logout?');">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <h4 class="text-center" style="color: #35aab1">
            Booking >
            <span class="font-weight-bold">Transaction</span>
        </h4>
        <h2>Pricing Details</h2>
        <div class="box d-flex justify-content-between">
            <h4>Total Price</h4>
            <h4>Rp <?= number_format($pemesananKost['totalHargaKost'],2,',','.')?></h4>
        </div>
        <h2>Payment Method Recomendations</h2>
        <form action="<?= base_url('kost/finalize/'.$pemesananKost['idPemesanan'])?>" method="POST">
            <div class="box">
                <div class="payment d-flex align-items-center">
                    <table>
                        <tr>
                            <td><input type="radio" name="payment" value="gopay" /></td>
                            <td align="center">
                                <img src="<?= base_url('assets/asset/logo-gopay-vector 1.svg')?>" alt="" />
                            </td>
                            <td>
                                <h5 class="ml-5">
                                    GOPAY <br />
                                    <span style="font-size: small">Automatic Confirmation</span>
                                </h5>
                            </td>
                            </tr>
                        <tr>
                            <td><input type="radio" name="payment" value="ovo" /></td>
                            <td align="center">
                                <img src="<?= base_url('assets/asset/Logo OVO 1.svg')?>" alt="" />
                            </td>
                            <td>
                                <h5 class="ml-5">
                                    OVO <br />
                                    <span style="font-size: small">Automatic Confirmation</span>
                                    </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="payment" value="dana" /></td>
                            <td align="center"><img src="<?= base_url('assets/asset/Logo Dana 1.svg')?>" /></td>
                            <td >
                                <h5 class="ml-5">
                                    DANA <br />
                                    <span style="font-size: small">Automatic Confirmation</span>
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="payment" value="bcava" /></td>
                            <td align="center">
                                <img src="<?= base_url('assets/asset/Logo Bank BCA 1.svg')?>" alt=""/>
                            </td>
                            <td>
                                <h5 class="ml-5">
                                    BCA Virtual Account <br />
                                    <span style="font-size: small">Automatic Confirmation</span>
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="payment" value="mandiriva" /></td>
                            <td align="center">
                                <img src="<?= base_url('assets/asset/kisspng-bank-mandiri-depok-logo-bank-mandiri-semarang-kred-5b74ed29ed53b2 1.svg')?>" alt=""/>
                            </td>
                            <td>
                                <h5 class="ml-5">
                                    Mandiri Virtual Account <br />
                                    <span style="font-size: small">Automatic Confirmation</span>
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="payment" value="briva" /></td>
                            <td align="center">
                                <img src="<?= base_url('assets/asset/Bank BRI (Bank Rakyat Indonesia) Logo (PNG-1080p) - FileVector69 1.svg')?>" alt=""/>
                            </td>
                            <td>
                                <h5 class="ml-5">
                                    BRI Virtual Account <br />
                                    <span style="font-size: small">Automatic Confirmation</span>
                                </h5>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="submit-form d-flex justify-content-center my-5">
                <button type="submit" class="btn btn-order">
                    Place Rent
                </button>
            </div>
        </form>
    </div>
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
