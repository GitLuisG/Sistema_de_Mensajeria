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
    
        
    public function Listar(){
        
    }
    
    public function Insertar(){
        
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
        $send = new Correo(Correo_Config['HOST']);
        $send->set_Email(Correo_Config['My_Email']);
        $send->set_Password(Correo_Config['Password']);
        $send->messenger("Mensaje Importante", $formulario['Mensaje'], "hgsjdg");
        $send->set_recipient($formulario['Cell']);
        $send->Enviar();
        header('Location: ?c=correo');
    }

}
