<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/Logo.svg" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/order.css" />
    <title>Kost Hunter</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="./assets/asset/Logo.svg" alt="" width="120">
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
                            <a class="dropdown-item" href="<?= base_url(); ?>profile">Profile</a>
                            <a class="dropdown-item" href="<?=base_url('home/logout')?>" onclick="return confirm('Logout?');">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <h4 class="text-center" style="color: #35aab1">
            <span class="font-weight-bold">Booking > </span> Transaction
        </h4>
        <h2>Detail Kost</h2>
        <div class="box">
            <div class="container">
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <img src="assets/WhatsApp Image 2021-04-09 at 20.35 2.svg" alt="" width="500" />
                    </div>
                    <div class="col">
                        <table>
                            <tr>
                                <td align="left" valign="top">Name</td>
                                <td align="right" valign="top">:</td>
                                <td>Kos Raflesia</td>
                            </tr>
                            <tr>
                                <td align="left" valign="top">Address</td>
                                <td align="right" valign="top">:</td>
                                <td>Jl. Sukabirus No. 100A</td>
                            </tr>
                            <tr>
                                <td align="left" valign="top">Facility</td>
                                <td align="right" valign="top">:</td>
                                <td>
                                    AC - Kasur - Water Heater - Dapur Bersama
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="top">Room Availability</td>
                                <td align="left" valign="top">:</td>
                                <td valign="top">4 room</td>
                            </tr>
                            <tr>
                                <td align="left" valign="top">Price</td>
                                <td align="right" valign="top">:</td>
                                <td>
                                    Rp
                                    <span class="text-danger">1000.000</span>/Month
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <form action="transaction.html">
                <h2 class="my-3">Orderer Data</h2>
                <div class="box">
                    <h4>Rosmelina</h5>
                    <div class="info-user d-flex">
                        <h5 class="mr-5">rosmelina@gmail.com</h5>
                        <h5>+628123921782</h5>
                    </div>
                    <div class="personal d-flex align-items-center">
                        <input type="radio" name="orderdata">
                        <h5 class="ml-3">I ordered for personal</h5>
                    </div>
                    <div class="personal d-flex align-items-center">
                        <input type="radio" name="orderdata">
                        <h5 class="ml-3">I ordered for other people</h5>
                    </div>
                </div>
                <h2>Pricing Details</h2>
                <div class="box">
                    <table style="width: 100%;">
                        <tr>
                            <td>Price</td>
                            <td  align="right">
                                <select  name="period" id="period">
                                    <option>0</option>
                                    <option value="1">1</option>
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="12">12</option>
                                </select>
                                Month X
                            </td>
                            <td>Rp <span id="price">1000000</span></td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td align="right"></td>
                            <td>Rp 55.000</td>
                        </tr>
                        <tr>
                            <td>Total Price</td>
                            <td></td>
                            <td>Rp <span id="totalPrice">13.000.000</span></td>
                        </tr>
                    </table>
                </div>
                <button type="submit" class="btn btn-order float-right my-3">Continue Ordering</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- <script>
        $('#period').change(function() {
        let period = 0
        let price = $('#price').text();
        let totalPrice = 0
        period = $(this).find(':selected').val();
        price = period * price;
        totalPrice = price + 55000
        localStorage.setItem('price', price)
        localStorage.setItem('totalPrice', totalPrice)
        $('#price').on('change', function() {
            console.log(localStorage.getItem('price'))
                // $(this).replaceWith(localStorage.getItem(price))
            })
        });
    </script> -->
</body>
</html>