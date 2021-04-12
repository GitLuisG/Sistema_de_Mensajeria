<?php
if (Acceso["Contactos"]["Ver"]) {
    ?>
    <div class="container">
        <h3 class="mt-5">Formulario de envio</h3>
        <a class="btn btn-info" href="?c=destinatario" role="button"><-</a>

        <hr>
        <div class="row">
            <div class="col-12 col-md-12"> 
                <!-- Contenido -->
                <div class="signup-form-container"> 
                    <!-- form start -->
                    <form onsubmit="return validacion()" action="" method="POST" autocomplete="on">
                        <div class="form-header">
                            <h3 class="form-title"><i class="fa fa-user"></i>
                                <span class="glyphicon glyphicon-user"></span>Contactos</h3>
                        </div>
                        <div class="form-body">
                            <div id="obj" class="row">

                            </div>
                        </div>
                    </form>
                </div>
                <!-- Fin Contenido --> 
            </div>
        </div>
    </div>
    <?php
    echo "<script src='" . URL['URL'] . PATH_LIB['js'] . "scripts_1.js' ></script>"; ?>
<?php
}
?>