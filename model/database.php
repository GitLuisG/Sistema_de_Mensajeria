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


//conexion de bd aplicando patron de diseño singleton...
class Database {

    private $conexion;
    private $servidor = "localhost";
    private $clave = "BistecAsado3-Luis";
    private $usuario = "root2";
    private $bd = "mensajeria";
    private $charset = "utf8";
    private $query;
    public $arreglo = array();
    public $sql = "";

    /* Metodo constructor */
    public function __construct() {
        $this->query = "";
    }

    //metodo que permite conectarse a la bd
    private function conectar() {
        $this->conexion = new PDO('mysql:host=' . $this->servidor . ';dbname=' . $this->bd . ';charset=' . $this->charset, $this->usuario, $this->clave);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($this->conexion) {
            return 'SI';
        } else {
            return 'NO';
        }
    }

    //metodo que permite ejecutar un query
    //para select
    private function enviarQuery($sql) {
        $this->query = $this->conexion->query($sql);
        return $this->query;
    }
    

    private function vectorizar() {
        return $this->query->fetchAll();
    }

    //para insert, update, delete
    private function execute($sql, $Bool) {
        $result = $this->enviarQuery($sql);
        if ($Bool) {
            $arr = array();
            while ($row = $this->vectorizar()) {
                $arr[] = $row;
            }
        } else {
            $arr = "error";
        }
        return $arr;
    }

    public function procesar_query($sql, $Bool) {
        $this->conectar();
        $rs = $this->execute($sql, $Bool);
        return $rs;
    }

}
