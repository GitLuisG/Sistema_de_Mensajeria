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

require PATH_LIB['MODEL'].'sms.php';

class SmsController {

    private $cell;
    private $mensaje;
    private $sms;
    private $lada;

    public function Index() {
        require_once PATH_LIB['Componenent'].'header.php';
        require_once 'view/sms/sms.php';
        require_once PATH_LIB['Componenent'].'footer.php';
    }
    
    public function Listar(){
        
    }
    
    public function Insertar(){
        
    }
    
    public function Editar(){
        
    }
    
    public function Modificar(){
        
    }
    
    public function Actualizar() {
        
    }

    public function Enviar() {
        $formulario = array(
            "Cell" => $_POST['cel'],
            "Mensaje" => $_POST['men']
        );
        $this->cell = $formulario['Cell'];
        $this->mensaje = $formulario['Mensaje'];
        $this->sms = new Sms();
        $this->sms->set_Telefono('+52', $this->cell, $this->mensaje);
        if ($this->sms->getcell()) {
            if ($this->sms->getmensaje()) {
                $this->sms->setNum_Company('+15023834553');
                $this->sms->set_ACOUNT_SID('ACf812855c7b927ac82f6d44e2fbf277e2');
                $this->sms->set_AUTH_TOKEN('62d65d753fc422e1b616b440966120cd');
                $this->sms->ValidarEnvio(true);
            } else {
                echo '<script>alert("no se encontro el mensaje")</script>';
            }
        } else {
            echo '<script>alert("no se encontro el cell")</script>';
        }
        header('Location: ?c=sms');
    }
    
    public function bandeja() {
        require_once PATH_LIB['Componenent'].'header.php';
        require_once 'view/sms/bandeja.php';
        require_once PATH_LIB['Componenent'].'footer.php';
    }

}
