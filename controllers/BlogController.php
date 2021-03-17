<?php
  class BlogController extends CommonController{
    private $detailScreen = [
      "screen" => "blog-detail",
      "data" => []
    ];
    function ShowDetail(){
      $this->ShowIndex(true, $this->detailScreen);
    }
  }
?>