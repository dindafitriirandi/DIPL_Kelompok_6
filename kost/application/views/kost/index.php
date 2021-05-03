
	<div class="container mb-5">
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

		<div class="row mt-3">
			<div class="col-md-12">
				<h3>List Kost</h3>
				<!-- <?php if(empty($kost)) : ?>
					<div class="alert alert-danger" role="alert">
						Data Kost Tidak Ditemukan
					</div>
				<?php endif; ?>  -->
				<ul class="list-group">
					<?php foreach( $datakost as $psg) : ?>
	  					<li class="list-group-item">
	  						<?= $psg['namaKost']?>
							  <a href="<?= base_url(); ?>kost/hapus/<?= $psg['idKost']; ?>" class="btn btn-danger float-right btn-sm mx-2" style="border-radius:10px;" onclick="return confirm('yakin?');">Hapus</a> 
							  <a href="<?= base_url(); ?>kost/ubah/<?= $psg['idKost']; ?>" class="btn btn-success float-right btn-sm mx-2" style="border-radius:10px;">Update</a>
							  <a href="<?= base_url(); ?>kost/detail/<?= $psg['idKost']; ?>" class="btn btn-primary float-right btn-sm mx-2" style="border-radius:10px;">Detail</a>
							<img src="<?=base_url("../assets/kostAnnisa.jpg");?>" width=150>
	  					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>

