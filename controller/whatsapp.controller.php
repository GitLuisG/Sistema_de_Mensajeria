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
        $contactos = new Whatsappapp();
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
        $contactos = new Whatsappapp();
        $rs = $contactos->enviar($formulario['Cell'], $formulario['Mensaje']);
        header('Location: ?c=whatsapp');
    }

}
