<div class=" container-fluid top-header">
  <div class="row">
    <div class="ht">
      <div class="col-lg-10 col-md-9 d-sm-none d-none d-md-block">
        <div class="ht-left">
          <div class="ht-email">
            <i class="fa-solid fa-envelope"></i>
            <p class="ht-text">Quangln.htra.291102@gmail.com</p>
          </div>
          <div class="ht-phone">
            <i class="fa-solid fa-phone"></i>
            <p class="ht-text">0398827475</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 d-sm-none d-none d-md-block">
        <div class="ht-right">
          <div class="icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-google"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-square-youtube"></i>
          </div>
          <div class="login">
            <ul class="navbar-nav">
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <?php if (isset($_SESSION['user'])) { ?>
                    <li>
                      <a class="dropdown-item" href="logout.php" class="text-gray-200 hover:text-white transition">Logout</a>
                    </li>
                  <?php } else { ?>
                    <li><a class="dropdown-item" href="login.php" class="text-gray-200 hover:text-white transition">Login</a></li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="register.php" class="text-gray-200 hover:text-white transition">Register</a></li>
                  <?php } ?>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>