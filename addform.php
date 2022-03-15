<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset-utf-8">
    <title>Codelgniter uniga</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="text/css" href="<? echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Belajar Framework CI [uniga]</h1>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h3>Tambah Data
                <span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>Back</a></span>
            </h3>
            <hr>
            <form method="POST" action="<?php echo base_url(); ?>index.php/Welcome/insert">
                <div class=form-group">
                    <label>Nama :</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class=form-group">
                    <label>NIM :</label>
                    <input type="text" class="form-control" name="nim">
                </div>
                <div class=form-group">
                    <label>Jurusan :</label>
                    <input type="text" class="form-control" name="jurusan">
                </div>
                <div class=form-group">
                    <label>Alamat :</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class=form-group">
                    <label>Email :</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class=form-group">
                    <label>Password :</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-primary"><span class="glyphicon-floppy-disk"></span>Save</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
</html>