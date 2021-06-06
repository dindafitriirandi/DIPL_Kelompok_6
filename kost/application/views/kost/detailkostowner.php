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
    <link rel="stylesheet" href="<?= base_url('assets/detailkost.css')?>" />
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
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="img-kost">
                    <img src="<?= base_url('uploads/kost_image/'.$datakost['imageKost'])?> " alt="" width="700" />
                </div>
                <h2 style="margin-top: 20px">Price</h2>
                <h2 style="color: red;">Rp <?= number_format($datakost['hargaKost'],2,',','.')?><span style="color: black">/Month</span></h2>
            </div>
            <div class="col">
                <h1><?= $datakost['namaKost']?></h1>
                <h4>Left <span style="color: red"><?=$datakost['totalKost']?> rooms</span></h2>
                    <p style="color: gray;">Last Update <?= date("d M Y",strtotime($datakost['created_at']))?></p>
                    <h1>Facilities</h1>
                    <!-- <ul>
                        <li>AC</li>
                        <li>Kasur</li>
                        <li>Dapur Bersama</li>
                        <li>Kamar Mandi Dalam</li>
                    </ul> -->
					<p><?=$datakost['fasilitasKost']?></p>
                    <!-- <h1>Description</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio id nobis ad ipsa dolorem eos saepe nostrum, excepturi explicabo cupiditate!</p> -->
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col d-flex justify-content-center mb-5">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="1080" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502.2332593231659!2d107.63059609518282!3d-6.97826032392176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2474f060809fbcd3!2sKost%20Rumah%20Strawberry!5e0!3m2!1sid!2sid!4v1622980104856!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br>
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
        <div class="row">
            <div class="col d-flex justify-content-end">
                <div class="edit-kost mr-3 mb-5">
                    <button type="button" class="btn btn-addkost ml-3" data-toggle="modal" data-target="#exampleModal">
                            Edit Kost
                        </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="title d-flex justify-content-center mb-5">
                                        <h4>Edit Kost</h4>
                                    </div>
                                    <form action="<?= base_url('kost/editkostowner/'.$datakost['idKost'])?>" method="POST" class="form-add-kost" enctype="multipart/form-data">
                                        <table width="100%">
                                            <tr>
                                                <td>Name</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="namaKost" value="<?= $datakost['namaKost']?>"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>:</td>
                                                <td>
                                                    <textarea name="alamatKost" id="address" cols="24" rows="5" ><?= $datakost['alamatKost']?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Facility</td>
                                                <td>:</td>
                                                <td>
                                                    <textarea name="facility"  id="facility" cols="24" rows="5"><?= $datakost['fasilitasKost']?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Room Availability</td>
                                                <td class="d-flex">
                                                    :
                                                </td>
                                                <td>
                                                    <input type="number" value="<?= $datakost['totalKost']?>" name="totalKost"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price</td>
                                                <td class="d-flex">
                                                    :
                                                </td>
                                                <td>
                                                    <input type="number" name="hargaKost" value="<?= $datakost['hargaKost']?>"/>
                                                </td>
                                                <td>/Month</td>
                                            </tr>
                                            <tr>
                                                <td>Image Kost</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="file" class="file-upload" name="imageKost"/>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="d-flex justify-content-center my-3">
                                            <button type="submit" class="btn btn-addkost">
                                                Edit Kost
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<a href="<?= base_url('kost/hapus/'.$datakost['idKost']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete Kost</a>
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
