<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css'); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>"/>
    <title>Kost Hunter</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                <h1 style="font-weight:bold; margin-top:20px">KOST HUNTER</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" >
            <div class="row">
                <div class="col d-none d-lg-block">
                </div>
                <div class="col">
                    <div class="card" style="border: 0; background-color: transparent;">
                        <div class="card-body">
                            <form action="<?=base_url('register')?>" method="post">
                            <div class="form-group">
                                <label for="nama_user">Nama</label>
                                <input type="text" class="form-control" style="border-radius: 10px" id="nama_user" name="nama_user">
                                <small class="form-text text-danger"><?= form_error('nama_user')?></small>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" style="border-radius: 10px" id="username" name="username">
                                <small class="form-text text-danger"><?= form_error('username')?></small>
                            </div>
                            <div class="form-group">
                                <label for="password_user">Password</label>
                                <input type="password" class="form-control" style="border-radius: 10px" id="password_user" name="password_user">
                                <small class="form-text text-danger"><?= form_error('password_user')?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" style="border-radius: 10px" id="email" name="email">
                                <small class="form-text text-danger"><?= form_error('email')?></small>
                            </div>
                            <div class="form-group">
                                <label for="nouser">No-HP</label>
                                <input type="nouser" class="form-control" style="border-radius: 10px" id="nouser" name="nouser">
                                <small class="form-text text-danger"><?= form_error('nouser')?></small>
                            </div>
                            <div class="form-group">
                                <label for="birth_date">Date of Birth</label>
                                <input type="date" class="form-control" style="border-radius: 10px" id="birth_date" name="birth_date">
                                <small class="form-text text-danger"><?= form_error('birth_date')?></small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-3 regis" style="">Submit</button>
                            </form>
                            <p>Already Have an Account ? <a href="<?=base_url('login')?>"  style="color: white">Login Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>