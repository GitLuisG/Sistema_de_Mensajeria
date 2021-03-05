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

class FacebookController{

    private $mensaje;

    public function Index() {
        require_once PATH_LIB['Componenent'].'header.php';
        require_once 'view/Facebook/facebook.php';
        require_once PATH_LIB['Componenent'].'footer.php';
    }
    
    public function Publicar(){
        $this->mensaje = $_POST['pub'];
        $publicar=new Facebook();
        $publicar->pubicar_Mensaje($this->mensaje);
        header('Location: ?c=facebook');
    }
    
    public function Mensaje() {
        $this->mensaje = $_POST['men'];
        $publicar=new Facebook();
        $publicar->enviar_Mensaje($this->mensaje);
    }


    public function Listar(){
        
    }
    
    public function Actualizar(){
        
    }
    
    public function Eliminar(){
        
    }

}
