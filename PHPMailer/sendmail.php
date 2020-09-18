<?php
/**
 * Author: Symatic Solutions
 * Email: info@symaticsolutions.com
 * Skype: symatic.solutions
 * Website: https://symaticsolutions.com
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require_once './PHPMailer.php';
require_once './SMTP.php';
require_once './Exception.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if (!isset($_POST['name']) || empty($_POST['name'])) {
    echo json_encode(array(
        'success' => false,
        'msg' => 'Please provide your name.'
    ));
    exit;
}

if (!isset($_POST['email']) || empty($_POST['email'])) {
    echo json_encode(array(
        'success' => false,
        'msg' => 'Please provide your email.'
    ));
    exit;
}

if (!isset($_POST['message']) || empty($_POST['message'])) {
    echo json_encode(array(
        'success' => false,
        'msg' => 'Please leave your message.'
    ));
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'admin@ghina.co.uk';
$to = 'contact@ghina.co.uk';
$subject = "Let's Connect - Form Submission";
$msg= "<b>You have received a new message from $name<$email>:</b><br/><br/>$message";

if(mail($to,$subject,$msg, array(
    'From' => $from,
    'Reply-To' => $email,
    'Content-type' => 'text/html; charset=iso-8859-1'
))){
    echo json_encode(array(
        'success' => 1,
        'msg' => 'Message has been sent'
    ));
}else{
    echo json_encode(array(
        'success' => 0,
        'msg' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
    ));
}
exit;

/*try {

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'n1plcpnl0086.prod.ams1.secureserver.net';
    $mail->SMTPAuth = true;
    $mail->Username = $from;
    $mail->Password = '1IS@J$C&@RBx';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 465; //465; //587

    //Recipients
    //$mail->setFrom('scheherazadespeaksscience@gmail.com', 'Ghina.co.uk');
    $mail->setFrom($from, 'Ghina.co.uk');
    //$mail->addAddress('contact@ghina.co.uk', 'Ghina Halabi');
    $mail->addAddress($to, 'Ghina Halabi');
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $msg;

    $mail->send();
    echo json_encode(array(
        'success' => true,
        'msg' => 'Message has been sent'
    ));
    exit;
} catch (Exception $e) {
    if(mail($to,$subject,$msg, array(
        'From' => $from,
        'Reply-To' => $email,
        'Content-type' => 'text/html; charset=iso-8859-1'
    ))){
        echo json_encode(array(
            'success' => true,
            'msg' => 'Message has been sent'
        ));
    }else{
        echo json_encode(array(
            'success' => false,
            'msg' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
        ));
    }
    exit;
}*/