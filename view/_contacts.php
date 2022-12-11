<?php require_once 'core/boot.php' ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/nav.css">
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">


</head>

<body>
    <!-- place navbar here -->
    <?php include 'inc/header.php' ?>
    <?php include 'inc/navbar.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-title">
                    <h3>Contacts Us</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, maki years old.</p>
                </div>
                <div class="contact-text d-flex">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="ct-text">
                        <p>Address:</p>
                        <p>29-11 Road 2003 New York</p>
                    </div>
                </div>
                <div class="contact-text d-flex">
                    <i class="fa-sharp fa-solid fa-phone-volume"></i>
                    <div class="ct-text">
                        <p>Phone:</p>
                        <p>+84 398.827.475</p>
                    </div>
                </div>
                <div class="contact-text d-flex">
                    <i class="fa-regular fa-envelope"></i>
                    <div class="ct-text">
                        <p>Email:</p>
                        <p>hellochomotdo@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 aa">
                <div class="contact-title">
                    <h3>Leave A Comment</h3>
                    <p>Our staff will call back later and answer your questions.</p>
                    <div class="row">
                        <div class="col-md-6 contact">
                            <input type="text" placeholder="Your name">
                        </div>
                        <div class="col-md-6 contact">
                            <input type="text" placeholder="Your email">
                        </div>
                        <div class="col-md-12 contact-input">
                            <b>Your message</b>
                            <input type="text">
                            <button type="submit" class="btn btn-warning">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'inc/footer.php' ?>



    <main>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>