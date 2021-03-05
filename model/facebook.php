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

require 'extenciones/facebook.php';

Class Facebook {

    private $App;

    public function __construct() {
        $this->App = new FacebookApp(
            Face_Config['APP_ID'],
            Face_Config['PAGE_ACCESS_TOKEN'],
            Face_Config['APP_SECRET']
        );
    }

    public function pubicar_Mensaje($Mensaje) {
        $this->App->set_Name('Hola');
        $this->App->set_Mensaje($Mensaje);
        $this->App->Enviar_Publicar();
    }

    public function enviar_Mensaje($Mensaje) {
        $this->App->Enviar_Mensaje();
    }

}
