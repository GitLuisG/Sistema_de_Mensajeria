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

require PATH_LIB['MODEL'] . 'sms.php';

class SmsController {

    private $cell;
    private $mensaje;
    private $sms;
    private $lada;
    private $contactos;

    public function Index() {
        require_once PATH_LIB['Componenent'] . 'header.php';
        require_once 'view/sms/sms.php';
        require_once PATH_LIB['Componenent'] . 'footer.php';
    }

    public function ListarXNombre() {
        $contactos = new Smsapp();
        $rs = $contactos->consultar();
        if ($rs) {
            foreach ($rs as $element) {
                echo "
                <option value='" . $element[0] . "'>" . $element[1] . "</option>
                ";
            }
        } else {
            echo "
               <option>No Tiene contactos agregados</option>
                ";
        }
    }

    public function ListarXNumero() {
        $contactos = new Smsapp();
        $rs = $contactos->consultar();
        if ($rs) {
            foreach ($rs as $element) {
                echo "
                <option value='" . $element[0] . "'>" . $element[2] . "</option>
                ";
            }
        } else {
            echo "
               <option>No Tiene contactos agregados</option>
                ";
        }
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
        $sms = new Smsapp();
        $sms->Enviar($this->cell, $this->mensaje);
        header('Location: ?c=sms');
    }

    public function bandeja() {
        require_once PATH_LIB['Componenent'] . 'header.php';
        require_once 'view/sms/bandeja.php';
        require_once PATH_LIB['Componenent'] . 'footer.php';
    }

}
