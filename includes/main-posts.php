        <section id="pinBoot" style="padding: 0;">

          <?php
          $getAllPosts = "SELECT * FROM `posts` ORDER BY `p_id` DESC LIMIT 15";
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

          <!-- <article class="white-panel"><img src="https://aqwamag.com/wp-content/uploads/2021/08/featured-image-1536x1090.png" alt="">
                        <h4><a href="#">How to Make Money From Mobile Apps in 2021 Update</a></h4>
                        <button class="btn btn-warning">Catagory</button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        </p>
                      </article>
                      <article class="white-panel"><img src="https://aqwamag.com/wp-content/uploads/2022/01/dogfeature.png" alt="">
                        <h4><a href="#">HOW TO SECURE YOUR MOBILE DEVICE IN A FEW STEPS ?</a></h4>
                        <button class="btn btn-warning">Catagory</button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        </p>
                      </article>
                      <article class="white-panel"><img src="https://aqwamag.com/wp-content/uploads/2021/07/mobile-app-developer-1-1536x768.jpg" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <button class="btn btn-warning">Catagory</button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <p>2022-02-09</p>
                        <hr>
                            <a href="#" class="card-link-color text-uppercase">READ MORE</a>
                      </article>
                      <article class="white-panel"><img src="https://aqwamag.com/wp-content/uploads/2020/11/mobile-phone-1087845_1280.jpg" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <button class="btn btn-warning">Catagory</button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </article>
                      <article class="white-panel"><img src="https://aqwamag.com/wp-content/uploads/2021/05/1-1536x1090.jpg" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <button class="btn btn-warning">Catagory</button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                      </article>
                      <article class="white-panel"><img src="https://aqwamag.com/wp-content/uploads/2020/11/animals.jpg" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <button class="btn btn-warning">Catagory</button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </article>
                      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <button class="btn btn-warning">Catagory</button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        </p>
                      </article>
                      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <button class="btn btn-warning">Catagory</button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        </p>
                      </article>
                      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <button class="btn btn-warning">Catagory</button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <p>2022-02-09</p>
                        <hr>
                            <a href="#" class="card-link-color text-uppercase">READ MORE</a>
                      </article>
                      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </article>
                      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                      </article>
                      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <p>2022-02-09</p>
                        <hr>
                            <a href="#" class="card-link-color text-uppercase">READ MORE</a>
                      </article>
                      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </article>
                      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
                        <h4><a href="#">Title 1</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                      </article> -->



        </section>