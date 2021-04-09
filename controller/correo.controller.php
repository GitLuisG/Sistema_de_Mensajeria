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

require PATH_LIB['MODEL'] . 'correo.php';

class CorreoController {

    private $cell;
    private $mensaje;

    public function Index() {
        require_once 'view/componentes/header.php';
        require_once 'view/correo/correo.php';
        require_once 'view/componentes/footer.php';
    }

    public function Listar() {
        header('Content-Type: application/json');
        $contactos = new Correoapp();
        $rs = $contactos->consultar();
        if ($rs) {
            foreach ($rs as $element) {
                echo "
                <option value='" . $element[0] . "'>" . $element[3] . "</option>
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

    public function Modificar() {
        
    }

    public function Actualizar() {
        
    }

    public function Enviar() {
        $formulario = array(
            "Cell" => $_POST['correo'],
            "Mensaje" => $_POST['men']
        );
        $contactos = new Correoapp();
        $contactos->enviar($formulario["Cell"], $formulario["Mensaje"]);
        header('Location: ?c=correo');
    }

}
