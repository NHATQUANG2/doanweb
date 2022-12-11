<?php require_once 'core/boot.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- link icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="./view/public/css/style.css">
  <link rel="stylesheet" href="./view/public/css/nav.css">
  <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">

</head>

<body>



  <!-- place navbar here -->
  <?php include 'inc/header.php'; ?>
  <?php include 'inc/navbar.php'; ?>
  <?php include 'inc/banner.php'; ?>


  <div class="container mb-5">
    <div class="row">
      <?php $category_list = get_all_categories() ?>
      <?php foreach ($category_list as $category) { ?>
        <div class="col-lg-4 col-md-12 col-12 col-sm-12 inner">
          <div class="banner">

            <a href="category.php">
              <img class="image" src="<?php echo $category['img']; ?>" alt="">
            </a>
          </div>
          <div class="inner-text">
            <span><?php echo $category['name']; ?></span>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <div class="women-banner">
    <div class="container">
      <div class="col-lg-12">
        <div class="filter-control">
          <ul>
            <li>Cothings</li>
            <li>HandBag</li>
            <li>Shoes</li>
            <li>Accessories</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <?php $product_list = get_all_products() ?>
        <?php foreach ($product_list as $product) { ?>
          <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="product-item">
              <div>
                <div class="product-image">
                  <a href="product-detail.php?id=<?php echo $product['id'] ?>">
                    <img src="<?php echo $product['img'] ?>" width="225px" height="300px" alt="">
                  </a>
                </div>
                <div class="product-text">

                  <a href="">
                    <h5>Pure Pineapple</h5>
                  </a>
                  <p><?php echo $product['name'] ?></p>
                  <b>$<?php echo $product['price'] ?></b>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class=" container-fluid intagram-photo d-flex">
    <div class="intagram-item"><img src="./view/public/images/insta-1.jpg" alt=""></div>
    <div class="intagram-item"><img src="./view/public/images/insta-2.jpg" alt=""></div>
    <div class="intagram-item"><img src="./view/public/images/insta-3.jpg" alt=""></div>
    <div class="intagram-item"><img src="./view/public/images/insta-4.jpg" alt=""></div>
    <div class="intagram-item"><img src="./view/public/images/insta-5.jpg" alt=""></div>
    <div class="intagram-item"><img src="./view/public/images/insta-6.jpg" alt=""></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col text-center p-5 ">
        <h2>From The Blog</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="single-latest-blog">
          <img src="./view/public/images/latest-1.jpg" alt="">
          <div class="latest-text">
            <div class="lastest-text">
              <div class="tag-list">
                <i class="fa-regular fa-calendar"></i>
                <i class="fa-regular fa-comment"></i>
              </div>
              <h3>The Best Street Style From London Fashion Week </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, culpa.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="single-latest-blog">
          <img src="./view/public/images/latest-2.jpg" alt="">
          <div class="latest-text">
            <div class="lastest-text">
              <div class="tag-list">
                <i class="fa-regular fa-calendar"></i>
                <i class="fa-regular fa-comment"></i>
              </div>
              <h3>The Best Street Style From London Fashion Week </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, culpa.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="single-latest-blog">
          <img src="./view/public/images/latest-3.jpg" alt="">
          <div class="latest-text">
            <div class="lastest-text">
              <div class="tag-list">
                <i class="fa-regular fa-calendar"></i>
                <i class="fa-regular fa-comment"></i>
              </div>
              <h3>The Best Street Style From London Fashion Week </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, culpa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col d-flex benefit">
        <div class="benefit-icon">
          <i class="fa-solid fa-dolly"></i>
        </div>
        <div class="beneffit-text">
          <h5>Free Shipping</h5>
          <p>For all order over 99$</p>
        </div>
      </div>
      <div class="col d-flex benefit">
        <div class="benefit-icon">
          <i class="fa-regular fa-clock"></i>
        </div>
        <div class="beneffit-text">
          <h5>Delivery On Time</h5>
          <p>If good have prolems</p>
        </div>
      </div>
      <div class="col d-flex benefit">
        <div class="benefit-icon">
          <i class="fa-solid fa-dolly"></i>
        </div>
        <div class="beneffit-text">
          <h5>Secure Payment</h5>
          <p>100% secure payment</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php include 'inc/footer.php' ?>
  <!-- Footer -->


  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>