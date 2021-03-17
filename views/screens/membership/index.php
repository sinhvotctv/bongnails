<!-- 270x350 -->
<section>
  <div class="block gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="lemon-team">
            <div class="row">
              <?php
                foreach($membershipData as $member){
                  echo '<div class="col-md-3">
                            <div class="member">
                              <div class="member-img">
                                <img src="'.IMAGES_MEMBERSHIP.$member["nhanvien_avatar"].'" alt="nhân viên Bông Nails" />
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
          </div> -->
          
        </div>
      </div>
    </div>
  </div>
</section>



<?php
  include_once "./views/commons/feedback.php";
?>