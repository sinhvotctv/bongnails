
<?php
  include_once "./views/commons/head.php";
  include_once "./views/commons/header.php";
  $idScreen != "HomePage" ? include_once "./views/commons/top-header.php" : null;
  include_once "./views/commons/booking-box.php";
  $isShowDetail ? include_once "./views/screens/".$detailScreen["screen"]."/index.php" 
                : include_once "./views/screens/".$screen."/index.php";
  $idScreen != "HomePage" ? include_once "./views/commons/get-offers.php" : null;
  include_once "./views/commons/google-map.php";
  include_once "./views/commons/footer.php";
  include_once "./views/commons/booking-box.php";
  // include_once "./views/commons/feedback-box.php";
  include_once "./views/commons/facebook-chat.php";
  include_once "./views/commons/script.php"
?>