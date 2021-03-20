<?php
  $title = '';
  $banner = '';
  if(isset($_GET['url'])){
     $url = explode('/',$_GET['url']);
    foreach($menuiData as $menui){
      if($url[0] ==  $menui["menui_alias"]){
        $title = $menui['menui_title'];
        $banner = './public/images/banners/'.$menui["menui_avatar"];
      }
    }
  }
  
?>
<div class="lemon-pagetop" style="background: transparent url(<?php echo $banner ;?>) no-repeat scroll 0 0 / cover ;">
  <div class="container">
    <h1><?php echo $title; ?> <span>BÔNG NAILS</span></h1>
    <p><?php echo $introduceData[0]["site_slogan"]; ?></p>
  </div>
</div>