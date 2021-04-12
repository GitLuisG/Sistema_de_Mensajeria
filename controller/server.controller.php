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

class ServerController {
    
    public function Index() {
        require_once 'view/componentes/header.php';
        require_once 'view/Error/404.php';
        require_once 'view/componentes/footer.php';
    }
        
}
