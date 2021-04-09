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

//LIBRERIA TWILIO
require 'Twilio/autoload.php';

use Twilio\Rest\Client;
use Twilio\TwiML\MessagingResponse;

Class Sms {
    /*
     * @Data = is a property, which receives the properties of the class. 
     */

    private $Data = array(); //Datos del cliente destino






    /*
     * @Num_company = is a property that you receive. an assigned number for the company
     */
    private $Num_Company; //Numero asignado por twilio







    /*
     * ACOUNT_SID = It is a property that receives. an identifier or account number assigned by twilio.
     */
    private $ACOUNT_SID; //Identificador o numero de cuenta asignado por Twilio






    /*
     * @AUTH_TOKEN = property to perform Twilio's authentication method.
     */
    private $AUTH_TOKEN; //Token de autentificacion de Twilio

    /*
     * @Construct = Method to initialize the objects.
     */

    public function __construct() {
        $this->Data = array(
            'Lada' => "NULL", /* Lada del pais dirigido */
            'Cell' => "NULL" /* Numero de celular destino */,
            'Mensaje' => "NULL"/* Mensaje redactado */
        );
    }

    /*
     * @Set_Telefono = Method in charge of automating the assignment of a telephone number.
     */

    public function set_Telefono($lada, $cell, $mensaje) {
        $this->Data['Lada'] = $lada;
        $this->Data['Cell'] = $cell;
        $this->Data['Mensaje'] = $mensaje;
    }

    /*
     * @set_ACOUNT_SID = Method in charge of automating account change.
     */

    public function set_ACOUNT_SID($ACOUNT_SID) {
        $this->ACOUNT_SID = $ACOUNT_SID; /* Funcion para cambio de ACOUNT */
    }

    /*
     * @set_AUTH_TOKEN = Method in charge of automating the change of an authentication code. 
     */

    public function set_AUTH_TOKEN($AUTH_TOKEN) {
        $this->AUTH_TOKEN = $AUTH_TOKEN; /* Funcion de cambio de TOKEN */
    }

    /*
     * @setNum_Company = Method in charge of automating, 
     * the change of telephone number.
     */

    public function setNum_Company($Num_Company) {
        return $this->Num_Company = $Num_Company; /* Funcion cambio de numero de compañia */
    }

    /*
     * @getNum_Company = Company method in charge of displaying the memory space, 
     * which stores the company number.
     */

    public function getNum_Company() {
        return $this->Num_Company; /* Funcion para mostrar el numero de la compañia asignado */
    }

    /*
     * @getLada = Company method in charge of displaying the memory space, 
     * which stores the country number (Lada) of the country.
     */

    public function getLada() {
        return $this->Data['Lada']; /* Funcion para mostrar el lada del cliente */
    }

    /*
     * @getcell = 
     */

    public function getcell() {
        return $this->Data['Cell']; /* Funcion para mostrar el Telefono o Celular del cliente */
    }

    /*
     * @getmensaje = Company method in charge of displaying the memory space, 
     * which stores the Customer Message. 
     */

    public function getmensaje() {
        return $this->Data['Mensaje']; /* Funcion para mostrar el mensaje del cliente */
    }

    /*
     * @Enviar = Company method in charge of making a request to the twilio server.
     */

    private function Enviar() {
        try {

            $this->Client = new Client($this->ACOUNT_SID, $this->AUTH_TOKEN); /* Creacion del objeto Twilio */
            $Telefono = $this->Data['Lada'] . $this->Data['Cell']; /* Concatenacion del telefono y lada */
            $this->Client->messages->create(
                    $Telefono, /* Numero destino */
                    array(
                        'from' => $this->Num_Company, /* Numero de compañia */
                        'body' => $this->Data['Mensaje']/* Mensaje redactado */
                    )
            );
        } catch (Exception $e) {
            die($e->getCode() . $e->getMessage()); /* Evalua que no exista errores en el mensaje */
        }
    }

    /*
     * M�todo empresarial responsable de realizar una validacion del envio de mensaje.
     */

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

    /*
     * @Client = Memory space dedicated to the twilio instance.
     */

    private $Client;

}
