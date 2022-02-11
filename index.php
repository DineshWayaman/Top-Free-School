<?php include('config/dbconfig.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php include('includes/home-meta.php') ?>
    <?php include('includes/google-analytics.php') ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/custom.css?v=<?php echo time() ?>">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/custom.js?v=<?php echo time() ?>"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Top Free School | World Best Technology Blog</title>
</head>

<body>

    <?php include('includes/main-nav.php') ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-9">
                <!-- <div class="row mb-3" >
                    <div class="col-md-4">
                       <div class="card p-1">
                         <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="card p-1">
                         <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="card p-1">
                         <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                       </div>
                    </div>
                </div> -->
                <div class="row">
                    <?php include('includes/main-posts.php') ?>
                    <div class="mt-4 text-center">
                        <a href="#"><h6 class="text-center">View All</h6></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-1 mobile-sidebar">
                <?php include('includes/main-side-bar.php') ?>
            </div>
        </div>
    </div>

    <?php include('includes/main-footer.php') ?>

</body>

</html>