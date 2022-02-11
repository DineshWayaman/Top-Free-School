<?php include('config/dbconfig.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta content="We are TopFreeSchool Group. Read and Improve your knowladge with us. don't forget to share with your friends." property="og:description">
    <meta name="description" content="We are TopFreeSchool Group. Read and Improve your knowladge with us. don't forget to share with your friends.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/custom.css?v=<?php echo time() ?>">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/custom.js?v=<?php echo time() ?>"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>About Us</title>
</head>

<body>
    <?php include('includes/main-nav.php') ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center"><img src="img/logo.png" alt="" style="width: 100px; height: 95px;"></h1>
                <h2 class="text-center">Top Free School</h2>
                <p class="text-center" style="color: black;">Galewela, Sri Lanka <br>topfreeschool@gmail.com <br><a href="https://aqwamag.com" target="_blank">AqwaMag.com</a><br>CEO: <a href="https://dineshwayaman.com" target="_blank">Dinesh Wayaman</a></p>
            </div>
            <div class="col-md-4">
                <h1 class="text-center">We are Top Free School</h1>
                <p style="color: black;" class="text-center">We are TopFreeSchool Group. Read and Improve your knowladge with us. don't forget to share with your friends.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
        <div class="col-md-3">
            <div class="m-2 shadow p-1">
                <img src="img/dinesh.jpg" style="height: 245px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" alt="" srcset="">
                <h5 class="text-center">Dinesh Wayaman</h5>
                <h6 class="text-center">CEO/Author</h6>
                <p class="text-center" style="color: burlywood;">Software Engineer</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="m-2 shadow p-1">
                <img src="img/dimuthu.jpeg"  style="height: 245px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" alt="" srcset="">
                <h5 class="text-center">Dimuthu Wayaman</h5>
                <h6 class="text-center">Author</h6>
                <p class="text-center" style="color: burlywood;">Blog Writer</p>
            </div>
        </div>
        </div>
  
    </div>

    <?php include('includes/main-footer.php') ?>
</body>

</html>