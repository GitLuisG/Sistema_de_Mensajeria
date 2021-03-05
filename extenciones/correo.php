<?php
/*
  PHP Version 7.4.8
  Institucion: Universidad poitecnica de victoria
  Autor: Luis gerardo perales torres
  Matricula: 1730505
  Correo: 1730505@upv.edu.mx
  Github: https://github.com/GitLuisG/Implementar_mensajeria_en_un_sistema_de_informacion_web_transaccional
  Licencia: MIT License
  Copyright (c) 2021 Luis Gerardo Perales Torres
 */

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/OAuth.php';

Class Correo {

    private $data = array(); //Datos para el Email
    private $Host; //Dirreccion del smtp para el envio de correos
    private $SMTPAuth; //Utilizar Autentificacion SMTP
    private $SMTPSecure; //Encriptacion
    private $port; //Puerto de envio

    public function __construct($host) {
        $this->data = array(
            "Salida" => "NULL", //Correo de Salida
            "Password" => "NULL", //Contraseña de correo de salida
            "Name" => "NULL", //Nombre de la Compañia o persona que redacta este Email
            "Destinatario" => "NULL", //Destino del Email
            "Subject" => "NULL", //propiedad Sujeto del email
            "Body" => "NULL", //propiedad Body del email 
            "AltBody" => "NULL"//propiedad AltBody del email
        );

        $this->Host = $host; //Establecer el nombre de host del servidor de correo
        $this->mail = new PHPMailer\PHPMailer\PHPMailer(); //Creamos una nueva PHPMailer instance
        $this->SMTPAuth = True; //Utilizar Autentificacion SMTP
        $this->SMTPSecure = 'tls'; // Habilitar encrypcion, 'SSL' O 'TSL'
        $this->port = 587; //Establezca el número de puerto SMTP, que probablemente sea 25, 465 o 587
    }

    public function get_Host() {
        return $this->Host; //Regresa el valor del host
    }

    public function get_SMTPAuth() {
        return $this->SMTPAuth; //Regresa la Autentificacion SMTP
    }

    public function get_SMTPSecure() {
        return $this->SMTPSecure; //Regresa el tipo de encriptacion 'SSL' O 'TSL'.
    }

    public function get_Email() {
        return $this->data["Salida"]; //Regresa el Correo de salida
    }

    public function get_Password() {
        return $this->data['Password']; //Regresa la contraseña
    }

    public function set_Email($correo) {
        // Asigna el correo de salida
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)/* Se valida si el contenido es de tipo Email */) {
            $this->data['Salida'] = $correo; /* Si es verdadero el correo se sustituye por el nuevo */
            return True;
        }
        echo "Ingrese un email valido"; /* Si no es valido muestra un mensaje */
    }

    public function set_Password($pass) {
        /* Asigna la contraseña del cliente y la encripta */
        $this->data['Password'] = $pass;
    }

    public function set_Name($name) {
        /* Asigna el nombre del correo o compañia */
        $this->data['Name'] = $name;
    }

    public function set_Port($port) {
        /* Asigna un cambio de puerto para el metodo smtp */
        $this->port = $port;
    }

    public function set_recipient($destino) {

        $this->data['Destinatario'] = $destino; // Asigna un destino para el email
    }

    private function Server_Settings() {
        /* Carga de configuraciones para el servidor */
        $this->mail->isSMTP();
        $this->mail->Host = $this->Host;
        $this->mail->SMTPAuth = $this->SMTPAuth;
        $this->mail->Username = $this->data['Salida'];
        $this->mail->Password = $this->data['Password'];
        $this->mail->SMTPSecure = $this->SMTPSecure;
        $this->mail->SMTPDebug = 0;
        $this->mail->Port = $this->port;
    }

    private function Recipients() {
        /* Carga de configuraciones para el correo salida, destino. */
        if ($this->data['Name'] != "NULL") {
            $this->mail->setFrom($this->data['Salida'], $this->data['Name']);
        } else {
            $this->mail->setFrom($this->data['Salida']);
        }
        $this->mail->addAddress($this->data['Destinatario']);
        $this->mail->addReplyTo($this->data['Salida'], 'Information');
    }

    private function Content() {
        /* Carga de configuraciones para el contenido del mensaje */
        $this->mail->isHTML(true);
        $this->mail->Subject = $this->data['Subject'];
        $this->mail->Body = $this->data['Body'];
        $this->mail->AltBody = $this->data['AltBody'];
    }

    public function messenger($Subject, $Body, $AltBody) {
        /* Genera el email */
        $this->data['Subject'] = $Subject;
        $this->data['Body'] = $Body;
        $this->data['AltBody'] = $AltBody;
    }

    public function Enviar() {
        /* Envio del correo */
        try {
            $this->Server_Settings();
            $this->Recipients();
            $this->Content();
            if (!$this->mail->Send()) {
                echo 'Conexion .';
                echo 'Mailer Error: ' . $this->mail->ErrorInfo;
            } else {
                echo 'Mensaje Enviado con Exito <br>';
            }
            $this->mail->ClearAllRecipients(); //Limpiar Valores
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $this->mail->ErrorInfo;
        }
    }

    //PHPMailer Object
    private $mail;

}
