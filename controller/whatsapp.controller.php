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

require PATH_LIB['MODEL'].'Whatsapp.php';

class WhatsappController {

    private $cell;
    private $mensaje;

    public function Index() {
        require_once PATH_LIB['Componenent'].'header.php';
        require_once 'view/whatsapp/whatsapp.php';
        require_once PATH_LIB['Componenent'].'footer.php';
    }

    public function Listar() {
        
    }

    public function Insertar() {
        
    }

    public function Editar() {
        
    }

    public function Modificar() {
        
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
        $mensaje = new Whatsapp();
        $mensaje->set_Telefono('+521', $this->cell, $this->mensaje);
        $mensaje->setNum_Company('+14155238886');
        $mensaje->set_ACOUNT_SID('ACf812855c7b927ac82f6d44e2fbf277e2');
        $mensaje->set_AUTH_TOKEN('62d65d753fc422e1b616b440966120cd');
        if ($mensaje->getcell()) {
            if ($mensaje->getmensaje()) {
                $mensaje->ValidarEnvio(true);
            } else {
                echo 'no se encontro el mensaje <br>';
            }
        } else {
            echo 'no se encontro el nombre <br>';
        }
        header('Location: ?c=whatsapp');
    }

}
