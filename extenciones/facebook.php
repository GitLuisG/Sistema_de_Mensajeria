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
    /*
     * @Data = is a property, which receives the properties of the class. 
     */

    private $Data; //Datos del cliente destino



    /*
     * @Content = memory space dedicated to storing the body of a banner.
     */
    private $Contenido; //contenido de la publicacion




    /*
     * @MensajeContenido = memory space dedicated to storing the body of a Message.
     */
    private $MensajeContenido; //contenido del Mensaje

    /*
     * @Construct = Method to initialize the objects.
     */

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
            'id' => 'NULL',
            'text' => 'NULL',
        ];
        $this->Configurar_Cuenta();
    }

    /*
     * Method in charge of requesting a configuration to the facebook server.
     */

    private function Configurar_Cuenta() {
        $this->facebook = new \Facebook\Facebook([
            'app_id' => $this->Data['APP_ID'],
            'app_secret' => $this->Data['APP_SECRET'],
            'default_graph_version' => 'v10.0',
                //'default_access_token' => $this->Data['PAGE_ACCESS_TOKEN'], // optional
        ]);
    }

    /*
     * Method responsible for changing the memory space of the name.
     */

    public function set_Name($Name) {
        $this->Contenido['Name'] = $Name;
    }

    /*
     * @set_Id = method in charge of storing a user identifier in a memory space.  
     */

    public function set_Id($ID) {
        $this->MensajeContenido['id'] = $ID;
    }

    /*
     * @set_MensajeMessager = method in charge of storing a text message.
     */

    public function set_MensajeMessager($Mensaje) {
        $this->MensajeContenido['text'] = $Mensaje;
    }

    /*
     * method in charge of storing an advertising message. 
     */

    public function set_Mensaje($Mensaje) {
        $this->Contenido['message'] = $Mensaje;
    }

    /*
     * @get_Friends = method in charge of displaying a list of facebook user identifiers. 
     */

    public function get_Friends() {
        // Extraemos a un array los id's de todos sus amigos
        try {
            // Returns a `FacebookFacebookResponse` object
            $response = $this->facebook->get(
                    '/me/conversations?fields=id,name,participants',
                    $this->Data['PAGE_ACCESS_TOKEN']
            );
            $response = $response->getGraphEdge();
            return $response = $response->asArray();
        } catch (FacebookExceptionsFacebookResponseException $e) {
            return "Verifique Conexion";
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (FacebookExceptionsFacebookSDKException $e) {
            return "Verifique Conexion";
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    /*
     * method in charge of sending an advertising request to facebook. 
     */

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

    /*
     * @Enviar_Mensaje = method in charge of sending messages via facebook. 
     */

    public function Enviar_Mensaje() {
        try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $this->facebook->post(
                    '/me/messages',
                    array(
                        'recipient' => '{
                            "id": "' . $this->MensajeContenido['id'] . '"
                        }',
                        'message' => '{
                            "text": "' . $this->MensajeContenido['text'] . '"
                        }'
                    ),
                    $this->Data['PAGE_ACCESS_TOKEN'],
            );
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    /*
     * @facebook = Memory space dedicated to the FACEBOOK instance.
     */

    private $facebook;

}
