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

require PATH_LIB['MODEL'] . 'agregarDestinatario.php';

class DestinatarioController {

    private $DUsuario;

    public function Index() {
        require_once PATH_LIB['Componenent'].'header.php';
        require_once 'view/destinatario/destinatario.php';
        require_once PATH_LIB['Componenent'].'footer.php';
    }

    public function Contactos() {
        require_once PATH_LIB['Componenent'].'header.php';
        require_once 'view/destinatario/Contactos.php';
        require_once PATH_LIB['Componenent'].'footer.php';
    }

    public function Insertar() {
        $this->DUsuario = array(
            "Nombre" => $_POST['Nombre'],
            "Lada" => '+52',
            "Telefono" => $_POST['Telefono'],
            "Email" => $_POST['Correo'],
            "Facebook" => $_POST['Facebook']
        );
        $this->Agregar();
        header('Location: ?c=destinatario');
    }

    public function Listar() {
        $contactos = new destinatario();
        $rs = $contactos->consultar();
        if ($rs) {
            foreach ($rs as $element) {
                echo "
                <div  class='col input-group mb-3'>
                    <div  class='form-control input-group-prepend'> 
                        <span class='input-group-text' id='basic-addon1'>
                        <img src='" . URL['URL'] . PATH_LIB['Imagenes'] . "MensajeBlack.svg
                        ' alt='' width='30' height='24' class='d-inline-block align-top'><!-- Logito -->
                        </span>
                        <label id='Listo' class='form-control'>Nombre: " . $element[1] . "</label>
                        <label class='form-control'>Numero: " . $element[2] . "</label>
                        <label class='form-control'>Correo: " . $element[3] . "</label>
                        <label class='form-control'>Facebook: " . $element[4] . "</label>
                    </div>
                </div>
                ";
            }
        } else {
            echo "
                <div  class='col input-group mb-3'>
                    <div  class='form-control input-group-prepend'> 
                        <span class='input-group-text' id='basic-addon1'>
                        <img src='" . URL['URL'] . PATH_LIB['Imagenes'] . "MensajeBlack.svg
                        ' alt='' width='30' height='24' class='d-inline-block align-top'><!-- Logito -->
                        </span>
                        <label id='Listo' class='form-control'>No Tiene contactos agregados</label>
                    </div>
                </div>
                ";
        }
    }

    private function Agregar() {
        $contactos = new destinatario();
        $contactos->insertar($this->DUsuario);
        unset($contactos);
    }

}
