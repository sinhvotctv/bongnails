<section>
  <div class="block gray">
    <div class="row">
      <div class="col-md-12">
      <div class="lemon-gallery  merged-grids">
        <div class="gallery-selectors">
          <?php
            foreach($galleryData as $value){
              if($value['gallery_id'] != 2){
                echo '<a class="url '.$value["gallery_class"].'" href="#'.$value["gallery_alias"].'" title="">'.$value["gallery_name"].'</a>';
              }
            }
          ?>
        </div>
        <div class="lemon-gallery-carousel lightbox">
          <?php
            if($value["gallery_id"] != 2){
              foreach($galleryData as $value){
                $arrImagesGallery = explode(';',$value["gallery_img"]);
                if($value['gallery_id'] != 2){
                  echo '<div data-hash="'.$value["gallery_alias"].'" class="gallery-slide">
                          <ul>';
                            foreach($arrImagesGallery as $image){
                              if(file_exists('./public/images/gallery/'.$image.'.jpg')){
                                echo ' <li>
                                      <div class="gallery-img">
                                        <img src="./public/images/gallery/'.$image.'.jpg" alt="" />
                                        <div class="gallery-hover">
                                          <h4>Dịch vụ '.$value["gallery_name"].'</h4>
                                          <a href="'.SERVICES_URL.'/'.$value["gallery_alias"].'&id-main-service='.$value["gallery_id"].'" title=""><img src="images/gallery-icon.png" alt="" /></a>
                                        </div>
                                      </div>
                                    </li>';
                              }
                            }                         
                    echo '</ul>
                        </div>';
                }
              }
            }  
          ?>
        </div>
      </div>

      </div>
    </div>
  </div>
</section>