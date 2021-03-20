<!-- Load Facebook SDK for JavaScript -->
<footer>
  <div class="block blackish">
    <div class="parallax still" data-velocity="-.05" style="background: rgba(0, 0, 0, 0) url(./public/images/banners/footer.jpg) no-repeat 50% 0;"></div>
    <div class="container">
      <div class="footer-widgets">
        <div class="row">
          <div class="col-md-3">
            <div class="widget">
              <div class="widget-title">
                <h4>BÔNG NAILS</h4>
              </div>
              <?php
                $introduceText = explode(";",$introduceData[0]["site_introduce"]);
                echo '<p>'.$introduceText[0].'</p>';
                echo '<p>'.$introduceText[1].'</p>';
                echo '<p>'.$introduceData[0]["site_slogan"].'</p>';
              ?>
              <div class="social-icons">
                <a href="#" title=""><i class="fa fa-skype"></i></a>
                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div><!-- Widget -->
          </div>
          <div class="col-md-3">
            <div class="widget">
              <div class="widget-title">
                <h4>Giờ làm việc</h4>
              </div>
              <ul class="timings">
                <?php
                  echo '<li><span>Hằng ngày</span><i>'.$introduceData[0]["site_work_time"].'</i></li>';
                ?>
              </ul>
            </div><!-- Widget -->
          </div>
          <div class="col-md-3">
            <div class="widget">
              <div class="widget-title">
                <h4>Dịch vụ</h4>
              </div>
              <ul>
                <?php
                  foreach($menuiiData as $value){
                    if($value["menuii_id"] != 2){
                      echo '<li><a href="'.SERVICES_URL."/".$value["menuii_link"].'&id-main-service='.$value["menuii_id"].'" title="'.$value["menuii_title"].'">'.$value["menuii_name"].'</a></li>';
                    }
                  }
                ?>
              </ul>
            </div><!-- Widget -->
          </div>
          <div class="col-md-3">
            <div class="widget">
              <div class="widget-title">
                <h4>Mạng xã hội</h4>
              </div>
              <div class="flickr lightbox">
              <div class="fb-page" data-href="https://www.facebook.com/bongnailshcm" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/bongnailshcm" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bongnailshcm">Bông Nails</a></blockquote></div>
              </div>
            </div><!-- Widget -->
          </div>
        </div>
      </div><!-- Footer Widgets -->
    </div>
  </div>
</footer><!-- Footer -->

<div class="bottom-footer">
  <p><a href="" title=""> BÔNG NAILS</a> © 2021 By <a class="bottom-link green" href="#" title="" > VÕ TRƯỜNG SINH</a>. All Rights Reserved</p>
</div>