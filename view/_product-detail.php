<?php require_once 'core/boot.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/nav.css">
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">

</head>

<body>

    <?php include 'inc/header.php' ?>
    <?php include 'inc/navbar.php' ?>


    <!-- card -->
    <div class="container cart-title">
        <h2>Cotegory</h2>
    </div>
    <section class=" container my-5">
        <div class="row">
            <?php $product = get_product($_GET['id']);?>
            <div class="col-lg-5 col-md-5 col-12 img-cart-product">
                <img class="big-img-cart " src="<?php echo $product['img']; ?>" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 text-cart-product">
                <h6>CART / CLOTHES</h6>
                <h3><?php echo $product['name']?></h3>
                <h2>$<?php echo $product['price']?></h2>
                <select class="my-3 p-2">
                    <option value="">Size</option>
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">Xl</option>
                </select>
                <form action="cart.php" method="post">
                <input type="hidden" name="action" value="create">
                <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                <!-- quantity -->
                <div class="mt-4">
                    <h3 class="text-sm text-gray-800 uppercase mb-1">Quantity</h3>
                    
                    <input type="number" name="quantity" id="myNumber" value="1">
                <div class="d-grid my-4">
                    <button class="btn btn-lg btn-dark" type="submit" id="bagBtn">
                        Add To Cart
                    </button>
                </div>
                <h4>Product Description</h4>
                <span>- Phù hợp với dạp phố, đi làm...</span><br>
                <span>- Kích cỡ: S - M - L</span><br>
                <span>- Chiều dài: S:50,5cm - M:51,2cm - L:51,9cm</span><br>
                
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include 'inc/footer.php' ?>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>

</html>