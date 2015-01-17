<?php


if(mail('florandeshaies@gmail.com', 'Hello ceci est un test mail de Manu ;-)', 'Coucou Floran', 'From: studio.rmpm@gmail.com')){	echo 'message envoyé';
}else{
	echo 'message non envoyé';}
	
// require './PHPMailer-master/PHPMailerAutoload.php';

// $mail = new PHPMailer;

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'studio.rmpm@gmail.com';                 // SMTP username
// $mail->Password = 'MeidFasocWelgasverty';                           // SMTP password
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to

// $mail->From = 'studio.rmpm@gmail.com';
// $mail->FromName = 'Rui Manuel';
// $mail->addAddress('florandeshaies@gmail.com', 'Floran Deshaies');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('studio.rmpm@gmail.com', 'rui manuel');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Hello ceci est un test mail de Manu ;-)';
// $mail->Body    = '<b>Coucou Floran</b>';
// $mail->AltBody = 'Coucou Floran';

// if(!$mail->send()) {
    // echo 'Message could not be sent.';
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
    // echo 'Message has been sent';
// }


?>