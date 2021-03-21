<?php
  class App {

    private $controller = "HomeController";
    private $action = "ShowIndex";
    private $params = [];

    function __construct(){
      $url = $this->urlProccess();
      
      $this-> controllerProccess($url);

      $this->actionProccess($url);

      $this->paramsProccess($url);

      call_user_func_array(array(new $this->controller, $this->action), $this->params);
    }

    private function urlProccess(){
      if(isset($_GET['url'])){
        return explode('/', filter_var(trim($_GET['url'])));
      }
    }

    private function controllerProccess($url){
      if(isset($url[0])){
        switch ($url[0]){
          case "trang-chu":
            $this->controller = "HomeController";
            break;
          case "":
            $this->controller = "HomeController";
            break;
          case "gioi-thieu":
            $this->controller = "AboutController";
            break;
          case "dich-vu":
            $this->controller = "ServicesController";
            break;
          case "cua-hang":
            $this->controller = "ShopController";
            break;
          case "bo-suu-tap":
            $this->controller = "GalleryController";
            break;
          case "dao-tao":
            $this->controller = "EducationController";
            break;
          case "lien-he":
            $this->controller = "ContactController";
            break;
          case "nhan-vien":
            $this->controller = "MembershipController";
            break;
          case "bai-viet":
            $this->controller = "BlogController";
            break;
          case "send-mail":
            $this->controller = "SendMailController";
            break;
          case "thank-you":
            $this->controller = "ThankYouController";
            break;
          default :
            $this->controller = "__404Controller";
            break;
        }
      }
      file_exists("./controllers/".$this->controller.".php") 
          ? include_once "./controllers/".$this->controller.".php"
          : include_once "./controllers/HomeController.php";
    }

    private function actionProccess($url){
      $actionTmp;
      if(isset($url[1])){
        switch($url[1]){
          case "mong-tay-mong-chan":
            $actionTmp = "ShowNails";
            break;
          case "goi-dau":
            $actionTmp = "ShowShampoo";
            break;
          case "uon-mi":
            $actionTmp = "ShowEyelids";
            break;
          case "nail-box":
            $actionTmp = "ShowNailsBox";
            break;
          case "send-mail-customer":
            $actionTmp = "ShowSendMailCustomer";
            break;
          default :
            $actionTmp = "Show__404";
            break;
        }
        if(isset($_GET['postId'])){
          $postId = $_GET['postId'];
          $postId != "" ? (int )$postId > 0 ? $actionTmp = "ShowDetail" : $actionTmp = $this->action : $actionTmp = $this->action;
        }
        if(isset($_GET['id-nhanvien'])){
          $idMember = $_GET['id-nhanvien'];
          $idMember != "" ? (int )$idMember > 0 ? $actionTmp = "ShowDetail" : $actionTmp = $this->action : $actionTmp = $this->action;
        }
        method_exists($this->controller,$actionTmp) ?  $this->action = $actionTmp :  $this->action = $this->action;
      }
    }

    private  function paramsProccess($url){
      if(isset($url[2])){
        $this->params = array_splice($url, 2);
      }
    }
  }
?>