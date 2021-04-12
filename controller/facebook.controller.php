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

require PATH_LIB['MODEL'] . 'facebook.php';

class FacebookController {

    private $id;
    private $mensaje;
    private $conn;

    public function Index() {
        require_once PATH_LIB['Componenent'] . 'header.php';
        require_once 'view/Facebook/facebook.php';
        require_once PATH_LIB['Componenent'] . 'footer.php';
    }

    public function Publicar() {
        $this->mensaje = $_POST['pub'];
        $this->conn = new Facebook();
        $this->conn->pubicar_Mensaje($this->mensaje);
        header('Location: ?c=facebook');
    }

    public function Mensaje() {
        $this->mensaje = $_POST['men'];
        $this->id = $_POST['id'];
        $this->conn = new Facebook();
        $this->conn->enviar_Mensaje($this->mensaje, $this->id);
        header('Location: ?c=facebook');
    }

    public function Amigos() {
        $this->conn = new Facebook();
        $response = $this->conn->get_ids();
        foreach ($response as $friends) {
            echo "<option value='" . $friends["participants"][0]['id'] . "'>" . $friends["participants"][0]['name'] . "</option>";
        }
    }

    public function Actualizar() {
        
    }

    public function Eliminar() {
        
    }

}
