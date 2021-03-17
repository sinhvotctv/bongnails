<?php
  class MembershipController extends CommonController{
    private $detailScreen = [
      "screen" => "membership-detail",
      "data" => []
    ];
    public function ShowDetail(){
      $this->ShowIndex(true,$this->detailScreen);
    }
  }
?>