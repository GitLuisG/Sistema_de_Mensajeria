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
require 'extenciones/correo.php';
Class Correoapp extends Database{

    public function consultar() {
        $this->sql = "SELECT * FROM `destinatarios`;";
        $rs = $this->procesar_query($this->sql, true);
        if ($rs == NULL) {
            return false;
        } else {
            return $rs[0];
        }
    }
    
    public function enviar($cell, $Mensaje){
        $send = new Correo(Correo_Config['HOST']);
        $send->set_Email(Correo_Config['My_Email']);
        $send->set_Password(Correo_Config['Password']);
        $send->messenger("Mensaje Importante", $Mensaje, "hgsjdg");
        $send->set_recipient($cell);
        $send->Enviar();
    }

}
