<div class="container mb-5">
	
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
  				<div class="card-header">
            <center><h1>KOST HUNTER</h1>
            <h3><u>EDIT KOST</u></h3></center>
  				</div>
  				<div class="card-body">
            <form action="<?=base_url('Kost/ubah/'.$kost['idKost'])?>" method="post">
                <div class="form-group">
                  <label for="nama">Nama Kost</label>
                  <input type="text" name ="nama" class="form-control" id="nama" value="<?= $kost['namaKost']; ?>">
                  <small class="form-text text-danger"><?= form_error('nama')?></small>
                </div>
                <div class="form-group">
                  <label for="nama">Total Kost</label>
                  <input type="text" name ="total" class="form-control" id="total" value="<?= $kost['totalKost']; ?>">
                  <small class="form-text text-danger"><?= form_error('total')?></small>
                </div>
                <div class="form-group">
                  <label for="nama">Deskripsi Kost</label>
                  <input type="text" name ="deskripsi" class="form-control" id="deskripsi" value="<?= $kost['deskripsiKost']; ?>">
                  <small class="form-text text-danger"><?= form_error('deskripsi')?></small>
                </div>
                <div class="form-group">
                  <label for="nama">Harga Kost</label>
                  <input type="text" name ="harga" class="form-control" id="harga" value="<?= $kost['hargaKost']; ?>">
                  <small class="form-text text-danger"><?= form_error('harga')?></small>
                </div>
                <div class="form-group">
                  <label for="nama">No Pemilik Kost</label>
                  <input type="text" name ="nopemilik" class="form-control" id="nopemilik" value="<?= $kost['noPemilikKost']; ?>">
                  <small class="form-text text-danger"><?= form_error('myir')?></small>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary float-right">Update Data</button>
            </form>		
  				</div>
			</div>
			
		</div>
	</div>
</div>