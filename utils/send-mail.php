<?php
  include "./mailer/src/PHPMailer.php";
  include "./mailer/src/Exception.php";
  include "./mailer/src/OAuth.php";
  include "./mailer/src/POP3.php";
  include "./mailer/src/SMTP.php";
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  function sendMail($emailRecive,$data){
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'bongnails.hcm@gmail.com';                 // SMTP username
    $mail->Password = 'Sinh@1993';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Eable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
 
    

    // Gởi admin ============================================================================

    //Recipients
    $mail->setFrom('bongnails.hcm@gmail.com', 'CSKH BÔNG NAILS');
    $mail->addAddress($emailRecive, 'Sinh');     // Add a recipient
    // Content
    $mail->CharSet = "utf-8";
    $mail->isHTML(true);                           // Set email format to HTML
    $mail->Subject = $data["title"];
    $mail->Body    = $data["content"];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
  }
?>