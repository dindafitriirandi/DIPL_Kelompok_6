<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?= base_url("assets/asset/Logo.svg")?>" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets/order.css')?>" />
    <title>Kost Hunter</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?= base_url("assets/asset/Logo.svg")?>" alt="" width="120">
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
            <span class="font-weight-bold">Booking > </span> Transaction
        </h4>
        <h2>Detail Kost</h2>
        <div class="box">
            <div class="container">
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <img src="<?= base_url("uploads/kost_image/".$pemesananKost['imageKost'])?>" alt="" width="500" />
                    </div>
                    <div class="col">
                        <table>
                            <tr>
                                <td align="left" valign="top">Name</td>
                                <td align="right" valign="top">:</td>
                                <td><?= $pemesananKost['namaKost']?></td>
                            </tr>
                            <tr>
                                <td align="left" valign="top">Address</td>
                                <td align="right" valign="top">:</td>
                                <td><?= $pemesananKost['alamatKost']?></td>
                            </tr>
                            <tr>
                                <td align="left" valign="top">Facility</td>
                                <td align="right" valign="top">:</td>
                                <td>
								<?= $pemesananKost['fasilitasKost']?>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td align="left" valign="top">Desc</td>
                                <td align="right" valign="top">:</td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos perspiciatis iure minus reiciendis veritatis officia minima, et saepe nihil recusandae.
                                </td>
                            </tr> -->
                            <tr>
                                <td align="left" valign="top">Price</td>
                                <td align="right" valign="top">:</td>
                                <td>
                                    Rp
                                    <span class="text-danger" id="price"><?= number_format($pemesananKost['hargaKost'],2,',','.')?></span
                                        >
                                        /Month
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <form action="<?= base_url("kost/transaction/".$pemesananKost['idPemesanan'])?>" method="POST">
            <h2 class="my-3">Orderer Data</h2>
              <div class="box">
                <h4><?= $pemesananKost['nama']?></h5>
                  <div class="info-user d-flex">
                    <h5 class="mr-5"><?= $pemesananKost['email']?></h5>
                    <h5><?= $pemesananKost['nohp']?></h5>
                  </div>
                  <div class="personal d-flex align-items-center">
                    <input type="radio" name="reason" value="I ordered for personal">
                    <h5 class="ml-3">I ordered for personal</h5>
                  </div>
                  <div class="personal d-flex align-items-center">
                    <input type="radio" name="reason" value="I ordered for other people">
                    <h5 class="ml-3">I ordered for other people</h5>
                  </div>
                </div>
              <h2>Pricing Details</h2>
              <div class="box">
                <table style="width: 100%;">
                  <tr>
                    <td>Price</td>
                    <td align="right" > 
					<select class="custom-select" name="duration" style="width: 70px;" id="duration" onchange="getSelectValue()">
								<option value="1" <?php if($pemesananKost['duration'] == 1) echo 'selected="selected"';?>>1</option>
								<option value="3" <?php if($pemesananKost['duration'] == 3) echo 'selected="selected"';?>>3</option>
								<option value="6" <?php if($pemesananKost['duration'] == 6) echo 'selected="selected"';?>>6</option>
								<option value="12" <?php if($pemesananKost['duration'] == 12) echo 'selected="selected"';?>>12</option>
					</select> Month X  
                  </td>
                  <td>Rp <span id="price"><?= $pemesananKost['hargaKost']?></span></td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td ></td>
                                <td >Rp 55.000,00</td>
                            </tr>
                            <tr>
                                <td>Total Price</td>
                                <td></td>
                                <td >Rp <input type="number" id="totalHargaKost" name="totalHargaKost"   value="<?= $pemesananKost['totalHargaKost']+55000?>" readonly>
								
								</td>
                            </tr>
                        </table>
                    </div>
                    <button type="submit" class="btn btn-order float-right my-3">Continue Ordering</button>
                    </form>
                </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
        function getSelectValue()
        {
            var selectedValue = document.getElementById("duration").value;
            var price = document.getElementById("price").innerHTML;
			var totalNow = selectedValue * parseInt(price) *1000;
			document.getElementById("totalHargaKost").value = totalNow + 55000;
        }
    </script>
</body>
</html>
