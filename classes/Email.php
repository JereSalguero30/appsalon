<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php'; // Asegúrate de que la ruta sea correcta

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) 
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {
        
        // Crear el objeto de email
        $mail = new PHPMailer(true); // Pasar `true` habilita las excepciones

        //try {
            // Configurar SMTP
            $mail->SMTPDebug = 2; // Habilitar depuración detallada
            $mail->Debugoutput = 'html'; // Formato de salida
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = 'e0c1c8c153e249';
            $mail->Password = '3efc6bfcbd7931';

            // Configuración del correo
            $mail->setFrom('cuentas@appsalon.com', 'AppSalon');
            $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
            $mail->Subject = 'Confirma tu cuenta';

            // Configuración HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            $contenido = "<html>";
            $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en AppSalon,
            solo debes confirmarla presionando el siguiente enlace</p>";
            $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a></p>";
            $contenido .= "</html>";
            $mail->Body = $contenido;

            // Enviar el correo
            $mail->send();
            //echo "Mensaje enviado correctamente";
        //} catch (Exception $e) {
        //    echo "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
        }

        public function enviarInstrucciones () {
            // Crear el objeto de email
            $mail = new PHPMailer(true); // Pasar `true` habilita las excepciones

    
            // Configurar SMTP
            $mail->SMTPDebug = 2; // Habilitar depuración detallada
            $mail->Debugoutput = 'html'; // Formato de salida
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = 'e0c1c8c153e249';
            $mail->Password = '3efc6bfcbd7931';

            // Configuración del correo
            $mail->setFrom('cuentas@appsalon.com', 'AppSalon');
            $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
            $mail->Subject = 'Reestablece tu contraseña';

            // Configuración HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            $contenido = "<html>";
            $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Reestablece tu contraseña </p>";
            $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablece la contraseña</a></p>";
            $contenido .= "</html>";
            $mail->Body = $contenido;

            // Enviar el correo
            $mail->send();
            //echo "Mensaje
        }
    }




