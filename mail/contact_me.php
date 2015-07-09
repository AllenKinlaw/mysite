<?php
// Check for empty fields
// if(empty($_POST['name'])  		||
//    empty($_POST['email']) 		||
//    empty($_POST['phone']) 		||
//    empty($_POST['message'])	||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//    {
// 	echo "No arguments Provided!";
// 	return false;
//    }
	
// $name = $_POST['name'];
// $email_address = $_POST['email'];
// $phone = $_POST['phone'];
// $message = $_POST['message'];
	
// // Create the email and send the message
// $to = 'allen@allenkinlaw.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
// $email_subject = "Website Contact Form:  $name";
// $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
// $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";	
// mail($to,$email_subject,$email_body,$headers);
// return true;	

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@sandbox479c3074f6a24973bc3bf038c992c3ab.mailgun.org';   // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->to = 'allen.kinlaw@gmail.com';
$mail->FromName = 'Mailer';

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = "Website Contact Form:  $name";
$mail->Body    = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>