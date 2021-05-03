<div class="container mb-5">
	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
			 	<div class="card-header">
			 		Detail Data Kost
			 	</div>
			  	<div class="card-body">
			    	<h5 class="card-title"><?= $kost['namaKost'];  ?></h5>
			    	<h6 class="card-subtitle mb-2 text-muted"><?= $kost['alamatKost'];  ?></h6>
			    	<p class="card-text"><?= $kost['idKost']; ?></p>
			    	<p class="card-text"><?= $kost['totalKost'];  ?></p>
			    	<p class="card-text"><?= $kost['deskripsiKost'];  ?></p>
			    	<p class="card-text"><?= $kost['hargaKost'];  ?></p>
			    	<p class="card-text"><?= $kost['noPemilikKost'];  ?></p>
			    	<a href="<?= base_url(); ?>kost" class="btn btn-primary">Kembali</a>
			  	</div>
			</div>
		</div>
	</div>
</div>