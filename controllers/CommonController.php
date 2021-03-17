<?php
  class CommonController{

    private function loadView($viewPatch,$navigation=[]){
      define("VIEWS_FOLDER_PATH","./views");

      foreach($navigation as $key => $value){
        $$key = $value;
      }

      return include_once(VIEWS_FOLDER_PATH . "/" .str_replace('.','/',$viewPatch).".php");
    }

    private function loadModel($modelName){
      require_once "./models/".$modelName.".php";
      return new $modelName();
    }

    public function ShowIndex($isShowDetail = false, $detailScreen = []){
      $controller = get_class($this);
      $idController = str_replace('Controller',"",$controller)."Page";
      $LayoutModel = $this->loadModel("LayoutModel");

      $navigation = [
        "isShowDetail" => $isShowDetail,
        "idScreen" => $idController,
        "screen" => strtolower(str_replace('Controller',"",$controller)),
        "menuiData" => $LayoutModel->getMenuiData(),
        "introduceData" => $LayoutModel->getIntroduceData(),
        "menuiiData" => $LayoutModel->getMenuiiData(),
        "servicesData" => $LayoutModel->getServicesData(),
        "membershipData" => $LayoutModel->getMembershipData(),
        "videoIntroduceData" => $LayoutModel->getVideoIntroduceData(),
        "blogData" =>  $LayoutModel->getBlogData(),
        "detailScreen" => $detailScreen
      ];
      


      $this->loadView("layouts.bongnails-01",$navigation);
    }
  }
?>