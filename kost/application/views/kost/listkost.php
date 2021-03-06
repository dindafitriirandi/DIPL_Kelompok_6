<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?= base_url('assets/asset/Logo.svg')?>" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets/listkost.css')?>"/>
    <title>Kost Hunter</title>
</head>

<body>
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
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- <div class="top-search">
                        <input type="text" placeholder="Search . . ." />
                    </div> -->
                    <form class="form-inline" method="GET" style="float: right; margin-top: 20px;" action="<?= base_url('kost/listkost')?>">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword"/>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- <?php
            // include "koneksi.php";
            // if (isset($_POST['kata_cari'])) {
            //     $kata_kunci=trim($_POST['kata_cari']);
            //     $sql="select * from datakost where namaKost like '%".$kata_cari."%' or alamatKost like '%".$kata_cari."%' or fasilitaskost like '%".$kata_cari."%'";
            // }else {
            //     $sql="select * from dataKost order by idKost asc";
            // }
            // $hasil=mysqli_query($kon,$sql);
            // while ($data = mysqli_fetch_array($hasil)) {
            //     $no++;
            // }
        ?> -->

        <div class="container mt-4">
            <div class="row my-4">
                <?php foreach( $datakost as $kost ) : ?>
                    <div class="col-md-4">
                        <div class="card card-kost mb-3">
                            <img class="card-img-top" src="<?= base_url('uploads/kost_image/').$kost['imageKost'] ?>  " alt="..." />
                            <!-- <img class="card-img-top" src="<?= $kost['imageKost'] ?>" width="100" alt="Card image cap"> -->
                            <div class="card-body">
                                <h5 class="card-title"><?= $kost['namaKost']?></h5>
                                <table>
                                    <tr>
                                        <td align="left" valign="top">Name</td>
                                        <td align="left" valign="top">:</td>
                                        <td><?= $kost['namaKost']?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">Address</td>
                                        <td align="left" valign="top">:</td>
                                        <td><?= $kost['alamatKost']?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">Facility</td>
                                        <td align="left" valign="top">:</td>
                                        <td><?= $kost['fasilitasKost']?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">Room Availability</td>
                                        <td align="left" valign="top">:</td>
                                        <td valign="top"><?= $kost['totalKost']?> room</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">Price</td>
                                        <td align="left" valign="top">:</td>
                                        <td>
                                            <p class="price">
                                                Rp
                                                <span style="color: red"><b><?= number_format($kost['hargaKost'],2,',','.')?></b></span>
                                                / Month
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <a href="<?= base_url("kost/detailkost/".$kost['idKost']); ?>" class="btn btn-detail my-2">View Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
