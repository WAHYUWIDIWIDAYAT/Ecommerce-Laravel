<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact extends Controller
{
    function showContactForm(){
        return view('contact-form');
    }

    function sendMail(Request $request){
        
        $subject = "Contact dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                        
        try {
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Host = 'yourhost';
            $mail->SMTPAuth = true;
            $mail->Username = 'yourusername';
            $mail->Password = 'yourpassword';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom("e-health@health.care", "Admin E-Health");

            $mail->addAddress('youremail', 'E-health'); 
            $mail->addReplyTo($emailAddress, $name);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('contact-form');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}
