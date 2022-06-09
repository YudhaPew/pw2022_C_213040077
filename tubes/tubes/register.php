<?php

require 'function.php';

if (isset($_POST['register'])) {
    if(registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Akun anda telah dibuat!');
                document.location.href = 'index.php'
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}

 ?>
<html>
    <head>
        <title>Daftar SHOPEW</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/signin.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        

            
        <div class="panel_login">
            <p class="tulisan_atas"><strong>Silahkan Daftar</strong></p>

            <form action="" method="post">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_user" id="nama_user" class="form_login" placeholder="Nama Lengkap" required="required" autocomplete="off">

            <label>Username</label>
            <input type="text" name="username" id="username" class="form_login" placeholder="Username" required="required"  autocomplete="off">

            <label>Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password" required="required"  autocomplete="off">

            <label>Konfirmasi Password</label>
            <input type="password" name="password2" id="password2" class="form_login" placeholder="Password" required="required"  autocomplete="off">

            <a href="login.php" class="btn btn-success" >Masuk</a>

            <input type="submit" class="btn btn-primary" value="Daftar" name="register">
            <br/>
            </form>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>