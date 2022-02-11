            <form action="" method="get">
                <input type="search" width="100%" class="form-control" name="name" id="" placeholder="Search">
            </form>



            <div class="m-2 shadow">
                <img src="http://i.imgur.com/sDLIAZD.png" width="100%" style="height: 300px;" alt="" srcset="">
            </div>

            <hr>

            <div class="p-2">

                <?php
                $getAllPosts = "SELECT * FROM `posts` WHERE `p_trend`='1' ORDER BY `p_id` DESC LIMIT 5";
                $getPosts = $conn->prepare($getAllPosts);
                $getPosts->execute();
                $postrow = $getPosts->rowCount();

                if ($postrow > 0) {
                    while ($postfetch = $getPosts->fetch()) {
                        $timestamp = $postfetch['p_created_at'];
                        $date = date('Y-m-d', strtotime($timestamp));
                ?>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo $postfetch['p_feature_img'] ?>" style="height: 70px; min-width: 100%; max-width: 100%;" alt="">
                            </div>
                            <div class="col-md-8">
                                <a href="http://localhost/topfreeschool<?php echo $postfetch['p_slug'] ?>" class="side-a">
                                    <p class="m-0 two-lines" style="font-weight: bold;"><?php echo $postfetch['p_title'] ?></p>
                                </a>
                                <p style="font-size: 13px;  color: rgb(26, 25, 25);"><?php echo $date ?></p>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>

            </div>
            <!-- <div class="input-group">
            <input class="form-control border-end-0 border rounded-pill" type="text" value="search" id="example-search-input">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
          </div> -->
            <hr>

            <div class="mt-2">
                <h5>Categories</h5>
                <ul>
                    <?php
                    $getAllCat = "SELECT * FROM `categories`";
                    $getCat = $conn->prepare($getAllCat);
                    $getCat->execute();
                    $catrow = $getCat->rowCount();

                    if ($catrow > 0) {
                        while ($catfetch = $getCat->fetch()) {

                    ?>
                            <li><a href="cat_view.php?cat=<?php echo $catfetch['c_name'] ?>" class="side-a"><?php echo $catfetch['c_name'] ?></a></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>