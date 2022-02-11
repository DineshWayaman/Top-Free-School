<?php
include('config/dbconfig.php');
$cat = $_GET['cat'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta property="og:description" content="Top Free School - Windows, computers, tech news, android games, pc games, android 12" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/custom.css?v=<?php echo time() ?>">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/cat_view.js?v=<?php echo time() ?>"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title><?php echo $cat ?></title>
</head>

<body>
    <?php include('includes/main-nav.php') ?>

    <div class="container mt-4">
        <div class="row">

            <section id="pinBoot" style="padding: 0;">
                <?php


                $getAllPosts = "SELECT * FROM `posts` WHERE `p_cat`='$cat'";
                $getPosts = $conn->prepare($getAllPosts);
                $getPosts->execute();
                $postrow = $getPosts->rowCount();

                if ($postrow > 0) {
                    while ($postfetch = $getPosts->fetch()) {

                ?>
                        <article class="white-panel"><img src="<?php echo $postfetch['p_feature_img'] ?>" alt="">
                            <h4><a href="http://localhost/topfreeschool<?php echo $postfetch['p_slug'] ?>"><?php echo $postfetch['p_title'] ?></a></h4>
                            <button class="btn btn-warning"><?php echo $postfetch['p_cat'] ?></button>
                            <p><?php echo $postfetch['p_desc'] ?></p>
                        </article>


                <?php

                    }
                }
                ?>

            </section>
        </div>
    </div>

    <?php include('includes/main-footer.php') ?>
</body>

</html>