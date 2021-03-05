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
require 'Facebook/autoload.php';

Class FacebookApp {

    private $Data; //Datos del cliente destino
    private $Contenido; //contenido de la publicacion
    private $MensajeContenido; //contenido del Mensaje

    public function __construct($APP_ID, $PAGE_ACCESS_TOKEN, $APP_SECRET) {
        $this->Data = array(
            "APP_ID" => $APP_ID,
            "PAGE_ACCESS_TOKEN" => $PAGE_ACCESS_TOKEN,
            "APP_SECRET" => $APP_SECRET
        );
        $this->Contenido = [
            'name' => 'NULL',
            'message' => 'NULL',
        ];
        $this->MensajeContenido = [
            'recipient' => [
                'id' => "NULL"
            ],
            'message' => [
                'text' => 'NULL'
            ]
        ];
        $this->Configurar_Cuenta();
    }

    private function Configurar_Cuenta() {
        $this->facebook = new \Facebook\Facebook([
            'app_id' => $this->Data['APP_ID'],
            'app_secret' => $this->Data['APP_SECRET'],
            'default_graph_version' => 'v10.0',
                //'default_access_token' => $this->Data['PAGE_ACCESS_TOKEN'], // optional
        ]);
    }

    public function set_Name($Name) {
        $this->Contenido['Name'] = $Name;
    }

    public function set_Id($ID) {
        $this->MensajeContenido['recipient']['id'] = $ID;
    }

    public function set_MensajeMessager($Mensaje) {
        $this->MensajeContenido['message']['text'] = $Mensaje;
    }

    public function set_Mensaje($Mensaje) {
        $this->Contenido['message'] = $Mensaje;
    }

    public function get_Friends() {
        // Extraemos a un array los id's de todos sus amigos
        $friends_ids = $this->facebook->api_client->friends_get();
        foreach ($friends_ids as $friend_id) {
            echo $friend_id;
        }
    }

    public function Enviar_Publicar() {
        try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $this->facebook->post(
                    '/me/feed',
                    $this->Contenido,
                    $this->Data['PAGE_ACCESS_TOKEN']);
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
    }

    public function Enviar_Mensaje() {
        try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $this->facebook->post(
                    '/me/messages',
                    $this->MensajeContenido,
                    $this->Data['PAGE_ACCESS_TOKEN'],
            );
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
    }

    //Objeto Facebook
    private $facebook;

}
