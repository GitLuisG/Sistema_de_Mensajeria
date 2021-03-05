
<head>
    <title>Sistema de mensajeria</title>
    <meta charset="utf-8"/>
    <meta name="author" content="Luis Gerardo Perales Torres" />
    <meta name="copyright" content="2020 © Universidad Politecnica de Victoria" />
    <meta name="description" content="Sistema para mensajeria"/>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>mensaje.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URL['URL'] . PATH_LIB['Estilos']; ?>bootstrap.min.css"/>
    <script src="<?php echo URL['Ajax'];?>jquery.min.js"></script>
    <script src="<?php echo URL['JQuery'];?>jquery-3.5.0.js"></script>
</head>
<body >
    <!-- Cabezera Paguina class="fixed-top"-->
    <header>
        <!-- Barra de Navegacion -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Divicion contenedor -->
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="
                         <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>mensaje.svg
                         " alt="" width="30" height="24" class="d-inline-block align-top"><!-- Logito -->
                    Sistema de mensajeria
                </a><!-- Titulo -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button><!-- Boton Hamburgesa -->

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav"><!-- Menu Para el usuario -->
                        <li class="nav-item">
                            <a class="nav-link" href="?c=sms">Sms</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=correo">Correo</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=whatsapp">Whatsapp</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=facebook">Facebook</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=destinatario">Cargar destinatarios</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <main>