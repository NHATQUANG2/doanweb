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
    

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul>
                        <li><a href=""></a>Men</li>
                        <li><a href=""></a>Women</li>
                        <li><a href=""></a>Kid</li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <ul>
                        <li><input type="checkbox">Calvin Klein</li>
                        <li><input type="checkbox">Diesel</li>
                        <li><input type="checkbox">Polo</li>
                        <li><input type="checkbox">Tommy Hifiger</li>
                        <li><input type="checkbox">T-Shirst</li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color d-flex">
                        <div class="color-circle-blue"></div>
                        <b>Blue</b>
                    </div>
                    <div class="fw-color d-flex ">
                        <div class="color-circle-red"></div>
                        <b>Red</b>
                    </div>
                    <div class="fw-color d-flex">
                        <div class="color-circle-pink"></div>
                        <b>Pink</b>
                    </div>
                    <div class="fw-color d-flex">
                        <div class="color-circle-yellow"></div>
                        <b>Yellow</b>
                    </div>
                    <div class="fw-color d-flex">
                        <div class="color-circle-orange"></div>
                        <b>Orange</b>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-6">
                            <select class="product-option">
                                <option value="">Default Sorting</option>
                                <option value="">Shirt</option>
                                <option value="">Trousers</option>
                            </select>
                            <select class="product-option">
                                <option value="">Show</option>
                                <option value="">06</option>
                                <option value="">09</option>
                            </select>
                        </div>
                        <div class="col-lg-6 product-option-title">
                            <p>Show 06 -> 09 Of 36 Products</p>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        <?php $product_list = get_all_products() ?>
                        <?php foreach ($product_list as $product) { ?>
                            <div class="col-lg-4 mt-4">
                                <div class="card">
                                    <div class="products-item">
                                        <div class="pi-picture">
                                        <a href="product-detail.php?id=<?php echo $product['id'] ?>">
                                            <img src="<?php echo $product['img'] ?>" class="w-100" alt="">
                                        </a>
                                        </div>
                                        <div class="pi-text d-block">
                                            <div class="catogary-name"><?php echo $product['name'] ?></div>
                                            <a href=""></a>
                                        </div>
                                        <div class="pi-price">
                                            <span>$<?php echo $product['price'] ?></span>
                                            <p>$13..00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="load">
                        <i class="fa-sharp fa-solid fa-spinner"></i>
                        <a href="">
                            <h4>Loading More</h4>
                        </a>
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