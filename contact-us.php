<?php include('config/dbconfig.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta content="World Wide Technology Blog about Mobile App development, web development and many more development technologies include our blogs. All about microsoft, amazon, ebay, aliexpress, games and more." property="og:description">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/custom.css?v=<?php echo time() ?>">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/custom.js?v=<?php echo time() ?>"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Contact Us</title>
</head>

<body>

    <?php include('includes/main-nav.php') ?>

    <div class="container mt-4">

    <?php 
        if (isset($_SESSION['error_msg'])) {
            ?>
         <div class="alert alert-danger" role="alert"><?php echo $_SESSION['error_msg']; ?></div>
        
        <?php
          unset($_SESSION['error_msg']);
         }

         if (isset($_SESSION['success_msg'])) {
            ?>
         <div class="alert alert-success" role="alert"><?php echo $_SESSION['success_msg']; ?></div>
            <?php  
            unset($_SESSION['success_msg']);
         }

         ?>


        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center"><img src="img/logo.png" alt="" style="width: 100px; height: 95px;"></h1>
                <h2 class="text-center">Top Free School</h2>
                <p class="text-center" style="color: black;">Galewela, Sri Lanka <br>topfreeschool@gmail.com <br><a href="https://aqwamag.com" target="_blank">AqwaMag.com</a><br>CEO: <a href="https://dineshwayaman.com" target="_blank">Dinesh Wayaman</a></p>
            </div>
            <div class="col-md-4">
                <h1>Fill This Form To Contact Us</h1>
                <form method="POST" action="config/sqlcode.php">
                    <div class="form-group col-md-126 mt-2">
                        <label for="inputEmail4">Your Name</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-md-12 mt-2">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-12 mt-2">
                        <label for="inputPassword4">Message</label>
                        <textarea type="text" name="message" class="form-control" id="inputPassword4" placeholder="Message" required></textarea>
                    </div>

                    <div class="row mt-3 text-center">
                        <div class="form-group">
                            <button type="submit" name="sendmessage" class="btn btn-danger">Send</button>
                            <button type="reset" class="btn btn-warning">Clear</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php include('includes/main-footer.php') ?>
</body>

</html>