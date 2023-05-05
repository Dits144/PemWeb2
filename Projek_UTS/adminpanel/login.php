<?php
session_start();
require_once "../koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .login-box {
        width: 500px;
        height: 300px;
        box-sizing: border-box;
        border-radius: 10px;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <form action="" method="post">
                <div class="m-1">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                        placeholder="admin">
                </div>
                <div class="m-1">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
                        placeholder="admin"></input>
                </div>
                <button type="submit" name="loginbtn" class="btn btn-outline-success m-5">Login</button>
            </form>
        </div>
        <div class="mt-3">
            <?php
            if (isset($_POST['loginbtn'])) {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

                $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
                $countdata = mysqli_num_rows($query);
                $data = mysqli_fetch_array($query);


                if($countdata>0){
                    if (password_verify($password, $data['password'])){
                        $_SESSION['username'] = $data['username'];
                        $_SESSION['login'] = true;
                        header('location: ../adminpanel/');
                    }else {
                        ?>
                        <div class="alert alert-danger" role="alert">
                        Password salah
                    </div>
                    <?php
                    }
                }else {
                    ?>
                <div class="alert alert-danger" role="alert">
                    Akun Tidak Tersedia
                </div>
                <?php

                }
            }
            ?>
    </div>
    </div>
</body>

</html>