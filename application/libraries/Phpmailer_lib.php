<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter PHPMailer Class
 *
 * This class enables SMTP email with PHPMailer
 *
 * @category    Libraries
 * @author      CodexWorld
 * @link        https://www.codexworld.com
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Phpmailer_lib
{
    public function __construct(){
        log_message('Debug', 'PHPMailer class is loaded.');
    }
    
    public function load(){
        // Include PHPMailer library files
        require_once APPPATH.'third_party/PHPMailer/src/Exception.php';
        require_once APPPATH.'third_party/PHPMailer/src/PHPMailer.php';
        require_once APPPATH.'third_party/PHPMailer/src/SMTP.php';
        // require_once 'vendor/autoload.php';
        
        $mail = new PHPMailer;
        return $mail;
    }

    public function send($to, $subject, $message) {

        require_once APPPATH.'third_party/PHPMailer/src/Exception.php';
        require_once APPPATH.'third_party/PHPMailer/src/PHPMailer.php';
        require_once APPPATH.'third_party/PHPMailer/src/SMTP.php';
        // require_once 'vendor/autoload.php';

        $mail = new PHPMailer(true);

        try {
            //
            // $config = Array(
            //     'protocol'  => 'smtp',
            //     'smtp_host' => 'ssl://smtp.googlemail.com',
            //     'smtp_port' => '465',
            //     'smtp_user' => 'ara.its.ac.id@gmail.com',
            //     'smtp_pass' => '25araits2021',
            //     'newline'   => '\n',
            //     'validate'  => 'true',
            //     'dsn'       => 'true',
            //     'priority'  => '1'
    
            // );
            //
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'ssl://smtp.googlemail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'ara.its.ac.id@gmail.com';                     // SMTP username
            $mail->Password   = '25araits2021';                               // SMTP password
            $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            // $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('ara.its.ac.id@gmail.com', 'ARA 2021');
            //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
            $mail->addAddress($to);               // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addReplyTo($to, 'ACCOUNT');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            // echo 'Message has been sent';
            return true;
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }

        return false;
    }
}