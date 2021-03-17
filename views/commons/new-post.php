<?php
  // echo('<pre>');
  // var_dump($blogData);
  // die();
?>
<section>
  <div class="block gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2>BÀI VIẾT MỚI NHẤT</h2>
            <?php echo '<p class="slogan">'.$introduceData[0]["site_slogan"].'</p>'?>
          </div>

          <div class="lemon-blog-carousel">
            <?php
              foreach($blogData as $key => $post){
                if($key < 10){
                  $linkPost = aliasUrl($post["post_title"]);
                  echo '<div class="lemon-blog-slide">
                          <img src="./public/images/posts/'.$post["post_category"].'/'.$post["post_avatar"].'" alt="" />
                          <div class="blog-date"><i>24</i><span>March 2016</span></div>
                          <div class="blog-details">
                            <h3><a href="'.BLOG_URL.'/'.$linkPost.'&postId='.$post["post_id"].''.'" title="">'.$post["post_title"].'</a></h3>
                            <ul class="meta">
                              <li><i class="fa fa-user"></i>  By <a href="#" title=""> '.$post["post_author"].'</a></li>       
                              <li><i class="fa fa-tags"></i>  In <a href="#" title="">'.$post["post_category"].'</a></li>
                            </ul>
                            <p>'.$post["post_decription"].'</p>
                            <a class="view-all" href="'.BLOG_URL.'/'.$linkPost.'&postId='.$post["post_id"].''.'" title="">Xem thêm <i class="fa fa-angle-double-right"></i></a>
                          </div>
                        </div>';
                }
              }
            ?>
          </div>
          <div class="go-button">
            <a title="" href="<?php echo BLOG_URL;?>" class="lemon-btn">Xem tất cả	<i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>