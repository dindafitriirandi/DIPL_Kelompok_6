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
                <h1 style="font-weight:bold; margin-top:100px">KOST HUNTER</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" >
        <div class="card my-4" style="border: 0; background-color: transparent">
                <div class="card-body align-self-center">
                    <form action="<?=base_url('login')?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" style="border-radius: 20px">
                        <small class="form-text text-danger"><?= form_error('username')?></small>
                    </div>
                    <div class="form-group">
                        <label for="password_user">Password</label>
                        <input type="password" class="form-control" id="Password_user" name="password_user" style="border-radius: 20px">
                        <small class="form-text text-danger"><?= form_error('password_user')?></small>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block login">Login</button>
                    </form>
                    <p class="mt-3">Don't Have an Account ? <a href="<?=base_url("register")?>" style="color: white">Register Here</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>