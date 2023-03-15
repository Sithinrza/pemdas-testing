<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="center">
    <img src="assets/img/bisokop.png" alt="logo" width="150" class="d-block mx-auto img-fluid">

        <h1>Login</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="username">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password">
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
                <input type="submit" name="login" value="Login">
            <div class="signup_link">
                Not a member? <a href="#">Sign Up</a>
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['login'])){

        $username = $_POST['username'];
        // $username diisi inputan yang namenya username
        // $password diisi inputan yang namenya password
        $password = $_POST['password'];
        // jika nilai username sama dengan properti dan nilai password sama dengan 25
        // ATAU ...
        if($username === "liza" && $password === "25" || $username === "admin" && $password === "admin"){
            // akan diarahkan kehalaman home.php yg ada didalam folder pages
            echo"<meta http-equiv='refresh' content='1;url=pages/home.php'>";
        } else{
            // jika salah akan muncul alert login anda gagal
            echo"<script>alert('Login anda gagal, Ulangi!)</script>";
        }
    }
    ?>
</body>
</html>