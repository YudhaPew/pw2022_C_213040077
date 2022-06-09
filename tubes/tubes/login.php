<?php
session_start();
require 'function.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_admin = '$username'") or die(mysqli_error($conn));

    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["pass_admin"])) {

            //cek role admin
            if ($row['role'] == "admin") {
                $_SESSION['id_admin'] = $row['id'];
                $_SESSION['role'] = "admin";
                header("Location:admin.php");
            } else if ($row['role'] == "pelanggan") {
                $_SESSION['id_pelanggan'] = $row['id'];
                $_SESSION['role'] = "pelanggan";
                header("Location:user.php");
            }
        }
    }

    $error = true;
}
?>
<html>

<head>
    <title>LOGIN SHOPEW</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <link href="css/signin.css" rel="stylesheet">
    </head>

    <body class="text-center">

    </body>



    <div class="panel_login">
        <p class="tulisan_atas"><strong>Silahkan Masuk</strong></p>
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username/Password Salah!</p>
        <?php endif; ?>

        <div class="form">
            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form_login" placeholder="Username" required="required" autocomplete="off">
        </div>

        <div class="form">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password" required="required">
        </div>

        <a href="register.php" class="btn btn-primary">Daftar</a>

        <input type="submit" class="btn btn-success" name="login" value="Masuk">
        <br />
        <br />
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>