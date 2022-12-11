<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    

    <link rel="stylesheet" href="./view/public/css/style.css">
    
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./view/public/css/nav.css">
</head>

<body>
    <?php include 'inc/header.php'; ?>
    <?php include 'inc/navbar.php'; ?>

    <!-- login -->
    <div class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-form">
                            <h1 class="text-center">Login</h1>
                            <form action="login.php" method="post">
                            <i style="color: red;"><?php if (isset($_SESSION['flash_message'])) echo  $_SESSION['flash_message'];
                                    unset($_SESSION['flash_message']); ?></i>
                                <div class="group-input">
                                    <label class="group-input-text" for="username">Username or email address *</label>
                                    <input type="text" name="email"  placeholder="User name" id="name" required>
                                </div>
                                <div class="group-input">
                                    <label class="group-input-text" for="pass">Password *</label>
                                    <input type="password" name="password" placeholder="Password" id="pass" required>
                                </div>
                                <div class="group-input-check">
                                    <div class="gi-more">
                                        <input type="checkbox" id="save-pass" required>
                                        <label class="save-text" for="save-pass">Save Password</label>
                                        <a class="forget-text" href="">Forget your Password</a>
                                    </div>
                                    <button type="submit" class=" btn btn-warning sign">SIGN IN</button>
                                    <div class="icon-submit">
                                      <button type="submit" class=" btn btn-primary icon-submit-fb ">FACEBOOK</button>
                                    <button type="submit" class=" btn btn-danger icon-submit-gg ">GOOGLE</button>
                                    </div>
                                </div>
                            </form>
                            <div class="switch-login">
                                <a href="register.php" class="or-login">OR CREATE AN ACCOUNT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- login end-->

    <?php include 'inc/footer.php'; ?>

</body>

</html>