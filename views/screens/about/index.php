<section>
  <div class="block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about-section">
            <div class="about-img"><img src="./public/images/gioi-thieu/gioi-thieu-bong-nail.jpg" alt="giới thiệu bông nails quận 5" /></div>
            <div class="about-detail">
              <div class="about-title">
                <h3>GIỚI THIỆU BÔNG NAIL</h3>
              </div>
                <?php
                  $introduce = explode(";", $introduceData[0]["site_introduce"]);
                  echo '<p>'.$introduce[0].'</p>';
                  echo '<p>'.$introduce[1].'</p>';
                  echo '<p class="slogan">'.$introduceData[0]["site_slogan"].'</p>';
                ?>
              <a class="lemon-btn" href="<?php echo BASE_URL.$menuiData[1]["menui_link"]; ?>" title="">Xem chi tiết	<i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="block blackish">
    <div class="parallax still" data-velocity="-.05" style="background: rgba(0, 0, 0, 0) url(./public/videos/about-page/about-video-avatar.jpg) no-repeat 50% 0;"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="welcome-video">
            <h5>Welcome To BÔNG NAILS</h5>
            <a href="#" title=""><i class="fa fa-play-circle"></i></a>
            <?php
              echo '<p>'.$introduce[1].'</p>';
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section>
  <div class="block gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2>ĐỘI NGŨ CHÍNH BÔNG NAILS</h2>
            <?php echo '<p class="slogan">'.$introduceData[0]["site_slogan"].'</p>';?>
          </div>

          <div class="lemon-team">
            <div class="row">
              <?php 
                foreach($membershipData as $member){
                  echo '<div class="col-md-3">
                          <div class="member">
                            <div class="member-img member-about-page">
                              <img src="./public/images/membership/'.$member["nhanvien_avatar"].'" alt="'.$member["nhanvien_name"].'" />
                              <p>'.$member["nhanvien_introduce"].'</p>
                            </div>
                            <strong><a href="'.MEMBERSHIP_URL.'/'.$member["nhanvien_alias"].'&id-nhanvien='.$member["nhanvien_id"].'" title=""> '.$member["nhanvien_name"].'</a></strong>
                            <div class="member-social">
                              <a href="#" title=""><i class="fa fa-skype"></i></a>
                              <a href="#" title=""><i class="fa fa-twitter"></i></a>
                              <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                            </div>
                          </div><!-- Member -->
                        </div>';
                }
              ?>
            </div>
          </div><!-- Lemon Team -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  include_once "./views/commons/feedback.php";
?>