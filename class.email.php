<?php
require_once("phpmailer/class.phpmailer.php");
require_once("Forte.php");
class EMail{
	
	private $sender = null;
	private $receiver = null;
	
	public function __construct($sender , $receiver){
		
			$this->sender   = $sender;
			$this->receiver = $receiver;
			
	}
public function sendEmail($subject,$message){
		
	$mail = new PHPMailer;
	
	$mail->IsSMTP();                                      //Set mailer to use SMTP
	$mail->Host = 'smtp.1and1.com';  // Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Port = 25;
	$mail->Username = '	me@bennydorlisme.com';                            // SMTP username
	$mail->Password =  EMAIL_PASSWORD;
	                           // SMTP username
                         // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    $mail->SMTPDebug = 2;                               //debug info
	$mail->From = $this->sender;
	$mail->FromName = '';
	$mail->AddAddress($this->receiver);  // Add a recipient
	//$mail->AddAddress('ellen@example.com');               // Name is optional
	//$mail->AddReplyTo('info@example.com', 'Information');
	//$mail->AddCC('cc@example.com');
	//$mail->AddBCC('bcc@example.com');
	
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->IsHTML(false);                                  // Set email format to HTML

	$mail->Subject = $subject;
	$mail->Body    = $message;
//	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->Send()) { // throw error here
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}else{
		echo "Your text has been successfully sent to benny";
	}
}
}
?>



