<?php
  require_once "./utils/send-mail.php";
  require_once "./utils/constants.php";
  require_once "./utils/function.php";
  require_once "./controllers/CommonController.php";
  require_once "./app/App.php";
  require_once "./utils/database.php";
  class Middelware {
    function __construct(){
      new App();
      new Database();
    }
  }
  new Middelware();
?>