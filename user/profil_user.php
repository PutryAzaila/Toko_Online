<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesheet_profil.css">
    <link rel="icon" type="image/png" href="../admin/images/icondior.png" />
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        global $koneksi;
        $query_detail_pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan where id_pelanggan = '".$_SESSION['id_pelanggan']."'");
        $data_pelanggan = mysqli_fetch_array($query_detail_pelanggan);
    ?>

    <div class="container content">
        <div class="card-body align-self-center my-5">
        <h3 class="text-center">Profile</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 align-self-center">
                <img src="./images/profilkosong.png" alt="image" class="img-profil"width="80%">
            </div>
            <div class="col-md-8">
                <form action="ubah_profil.php?" method="POST">
                    <input type="hidden" name="id_pelanggan" value="<?=$data_pelanggan['id_pelanggan']?>">
                    <!-- nama petugas -->
                    <div class="mb-3">
                         <label class="form-label">Nama Petugas :</label>
                        <input type="text" name="nama"  class="form-control" value="<?=$data_pelanggan['nama']?>" required>
                    </div>
                    <!-- alamat -->
                    <div class="mb-3">
                        <label class="form-label">Alamat :</label>
                        <textarea name="alamat" class="form-control textarea" rows="1" required><?=$data_pelanggan['alamat']?></textarea>
                    </div>
                    <!-- no.telp -->
                    <div class="mb-3">
                         <label class="form-label">No.Telp :</label>
                        <input type="number" name="telp"  class="form-control" value="<?=$data_pelanggan['telp']?>" required>
                    </div>
                    <!-- username pelanggan-->
                    <div class="mb-3">
                        <label class="form-label">Username :</label>
                        <input type="text" name="username"  class="form-control" value="<?=$data_pelanggan['username']?>" required>
                    </div>
                    <!-- password-->
                    <div class="mb-3">
                        <label class="form-label">Password :</label>
                        <input type="password" name="password"  class="form-control" value="" placeholder="******">
                    </div>
                    <input type = "submit" name ="simpan" value ="Save Profile" class = "btn1 mb-2">
                </form>
            </div>
        </div>
        </div>
    </div>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
</body>
</html>