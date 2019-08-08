<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EnviarEMail extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
    }

    public function datos()
    {
        $Nombre = $this->input->post('Nombre');
        $Apellido = $this->input->post('Apellido');
        $EMail = $this->input->post('EMail');
        $Asunto = $this->input->post('Asunto');
        $data = array('Nombre' => $Nombre,
                      'Apellido' => $Apellido,
                      'E-Mail' => $EMail,
                      'Asunto' => $Asunto);
        echo json_encode($data);
    }
    
    function send(){
        $Nombre = $this->input->post('Nombre');
        $Apellido = $this->input->post('Apellido');
        $EMail = $this->input->post('EMail');
        $Asunto = $this->input->post('Asunto');
        $Telefono = $this->input->post('Telefono');
        $Direccion = $this->input->post('Direccion');
        $Mensaje = $this->input->post('Mensaje');

        $data = array('Nombre' => $Nombre,
                      'Apellido' => $Apellido,
                      'EMail' => $EMail,
                      'Telefono' => $Telefono,
                      'Direccion' => $Direccion,
                      'Asunto' => $Asunto,
                      'Mensaje' => $Mensaje);
        echo json_encode($data);

        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jr.gregorio.h.pineda.v@gmail.com';
        $mail->Password = '27051988';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        $mail->CharSet = 'UTF-8';
        
        // Destinatario
        $mail->setFrom($EMail, $Nombre.' '.$Apellido);
        //$mail->addReplyTo('info@example.com', 'Programacion.net');
        
        // Agregar otro destinatario
        //$mail->addAddress('jr.gregorio.h.pineda.v@gmail.com');
        
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = $Asunto;
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = '<h1>Nuevo mensaje desde la página Web coldtruck.net</h1>
        <h3>Asunto: '.$Asunto.'</h3>
            <ul>
               <li>Nombre: '.$Nombre.' '.$Apellido.'</li>
               <li>Telefono: '.$Telefono.'</li>
               <li>E-Mail: '.$EMail.'</li>
               <li>Direccion: '.$Direccion.'</li>
            </ul>
            <p>Mensaje: '.$Mensaje.'</ul>
            ';
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