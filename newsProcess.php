<?php


require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET["e"])){

    $email = $_GET["e"];

   

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kumarithilan47@gmail.com';
        $mail->Password = 'dvsvrddcnyrxoaiv';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('kumarithilan47@gmail.com', 'Global AI Ethics Conference');
        $mail->addReplyTo('kumarithilan47@gmail.com', 'Global AI Ethics Conference');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Global AI Ethics Conference Newsletter';
        $bodyContent = file_get_contents('newsletter/newsletter.html');
        //$images = glob('images');
        $mail->Body    = $bodyContent ;
            if (!$mail->send()) {
                echo 'Enter your email address';
            } else {
                echo 'Success';
            }

    }else{
        echo ("Invalid Email address");
    }



?>