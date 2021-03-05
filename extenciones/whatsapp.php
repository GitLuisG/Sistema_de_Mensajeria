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
require 'Twilio/autoload.php';

use Twilio\Rest\Client;
use Twilio\TwiML\MessagingResponse;

Class Whatsapp {

    private $Data; //Datos del cliente destino
    private $Num_Company; //Numero asignado por twilio
    private $ACOUNT_SID; //Identificador o numero de cuenta asignado por Twilio
    private $AUTH_TOKEN; //Token de autentificacion de Twilio

    public function __construct() {
        $this->Data = array(
            'Lada' => "NULL", /* Lada del pais dirigido */
            'Cell' => "NULL" /* Numero de celular destino */,
            'Mensaje' => "NULL"/* Mensaje redactado */
        );
    }

    public function set_Telefono($lada, $cell, $mensaje) {
        $this->Data['Lada'] = $lada;
        $this->Data['Cell'] = $cell;
        $this->Data['Mensaje'] = $mensaje;
    }

    public function set_ACOUNT_SID($ACOUNT_SID) {
        $this->ACOUNT_SID = $ACOUNT_SID; /* Funcion para cambio de ACOUNT */
    }

    public function set_AUTH_TOKEN($AUTH_TOKEN) {
        $this->AUTH_TOKEN = $AUTH_TOKEN; /* Funcion de cambio de TOKEN */
    }

    public function setNum_Company($Num_Company) {
        return $this->Num_Company = $Num_Company; /* Funcion cambio de numero de compañia */
    }

    public function getNum_Company() {
        return $this->Num_Company; /* Funcion para mostrar el numero de la compañia asignado */
    }

    public function getLada() {
        return $this->Data['Lada']; /* Funcion para mostrar el lada del cliente */
    }

    public function getcell() {
        return $this->Data['Cell']; /* Funcion para mostrar el Telefono o Celular del cliente */
    }

    public function getmensaje() {
        return $this->Data['Mensaje']; /* Funcion para mostrar el mensaje del cliente */
    }

    private function Enviar() {
        try {
            $this->Client = new Client($this->ACOUNT_SID, $this->AUTH_TOKEN); /* Creacion del objeto Twilio */
            $Telefono = $this->Data['Lada'] . $this->Data['Cell']; /* Concatenacion del telefono y lada */
            $this->Client->messages->create("whatsapp:" . $Telefono, /* Numero destino */
                    [
                        "from" => "whatsapp:" . $this->Num_Company,
                        "body" => $this->Data['Mensaje']
                    ]
            );
        } catch (Exception $e) {
            die($e->getCode() . $e->getMessage()); /* Evalua que no exista errores en el mensaje */
        }
    }

    public function ValidarEnvio($param) {
        if ($param) {/* Recibe un parametro verdadero o falso */
            try {
                $this->Enviar(); /* Envia el mensaje */
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } else {
            echo '<script>alert("canselado")</script>'; /* Se cansela */
        }
    }

    //Objeto Twilio
    private $Client;

}
