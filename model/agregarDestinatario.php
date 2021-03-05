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

Class destinatario extends Database {

    public $sql;

    public function consultar() {
        $this->sql = "SELECT * FROM `destinatarios`;";
        $rs = $this->procesar_query($this->sql, true);
        if ($rs == NULL) {
            return false;
        }else{
            return $rs[0];
        }
    }

    public function insertar($Data) {
        $this->sql = "INSERT INTO destinatarios(Nombre, Telefono, Email, Facebook, Lada)VALUES('" . $Data["Nombre"] . "', '" . $Data["Telefono"] . "', '" . $Data["Email"] . "', '" . $Data["Facebook"] . "', '" . $Data["Lada"] . "');";
        $rs = $this->procesar_query($this->sql, false);
    }

    public function eliminar() {
        
    }

    public function Actualizar() {
        
    }

}
