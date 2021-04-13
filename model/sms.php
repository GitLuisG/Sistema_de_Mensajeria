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
require 'extenciones/sms.php';

Class Smsapp extends Database{

    public function consultar() {
        $this->sql = "SELECT * FROM `destinatarios`;";
        $rs = $this->procesar_query($this->sql, true);
        if ($rs == NULL) {
            return false;
        } else {
            return $rs[0];
        }
    }
    
    public function Enviar($cell, $mensaje) {
        $this->sms = new Sms();
        $this->sms->set_Telefono('+52', $cell, $mensaje);
        if ($this->sms->getcell()) {
            if ($this->sms->getmensaje()) {
                $this->sms->setNum_Company(NUMBER_COMPANY);
                $this->sms->set_ACOUNT_SID(ACOUNT_SID);
                $this->sms->set_AUTH_TOKEN(AUTH_TOKEN);
                $this->sms->ValidarEnvio(true);
            } else {
                echo '<script>alert("no se encontro el mensaje")</script>';
            }
        } else {
            echo '<script>alert("no se encontro el cell")</script>';
        }
    }

}
