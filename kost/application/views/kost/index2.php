
	<div class="container mb-5" style="margin-top: 90px;">
		<!-- <?php if($this->session->flashdata('flash') ) : ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
	  				Data Kost <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    				<span aria-hidden="true">&times;</span>
	  				</button>
				</div>
			</div>
		</div>
		<?php endif; ?> -->

		<div class="row mt-3">
			<div class="col-md-12">
				<h1 style="text-align: center; font-size: 35px; font-weight: bold;">List Kost</h1>
				<!-- <?php if(empty($kost)) : ?>
					<div class="alert alert-danger" role="alert">
						Data Kost Tidak Ditemukan
					</div>
				<?php endif; ?>  -->

				<div class="row mt-3 ">
					<div class="col-md-6">
						<a href="<?= base_url(); ?>kost/tambah" class="btn btn-primary" style="background: red; border: 0">Tambah Data Kost</a>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-md-6">
						<form action="" method="post">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Cari data kost.." name="keyword">
								<div class="input-group-append">
									<button class="btn btn-primary" type="submit" style="background: red; border: 0" >Search</button>
								</div>
							</div>	
						</form>
					</div>
				</div>

				<ul class="list-group">
					<?php foreach( $datakost as $psg) : ?>
	  					<li class="list-group-item">
	  						<?= $psg['namaKost']?>
							<a href="<?= base_url(); ?>kost/hapus/<?= $psg['idKost']; ?>" class="btn btn-danger float-right btn-sm mx-2" style="border-radius:10px;" onclick="return confirm('yakin?');">Hapus</a> 
							<a href="<?= base_url(); ?>kost/ubah/<?= $psg['idKost']; ?>" class="btn btn-success float-right btn-sm mx-2" style="border-radius:10px;">Update</a>
							<a href="<?= base_url(); ?>kost/detail/<?= $psg['idKost']; ?>" class="btn btn-primary float-right btn-sm mx-2" style="border-radius:10px;">Detail</a>
							<img src="<?=base_url("./assets/listkost/kostAnnisa.jpg");?>" width=150>
	  					</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="row class-group">
				<?php foreach( $datakost as $psg ) : ?>
					<div class="card col-md-4" style="width: 18rem; margin: 10px 10px;">
						<!-- <img src="<?= $psg['gambar'] ?>" class="card-img-top" alt="..."> -->
						<div class="card-body">
							<!-- <img class="card-img-top" src="<?= $psg['gambar'] ?>" width="100" alt="Card image cap"> -->
							<img class="card-img-top" src="<?=base_url("./assets/listkost/kostRafflesia.jpg");?>" alt="Card image cap">
							<h5 class="card-title"><?= $psg['namaKost']?></h5>
							<p class="card-text"><b>Kost Name</b>: <?= $psg['namaKost']?></p>
							<p class="card-text"><b>Address</b>: <?= $psg['alamatKost']?></p>
							<p class="card-text"><b>Facility</b>: <?= $psg['deskripsiKost']?></p>
							<p class="card-text"><b>Room Available</b>: <?= $psg['totalKost']?> room</p>
							<p class="card-text"><b>Rp <?= $psg['hargaKost']?></b>/year</p>
							<a href="#" class="btn btn-primary" style="background-color: #35AAB1">View Detail</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

