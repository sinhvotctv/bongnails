<section>
  <div class="block gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="all-packages masonary2">
              <?php
                foreach($menuiiData as $value){
                  if($value["menuii_id"] != 2){
                    echo '<div class="col-md-4">
                          <div class="lemon-package style3">
                            <img src="./public/images/services/'.$value["menuii_alias"].'/'.$value["menuii_avatar"].'" alt="imgae" />
                            <div class="package-detail">
                              <span class="package-price color1">'.$value["menuii_price"].' <i>k/ '.$value["menuii_unit"].'</i></span>
                              <h4><a href="'.SERVICES_URL.'/'.$value["menuii_link"].'&id-main-service='.$value["menuii_id"].'">'.$value["menuii_name"].'</a></h4>
                              <ul>';
                                foreach($servicesData as $service){
                                  if($service["sevice_menuii_id"] == $value["menuii_id"]){
                                    echo '<li><a>'.$service["sevice_name"].'</a></li>';
                                  }
                                }
                        echo '</ul>
                              <a class="view-all" href="'.SERVICES_URL.'/'.$value["menuii_link"].'&id-main-service='.$value["menuii_id"].'" title="">Xem chi tiết  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                          </div>
                        </div>';
                  }
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