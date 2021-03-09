<?php

define("URL",
        array(
            "IMG" => "https://gitluisg.github.io/Img/", /* Estilos */
            "URL" => "https://gitluisg.github.io/cdn/", /* Estilos */
            "Ajax" => "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/",
            "JQuery" => "https://code.jquery.com/"
        )
);

//Librerias O assets
define("PATH_LIB", array(
    "Imagenes" => 'static/',
    "js" => 'static/js/',
    "Estilos" => 'b-5.0.0/css/',
    "Scripts" => 'b-5.0.0/js/',
    "PHPMailer" => 'PHPMailer/',
    "Facebook" => 'Facebook/',
    "Componenent" => "view/componentes/",
    "VIEW" => 'view/',
    "MODEL" => 'model/',
    "CONTROLLER" => 'controller/'
));

//Configuraciones del facebook
define("Face_Config", array(
    "APP_ID" => "111269454348541",
    "PAGE_ACCESS_TOKEN" => "EAAHDJ37IA2EBAIwPqGHvtVifs3lUk6rTiuXqLOk3ounVAocstYqxDtq6JWoVlOSVqKzZAgUpr6VJckR76o0HVN3LLZAAeEQvSufJKDtottBtFOdQx5jSdmoSMg82f2nsUqZCeZBrvL8gM2fAn7EIsxDTssS5wchWLqpuJBEZAMi2R7KKu3XbLnzqVXftRl3EZD",
    "APP_SECRET" => "279d06f32ed1bace37184e24be52077c"
));

//TOKEN DE TWILOO.COM/CONSOLE, POR TWILO
//ACOUNT_SID se consigue en el sitio
define("ACOUNT_SID", "ACf812855c7b927ac82f6d44e2fbf277e2");
//AUTH_TOKEN se consigue en el sitio
define("AUTH_TOKEN", "62d65d753fc422e1b616b440966120cd");
//NUMBER_COMPANY Numero asignado por el sitio
define("NUMBER_COMPANY", "+15023834553");

//Correos
//Dirección a la que responderá el destinatario
define("Correo_Config", array(
    'HOST' => 'smtp.gmail.com',
    "My_Email" => 'example@gmail.com',
    "Password" => 'Example3'
));

define("Acceso", array(
    "SMS" => array(
        "Enviar" => true,
        "Ver" => true,
    ),
    "Correo" => array(
        "Enviar" => true,
        "Ver" => true,
    ),
    "Whatsapp" => array(
        "Enviar" => true,
        "Ver" => true,
    ),
    "Facebook" => array(
        "Enviar" => true,
        "Ver" => true,
    )
    , "Destinatario" => array(
        "Enviar" => true,
        "Ver" => true,
    ),
    "Contactos" => array(
        "Enviar" => true,
        "Ver" => true,
    )
))
?>