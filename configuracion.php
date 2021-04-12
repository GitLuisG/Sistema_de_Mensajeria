<?php

define("URL",
        array(
            "IMG" => "view/assets/", /* Estilos */
            "URL" => "view/assets/", /* Estilos */
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
    "APP_ID" => "496049374888801",
    "PAGE_ACCESS_TOKEN" => "EAAHDJ37IA2EBADI3hGG7XSlK93ROVXTdpvq10D4nxUPooCnfIWNzMcbAvgZBwpteBfUkPtrVf3BqJye3bsSKzLSnjnhHVUepmznYvtVtqZBawZAl2zm7uV0xujj3HZCsuAWKCNhmR52VFb6OB8XZA814KLkHyuZAZBUpvIESXhmnxAllCIZCpFtcTpkPlxalxlgZD",
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
    "My_Email" => 'correousertb@gmail.com',
    "Password" => 'Luisgerardo3'
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