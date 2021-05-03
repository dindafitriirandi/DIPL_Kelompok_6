<div class="container mb-5">
	<div class="row mt-3">
		<div class="col-md-12">
  		<div class="card-header">
        <center><h1>KOST HUNTER</h1>
        <h3>Tambah Kost</h3></center>
  		</div>
  		<div class="card-body">
         <form action="<?=base_url('Kost/tambah')?>" method="post">
            <div class="form-group">
               <label for="namaKost">Nama Kost</label>
               <input type="text" name ="namaKost" class="form-control" id="namaKost"  >
               <small class="form-text text-danger"><?= form_error('namaKost')?></small>
            </div>
            <div class="form-group">
               <label for="nama">Total Kost</label>
               <input type="text" name ="total" class="form-control" id="total"  >
               <small class="form-text text-danger"><?= form_error('total')?></small>
            </div>
            <div class="form-group">
               <label for="nama">Alamat Kost</label>
               <input type="text" name ="alamatKost" class="form-control" id="alamatKost" >
               <small class="form-text text-danger"><?= form_error('alamatKost')?></small>
            </div>
            <div class="form-group">
               <label for="nama">Deskipsi Kost</label>
               <input type="text" name ="deskripsiKost" class="form-control" id="deskripsiKost" >
               <small class="form-text text-danger"><?= form_error('deskripsiKost')?></small>
            </div>
            <div class="form-group">
               <label for="nama">Harga Kost</label>
               <input type="text" name ="hargaKost" class="form-control" id="hargaKost">
               <small class="form-text text-danger"><?= form_error('hargaKost')?></small>
            </div>
            <div class="form-group">
               <label for="nama">No Pemilik Kost</label>
               <input type="text" name ="noPemilikKost" class="form-control" id="noPemilikKost" >
               <small class="form-text text-danger"><?= form_error('noPemilikKost')?></small>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Kost</button>
        </form>
  		</div>
	</div>
</div>