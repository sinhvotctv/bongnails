<?php
  $post = array();
  foreach($blogData as $value){
    if($_GET["postId"] == $value["post_id"]){
      $post = $value;
      $date = explode("/",$post["post_day"]);
      $postAlias = aliasUrl($post["post_title"]);
    }
  }
?>
<section>
  <div class="block less-spacing gray">
    <div class="row">
      <div class="col-md-12">
        <div class="post-intro">
          <div class="container">
            <h4><a href="#" title=""><?php echo $post["post_title"]?></a></h4>
            <ul class="meta">
              <li><i class="fa fa-user"></i> By <a href="#" title=""><?php echo $post["post_author"]?></a></li>
              <li><i class="fa fa-tags"></i> In <a href="<?php echo BLOG_URL.'/'.$post["post_category"]?>" title=""><?php echo $post["post_category"]?></a></li>
            </ul>
          </div>
          <div class="lemon-blog-slide">
            <?php echo '<img src="./public/images/posts/'.$post["post_category"].'/'.$post["post_avatar"].'" alt="" />';?>
            <div class="blog-date"><i><?php echo $date[0]?></i><span><?php echo $date[1]." ".$date[2];?></span></div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>


<section>
  <div class="block remove-gap gray">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="blog-detail">
            <?php
              $post;
              foreach($blogData as $value){
                if($_GET["postId"] == $value["post_id"]){
                  $post = $value;
                  echo $post["post_content"];
                }else{
                  $post = "bài viết không tồn tại";
                }
              }
            ?>
            <div class="about-author">
              <img src="http://placehold.it/170x170" alt="" />
              <div class="author-detail">
                <strong>About The Author</strong>
                <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna ali et accusam et justo duo dolores. At vero eos et accusam et justo.</p>
              </div>
            </div><!-- About Author -->

            <div class="comments-section">
              <div class="simple-title">
                <i>Looking for a beauty</i>
                <h2>LEMON COMMENTS (2)</h2>
              </div>
              <ul>
                <li>
                  <div class="comment">
                    <div class="comment-img">
                      <img src="http://placehold.it/170x170" alt="" /><a href="#" title="">Reply</a>
                    </div>
                    <div class="comment-detail">
                      <h5>CHARLES MOORE <span>January 7, 2016 at 12:21 am </span></h5>
                      <blockquote>Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sewid commodo tempor are risus in euismod varius nullam feugiat ultrices. Sed condimentum est libero</blockquote>
                    </div>
                  </div><!-- Comment -->
                  <ul>
                    <li>
                      <div class="comment">
                        <div class="comment-img">
                          <img src="http://placehold.it/170x170" alt="" /><a href="#" title="">Reply</a>
                        </div>
                        <div class="comment-detail">
                          <h5>Christian Baine <span>January 7, 2016 at 12:21 am </span></h5>
                          <blockquote>Integer sollicitudin ligula non enim sodales, non lacinia nunc ornar are risus in euismod varius nullam feugiat ultrices.</blockquote>
                        </div>
                      </div><!-- Comment -->
                    </li>
                  </ul>
                </li>
              </ul>
            </div><!-- Comments Section -->


            <div class="comment-form">
              <div class="traditional-title">
                <i>Looking for a Good Place</i>
                <h4>Leave A Comment</h4>
              </div>

              <form>
                <div class="row">
                  <div class="col-md-6"><input type="text" placeholder="Full Name" /></div>
                  <div class="col-md-6"><input type="email" placeholder="Email Address" /></div>
                  <div class="col-md-12"><input type="text" placeholder="Subject" /></div>
                  <div class="col-md-12"><textarea placeholder="Detail"></textarea></div>
                  <div class="col-md-12"><button class="lemon-btn" type="submit">Leave Comment <i class="fa fa-angle-double-right"></i></button></div>
                </div>
              </form>

            </div><!-- Comment Form -->

          </div><!-- Blog Detail -->
        </div>

        <aside class="col-md-3 sidebar">
          <div class="widget">
            <form class="searchform">
              <input type="text" placeholder="Enter Your Keyword">
              <button><i class="fa fa-search"></i></button>
            </form><!-- Search Form -->
          </div><!-- Widget -->

          <div class="widget">
            <div class="widget-title">
              <i>Looking for a beauty</i><h4>About Lemon</h4>
            </div>
            <div class="all-popular-posts">
              <div class="popular-post">
                <img src="http://placehold.it/270x172" alt="" />
                <div class="popular-post-name">
                  <span>October 14, 2015</span>
                  <h5><a href="#" title="">Sometimes you want to go where everybo</a></h5>
                </div>
              </div><!-- Popular Post -->
              <div class="popular-post">
                <img src="http://placehold.it/270x172" alt="" />
                <div class="popular-post-name">
                  <span>October 14, 2015</span>
                  <h5><a href="#" title="">have to make the best of things its an uph</a></h5>
                </div>
              </div><!-- Popular Post -->
              <div class="popular-post">
                <img src="http://placehold.it/270x172" alt="" />
                <div class="popular-post-name">
                  <span>October 14, 2015</span>
                  <h5><a href="#" title="">Revival allows Selena Gomez to shed</a></h5>
                </div>
              </div><!-- Popular Post -->
            </div>
          </div><!-- Widget -->

          <div class="widget">
            <div class="widget-title">
              <i>Looking for a beauty</i><h4>Meta Data</h4>
            </div>
            <ul>
              <li><a href="#" title="">Log in</a></li>
              <li><a href="#" title="">Entries RSS</a></li>
              <li><a href="#" title="">Comments RSS</a></li>
              <li><a href="#" title="">WordPress.Org</a></li>
            </ul>
          </div><!-- Widget -->

          <div class="widget">
            <div class="widget-title">
              <i>Looking for a beauty</i><h4>Video Widget</h4>
            </div>
            <div class="video-widget">
              <div class="video-popup">
                <img src="http://placehold.it/270x287" alt="" />
                <a href="#" title=""><i class="fa fa-play"></i></a>
              </div>
              <i>October 15, 2014</i>
              <h5><a href="#" title="">Proin convall is pell</a></h5>
            </div>
          </div><!-- Widget -->

          <div class="widget">
            <div class="widget-title">
              <i>Looking for a beauty</i><h4>Tag Clouds</h4>
            </div>
            <div class="tagclouds">
              <a href="#" title="">Responsive</a>
              <a href="#" title="">Modern</a>
              <a href="#" title="">Free</a>
              <a href="#" title="">Business</a>
              <a href="#" title="">Coorporate</a>
              <a href="#" title="">Really</a>
              <a href="#" title="">Download</a>
              <a href="#" title="">Fresh</a>
            </div>
          </div><!-- Widget -->

        </aside>
      </div>
    </div>
  </div>
</section>