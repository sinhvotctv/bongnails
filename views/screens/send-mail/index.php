<?php
  $nameBooking = $_REQUEST["name"] ? $_REQUEST["name"] : "";
  $serviceBooking = $_REQUEST["service"] ? $_REQUEST["service"] : "";
  $dateBooking = $_REQUEST["date"] ? $_REQUEST["date"] : "";
  $timeBooking = $_REQUEST["time"] ? $_REQUEST["time"] : "";
  $phoneBooking= $_REQUEST["phone"] ? $_REQUEST["phone"] : "";
  $emailBooking= $_REQUEST["email"] ? $_REQUEST["email"] : "";
  $customerCode = getCustomerCode($nameBooking,$phoneBooking);
  $_SESSION["customer-booking"] = [
    "name" => $nameBooking,
    "service" => $serviceBooking,
    "date" => $dateBooking,
    "time" => $timeBooking,
    "phone" => $phoneBooking,
    "email" => $emailBooking,
    "customerCode"=>$customerCode
  ];
  $content = '<div class="content-to-admin">
                    <p>Họ tên : <span>'.$_SESSION["customer-booking"]["name"].'</span></p>
                    <p>Số điện thoại : <span>'.$_SESSION["customer-booking"]["phone"].'</span></p>
                    <p>Mã KH : <span>'.$_SESSION["customer-booking"]["customerCode"].'</span></p>
                    <p>Email : <span>'.$_SESSION["customer-booking"]["email"].'</span></p>
                    <p>Thời gian: <span>'.$_SESSION["customer-booking"]["time"]." ngày ".$dateBooking.'</span></p>
                  </div>';
  $dataSendToAdmin = [
    "title" => "Thông báo! có khách hàng đặt lịch tại Bông Nails vào lúc ".$timeBooking." ngày ".$dateBooking,
    "content" => $content
  ];
  sendMail("order.bongnails@gmail.com",$dataSendToAdmin);
  $location = BASE_URL.'send-mail/send-mail-customer';
  header('Location:'.$location);
?>
