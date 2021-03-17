<?php
  class ServicesController extends CommonController {
    private $detailScreen = [
      "screen" => "service-detail",
      "data" => []
    ];

    public function ShowNails(){
      $this->detailScreen["data"] = 123;
      $this->ShowIndex(true,$this->detailScreen);
      return null;
    }

    public function ShowShampoo(){
      $this->detailScreen["data"] = "sihgdusaddhasd";
      $this->ShowIndex(true, $this->detailScreen);
      return null;
    }

    public function ShowEyelids(){
      $this->ShowIndex(true,$this->detailScreen);
      return null;
    }

    public function ShowNailsBox(){
      $this->ShowIndex(true, $this->detailScreen);
      return null;
    }
  }
?>