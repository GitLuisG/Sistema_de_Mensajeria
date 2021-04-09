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

require_once './configuracion.php';
require_once PATH_LIB['MODEL'] . 'database.php';

$controller = 'sms';
if (!isset($_REQUEST['c'])) {
    require_once PATH_LIB['CONTROLLER'] . $controller . ".controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
} else {
    if (
            $_REQUEST['c'] == "" ||
            $_REQUEST['c'] == "sms" ||
            $_REQUEST['c'] == "correo" ||
            $_REQUEST['c'] == "whatsapp" ||
            $_REQUEST['c'] == "facebook" ||
            $_REQUEST['c'] == "destinatario" ||
            $_REQUEST['c'] == "login"
    ) {
        // Obtenemos el controlador que queremos cargar
        $controller = strtolower($_REQUEST['c']);
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
        // Instanciamos el controlador
        require_once PATH_LIB['CONTROLLER'] . $controller . ".controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
    } else {
        //Variables de control para el servidor no borrar
        $controller = 'server';
        $accion = 'Index';
        // Instanciamos el controlador
        require_once PATH_LIB['CONTROLLER'] . $controller . ".controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
    }
// Llama la accion
    call_user_func(array($controller, $accion));
}
?>
