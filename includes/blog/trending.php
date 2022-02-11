<?php
$getAllPosts = "SELECT * FROM `posts` WHERE `p_trend`='1' ORDER BY `p_id` DESC LIMIT 4";
$getPosts = $conn->prepare($getAllPosts);
$getPosts->execute();
$postrow = $getPosts->rowCount();

if ($postrow > 0) {
    while ($postfetch = $getPosts->fetch()) {

?>
        <div class="col-md-3 p-1">
            <div class="card">
                <img src="<?php echo $postfetch['p_feature_img'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                   <a style="text-decoration: none; color: black;" href="http://localhost/topfreeschool<?php echo $postfetch['p_slug'] ?>"><h5 class="card-title trend-blog-title" style="margin: 0;"><?php echo $postfetch['p_title'] ?></h5></a>
                   <button class="btn btn-warning"><?php echo $postfetch['p_cat'] ?></button>
                   <p class="card-text"><?php echo $postfetch['p_desc'] ?></p>
                </div>
            </div>
        </div>


<?php
    }
}else{
    ?>
    <p class="text-center">No Trending Posts</p>
    <?php
}
?>