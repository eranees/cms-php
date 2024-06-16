<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><?= SITE_NAME ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="includes/userverify.php">dashboard
          </a>
        </li>
        <?php
        if (!isset($_SESSION['user_role'])) {
          echo '<li class="nav-item "><a class="nav-link" href="login.php">Login</a></li>';
        }
        ?>
        <li class="nav-item ">
          <a class="nav-link" href="registration.php">Registration
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="contact.php">Contact
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>