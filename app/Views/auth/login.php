<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!-- <img class="wave" src="<?= base_url(); ?>/img/leftbg.png"> -->
    <div class="container">
        <div class="img/login.svg">
            <img src="<?= base_url(); ?>/img/login.svg">
        </div>
        <div class="login-content">
            <form action="<?= base_url('auth/admin');?>">
                <img src="<?= base_url(); ?>/img/loginava.svg">
                <h2 class="title">Login Page</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input">
                    </div>
                </div>
                <a href="<?= base_url('auth/register'); ?>">Create New Account?</a>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url(); ?>/js/main.js"></script>
</body>

</html>