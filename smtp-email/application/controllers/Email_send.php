<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_send extends CI_Controller {

	
	public function index()
	{
		$this->load->view('email_send');
	}
	public function send()
	{
		$to = $this->input->post('input_email');
		
		$emailContaint = $this->input->post('message');

	     $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pratikkhose1998@gmail.com';
        $mail->Password = 'Pratik@100';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
                
        $mail->setFrom('pratikkhose1998@gmail.com', 'Pratik');
        $mail->addReplyTo('pratikkhose1998@gmail.com', 'Pratik');
        
        // Add a recipient
        $mail->addAddress($to);
        
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
	}
}
