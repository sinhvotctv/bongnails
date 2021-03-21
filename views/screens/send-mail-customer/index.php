<?php
  $content = '<div class="content-to-admin">
                <p>Họ tên : <span>'.$_SESSION["customer-booking"]["name"].'</span></p> 
                <p>Số điện thoại : <span>'.$_SESSION["customer-booking"]["phone"].'</span></p>
                <p>Mã KH : <span>'.$_SESSION["customer-booking"]["customerCode"].'</span></p>
                <p>Email : <span>'.$_SESSION["customer-booking"]["email"].'</span></p>
                <p>Thời gian: <span>'.$_SESSION["customer-booking"]["time"]." ngày ".$_SESSION["customer-booking"]["date"].'</span></p>
                <p>Địa chỉ Salon: A-002 chung cư Ngô Quyền, Phường 9, Quận 5, TP. Hồ Chí Minh</p>
                </div>';
  $dataSendToAdmin = [
    "title" => "Cảm ơn Quý khách đã đặt thành công dịch vụ của Bông Nails vào lúc ".$_SESSION["customer-booking"]["time"]." ngày ".$_SESSION["customer-booking"]["date"],
    "content" => $content
  ];
  if($_SESSION["customer-booking"]["email"] != ""){
    sendMail($_SESSION["customer-booking"]["email"],$dataSendToAdmin);
  }
  $location=BASE_URL.'thank-you';
  header('Location:'.$location);
?>