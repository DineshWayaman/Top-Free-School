<?php 
include('config/dbconfig.php');

$url =$_SERVER['PATH_INFO'];
$baseUrl = 'http://localhost/topfreeschool';
// echo $url;
$checkPost = "SELECT * FROM `posts` WHERE `p_slug`=?";
$getPost = $conn->prepare($checkPost);
$getPost->execute(array($url));
$postrow = $getPost->rowCount();
if ($postrow>0) {
    # code...

while ($postfetch = $getPost->fetch()) {
   $timestamp = $postfetch['p_created_at'];
    $date = date('m-d-Y',strtotime($timestamp));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php include('includes/blog-meta.php') ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/custom.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="css/postview.css?v=<?php echo time() ?>">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/custom.js?v=<?php echo time() ?>"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title><?php echo $postfetch['p_title'] ?></title>
</head>

<body>
    <?php include('includes/main-nav.php') ?>


    <div class="container-fluid p-0">
        <div class="con-head">
            <img src="<?php echo $postfetch['p_feature_img'] ?>" alt="Snow" style="width:100%;">
            <div class="centered">
                <h1 style="font-weight: bold;"><?php echo $postfetch['p_title'] ?></h1>
                <p style="margin: 0;"><?php echo $postfetch['p_cat'] ?>/<?php echo $date ?></p>
                <p>By <?php 
                    $id = $postfetch['p_admin'];
                    $checkUser = "SELECT * FROM `admins` WHERE `a_id`=?";
                    $getUser = $conn->prepare($checkUser);
                    $getUser->execute(array($id));
                    $userrow = $getUser->rowCount();
                    while ( $userfetch = $getUser->fetch()) {
                        echo $userfetch['a_username'];
                    }
                ?></p>
                <hr color="#000">

            </div>
        </div>
    </div>


    <div class="container content-padd mt-4">
        <p class="m-0 text-danger">Share With</p>
        <p>
            <a href="http://www.facebook.com/sharer.php?u=<?php echo $baseUrl.$url ?>" target="_blank"><i style="background: linear-gradient(120DEG,#3B5998);" class="fab fa-facebook fa-2x"></i></a>
            <a href="http://twitter.com/share?text=Visit the link &url=<?php echo $baseUrl.$url ?> &hashtags=topfreeschool,php,programming,tutorials,codes,examples,language" target="_blank"><i style="color: #00acee;" class="fab fa-twitter fa-2x"></i></a>
            <a href="whatsapp://send?text=Hello%20World!" target="_blank"><i style="color: rgb(7, 94, 84);" class="fab fa-whatsapp fa-2x"></i></a>
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $baseUrl.$url ?>"><i style="color:  #0e76a8;" class="fab fa-linkedin fa-2x"></i></a>
            <a href="http://pinterest.com/pin/create/button/?url=<?php echo $baseUrl.$url ?>" target="_blank"><i style="color: rgb(230, 0, 35);" class="fab fa-pinterest fa-2x"></i></a>
        </p>
        <p><?php echo $postfetch['p_content'] ?></p>
    </div>

    <div class="container-fluid" style="margin-top: 4%;">
        <h4 class="mt-4">Trending Week &nbsp; <i class="fas fa-chart-line"></i></h4>
        <hr>
        <div class="row">
            <?php include('includes/blog/trending.php') ?>
        </div>
    </div>

    <?php include('includes/main-footer.php') ?>
</body>

</html>

<?php 
}
}else{
    header('location: 404.php');
}
?>