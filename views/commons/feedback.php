<section>
  <div class="block whitish">
    <div class="parallax still" data-velocity="-.05" style="background: rgba(0, 0, 0, 0) url(http://placehold.it/2442x1400) no-repeat 50% 0;"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2>FEEDBACK</h2>
            <p class="slogan"><?php echo $introduceData[0]["site_slogan"]?></p>
          </div>
        </div>
        <div class="col-md-offset-2 col-md-10">
          <div class="lemon-reviews-carousel">
            <?php
              foreach($customerData as $customer){
                echo '<div class="review-slide">
                        <img src="./public/images/customers/'.$customer["customer_avatar"].'" alt="" />
                        <div class="review">
                          <strong>'.$customer["customer_name"].'</strong>
                          <blockquote><i class="fa fa-quote-left"></i>'.$customer["customer_comment"].'<i class="fa fa-quote-right"></i></blockquote>
                        </div>
                      </div>';
              }
            ?> 
          </div>

        </div>
      </div>
    </div>
  </div>
</section>