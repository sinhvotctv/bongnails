<section>
  <div class="block gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-posts no-gap style2">
            <div class="row">
              <?php
                foreach($blogData as $key => $post){
                  $linkPost = aliasUrl($post["post_title"]);
                  echo '<div class="col-md-4">
                          <div class="lemon-post">
                            <div class="lemon-post-img">
                              <img src="http://placehold.it/370x328" alt="" />
                              <span>'.$post["post_day"].'</span>
                            </div>
                            <div class="lemon-post-detail">
                              <h5><a href="'.BLOG_URL.'/'.$linkPost.'&postId='.$post["post_id"].''.'" title="">'.$post["post_title"].'</a></h5>
                              <ul class="meta">
                                <li><i class="fa fa-user"></i> By <a href="#" title="">'.$post["post_author"].' </a></li>
                                <li><i class="fa fa-tags"></i> In <a href="#" title="">'.$post["post_category"].'</a></li>
                              </ul>
                              <p>'.$post["post_decription"].'</p>
                              <a class="view-all" href="'.BLOG_URL.'/'.$linkPost.'&postId='.$post["post_id"].''.'" title="">Xem thêm <i class="fa fa-angle-right"></i></a>
                            </div>
                          </div>
                        </div>';
                }
              ?>
            </div>
          </div>					

          <!-- <div class="pagination">
            <ul>
              <li><a href="#" title=""><i class="fa fa-angle-double-left"></i></a></li>
              <li><a href="#" title="">01</a></li>
              <li><a href="#" title="">02</a></li>
              <li><a href="#" title="">03</a></li>
              <li>.........</li>
              <li><a href="#" title="">08</a></li>
              <li><a href="#" title=""><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>	 -->
        </div>
      </div>
    </div>
  </div>
</section>