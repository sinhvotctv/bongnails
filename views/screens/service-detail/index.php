<?php 
  $service;
  $images = [];
  $category="";
  $imageDetailAvatar="'";
  if(isset($_GET["id-main-service"])){
    if($_GET["id-main-service"] != ""){
      foreach($menuiiData as $value){
        if($value["menuii_id"] == $_GET["id-main-service"]){
          $service = $value;
          $images = explode(";", $service["menuii_img"]);
          $category = $value["menuii_alias"];
          $imageDetailAvatar = $service["menuii_detail_avatar"];
        }
      }
    }
  }
?>
<section>
  <div class="block gray">
    <div class="row">
      <div class="col-md-12">
        <div class="package-detail-page">
          <div class="package-intro">
            <div class="container">
              <div class="package-info">
                <span><i class="icon-icon4"></i></span>
                <h1><?php echo $service["menuii_name"]?></h1>
              </div>
              <div class="package-book">
                <a class="booking-btn" href="#" title="">Book Now</a>
              </div>
            </div>
          </div>
          <div class="package-img main-service-img">
            <?php echo '<img src="./public/images/services/'.$service["menuii_alias"].'/'.$imageDetailAvatar.'" alt="" />';?>
            <div class="price-wrapper">
              <span class="package-price color2">Chỉ từ <?php echo $service["menuii_price"] ?> <i>k/ <?php echo $service["menuii_unit"] ?></i></span>
            </div>
          </div>

          <div class="package-description">
            <div class="container">
              <div class="package-detail">
                <img src="./public/images/bang-gia.jpg" alt="">
              </div>						
              <?php echo $service["menuii_content"]?>

              <div class="image-grids">
                <div class="row">
                  <?php
                    foreach($images as $value){
                      echo '<div class="col-md-4 img-main-service"><img alt="" src="./public/images/services/'.$category.'/'.$value.'" /></div>';
                    }
                  ?>
                </div>
              </div>
              <div class="package-book"><a class="booking-btn" href="#" title="">Book Now</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>