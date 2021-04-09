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

require 'extenciones/whatsapp.php';

Class Whatsappapp extends Database {

    public $sql;

    public function consultar() {
        $this->sql = "SELECT * FROM `destinatarios`;";
        $rs = $this->procesar_query($this->sql, true);
        if ($rs == NULL) {
            return false;
        } else {
            return $rs[0];
        }
    }

    public function enviar($cell, $mensaje) {
        $mensaje = new Whatsapp();
        $mensaje->set_Telefono('+521', $cell, $mensaje);
        $mensaje->setNum_Company(NUMBER_COMPANY);
        $mensaje->set_ACOUNT_SID(ACOUNT_SID);
        $mensaje->set_AUTH_TOKEN(AUTH_TOKEN);
        if ($mensaje->getcell()) {
            if ($mensaje->getmensaje()) {
                $mensaje->ValidarEnvio(true);
            } else {
                echo 'no se encontro el mensaje <br>';
            }
        } else {
            echo 'no se encontro el nombre <br>';
        }
    }

}
