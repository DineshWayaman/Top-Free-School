<nav class="navbar navbar-expand-lg navbar-light bg-light phone-new-pad text-uppercase">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="" style="width: 50px; height: 45px;"></a>
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Catagories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php
                    $getAllCat = "SELECT * FROM `categories`";
                    $getCat = $conn->prepare($getAllCat);
                    $getCat->execute();
                    $catrow = $getCat->rowCount();

                    if ($catrow > 0) {
                        while ($catfetch = $getCat->fetch()) {

                    ?>
          <a class="dropdown-item" href="cat_view.php?cat=<?php echo $catfetch['c_name'] ?>"><?php echo $catfetch['c_name'] ?></a>
         
         <?php
                        }
                    }
                    ?>

        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about-us.php">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact-us.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="privacy-policy.php">Privacy Policy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="disclaimer.php">Disclaimer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="terms-and-conditions.php">Terms and Condition</a>
      </li>
    </ul>
  </div>




</nav>