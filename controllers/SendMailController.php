<?php
  class SendMailController{
    public function ShowIndex(){
      require_once "./views/screens/send-mail/index.php";
    }

    public function ShowSendMailCustomer(){
      require_once "./views/screens/send-mail-customer/index.php";
    }
  }
?>