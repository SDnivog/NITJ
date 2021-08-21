<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.hostinger.in';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'helpdesk@giftstore.org.in';                     // SMTP username
    $mail->Password   = 'tE1Y+x|N5';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('helpdesk@giftstore.org.in', 'GIFTSTORE');
    $mail->addAddress('anujsarwa756@gmail.com', 'ANUJ'); 
    // $mail->addAddress('govinddj.cm.18@nitj.ac.in', 'Govind Suman');     // Add a recipient
    //$mail->addAddress('govindsuman118@gmail.com');               // Name is optional
    //$mail->addReplyTo('helpdesk@giftstore.org.in', 'GIFTSTORE');
    //$mail->addCC('cc@example.com');
    // $mail->addBCC('gurjotsingh050900@gmail.com');
    // $mail->addBCC('jainavagarwal@gmail.com');
    // $mail->addBCC('anchalvirdi46@gmail.com');
    // $mail->addBCC('dhiru999saini@gmail.com');
    // $mail->addBCC('dhanwant.nitj@gmail.com');
    $mail->addBCC('giftonlinestore2020@gmail.com');
    
    //$mail->addBCC('querytrando2020@gmail.com','Trando');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to Giftstore';
    $mail->Body    = 'Dear ANUJ,<br>

    Thank You for signing up .You are now a member of the most marvellous giftstore ever.<br>
    
    We are committed to provide the best quality and most reliable products to our customers. Get the finest customized gifts and offers for your family, friends and loved ones.
    Our excellent customer support team is available 24/7 to help you with any questions.<br>
    You can contact them at helpdesk@giftstore.org.in <br><br>
    
    Your satisfaction is a priority for us, so feel free to share any feedback you have – we take your opinion seriously and will do our best to implement solutions for you.<br><br>
    Regards<br>
    Team Giftstore <br><br>
    https://giftstore.org.in <br>
    https://www.instagram.com/giftstore.org.in/';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}