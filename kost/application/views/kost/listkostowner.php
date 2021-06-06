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
    <link rel="stylesheet" href="<?= base_url('assets/listkost.css')?>" />
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
                    <form class="form-inline" method="GET" style="float: right; margin-top: 20px;" action="<?= base_url('kost/listkost')?>">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        <button type="button" class="btn btn-addkost ml-3" data-toggle="modal" data-target="#exampleModal">Add Kost</button>
                    </form>
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

                <!-- Modal -->
                <div class="modal fade" style="margin-top: 50px" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="title d-flex justify-content-center mb-4">
                                    <h3>Add Kost</h3>
                                </div>
                                <form id="form-add-kost" class="form-add-kost" method="POST" enctype="multipart/form-data" action="<?= base_url('kost/tambahkostowner')?>">
                                    <table width="100%">
                                        <tr>
                                            <td>Name</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="namaKost" id="namaKost"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>:</td>
                                            <td>
                                                <textarea name="alamatKost" id="alamatKost" cols="24" rows="5"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Facility</td>
                                            <td>:</td>
                                            <td>
                                                <textarea name="facility" id="facility" cols="24" rows="5"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Room Availability</td>
                                            <td>:</td>
                                            <td>
                                                <input type="number" name="totalKost" id="totalKost"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td class="d-flex">:</td>
                                            <td>
                                                <input type="text" name="hargaKost" id="hargaKost"/>
                                            </td>
                                            <td>/Year</td>
                                        </tr>
                                        <tr>
                                            <td>Image Kost</td>
                                            <td>:</td>
                                            <td>
                                                <input type="file" class="file-upload" name="imageKost" id="imageKost"/>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="d-flex justify-content-center my-3">
                                        <button type="submit" class="btn btn-addkost">
                                            Add Kost
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row my-4">
                <?php foreach( $datakost as $psg ) : ?>
                    <div class="col-md-4">
                        <div class="card card-kost mb-3">
                            <img class="card-img-top" src="<?= base_url('uploads/kost_image/').$psg['imageKost']?> " alt="..."/>
                            <div class="card-body">
                                <h5 class="card-title"><?= $psg['namaKost']?></h5>
                                <table>
                                    <tr>
                                        <td align="left" valign="top">Name</td>
                                        <td align="left" valign="top">:</td>
                                        <td><?= $psg['namaKost']?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">Address</td>
                                        <td align="left" valign="top">:</td>
                                        <td><?= $psg['alamatKost']?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">Facility</td>
                                        <td align="left" valign="top">:</td>
                                        <td><?= $psg['fasilitasKost']?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">Room Availability</td>
                                        <td align="left" valign="top">:</td>
                                        <td valign="top"><?= $psg['totalKost']?> room</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">Price</td>
                                        <td align="left" valign="top">:</td>
                                        <td>
                                            <p class="price">
                                                Rp
                                                <span style="color: red"><b><?= number_format($psg['hargaKost'],2,',','.')?></b></span>
                                                /Month
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <a href="<?= base_url('kost/detailkost/'.$psg['idKost']); ?>" class="btn btn-detail my-2">View Detail</a>
                                <a href="<?= base_url('kost/hapus/'.$psg['idKost']); ?>" class="btn btn-delete my-2" style="border-radius:10px; background-color: rgb(202, 32, 32); color: white; border-radius: 5px" onclick="return confirm('Are you sure?');">Delete</a> 
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
