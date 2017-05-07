<?php

    if($_SERVER['REQUEST_METHOD'] != 'POST')
        exit;
    else{
        require_once("class.email.php");


        $body = $_GET['message'];
        $name = $_GET['name'];
        $mail = new EMail("me@bennydorlisme.com", "9293773969@tmomail.net");
        $mail->sendEmail('Text from ' . $name,$body);


        //$email_carrier = substr($email,(strstr($email,'@') + 1),strstr($email,'.') );

    }
?>