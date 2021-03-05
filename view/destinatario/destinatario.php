<div class="container">
    <h3 class="mt-5">Carga Individual de Destinatarios</h3>
    <a class="btn btn-info" href="?c=destinatario&a=Contactos" role="button">Contactos</a>
    <hr>
    <div class="row">
        <div class="col-12 col-md-12"> 
            <!-- Contenido -->
            <div class="signup-form-container"> 
                <!-- form start -->
                <form onsubmit="return validacion()" action="?c=destinatario&a=Insertar" method="POST" autocomplete="on">
                    <div class="form-header">
                        <h3 class="form-title"><i class="fa fa-user"></i>
                            <span class="glyphicon glyphicon-user"></span>Agregar Contacto</h3>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <!-- Filas -->
                                <div class="row mx-auto">
                                    <!-- Input Nombre -->
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> 
                                                <span class="input-group-text" id="basic-addon1">
                                                    <img src="
                                                         <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>person-lines-fill.svg
                                                         " alt="" width="30" height="24" class="d-inline-block align-top"><!-- Logito -->
                                                    </div>
                                                    <input name="Nombre" type="text" id="celular" class="form-control" placeholder="Nombre de destinatario" maxlength="40">
                                                    </div>
                                                    </div><!-- Fin Input Nombre -->
                                                    <!-- Columna whatsapp -->
                                                    <div class="col">
                                                        <div class="input-group-prepend"> 
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <img class="mx-auto d-block" src="
                                                                     <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>whatsapp.svg
                                                                     " alt="" width="30" height="24" class="d-inline-block align-top"><!-- Logito -->
                                                            </span>
                                                        </div>
                                                        <input name="Telefono" type="number" id="celular" class="form-control" placeholder="N Telefono" maxlength="40">
                                                    </div><!-- Fin Columna whatsapp -->
                                                    <!-- Columna Arroba -->
                                                    <div class="col">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <img class="mx-auto d-block" src="
                                                                     <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>at.svg
                                                                     " alt="" width="30" height="24" class="d-inline-block align-top"><!-- Logito -->
                                                            </span>
                                                        </div>
                                                        <input name="Correo" type="email" id="celular" class="form-control" placeholder="Email" maxlength="40">
                                                    </div><!-- Fin Columna Arroba -->
                                                    <!-- Columna facebook -->
                                                    <div class="col">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <img class="mx-auto d-block" src="
                                                                     <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>facebook.svg
                                                                     " alt="" width="30" height="24" class="d-inline-block align-top"><!-- Logito -->
                                                            </span>
                                                        </div>
                                                        <input name="Facebook" type="text" id="Facebook" class="form-control" placeholder="Facebook" maxlength="40">
                                                    </div><!-- Fin Columna facebook -->
                                            </div> <!-- Fin Filas -->
                                        </div>
                                    </div>


                                </div>
                                <div class="form-footer">
                                    <button type="submit" value="Enviar" class="btn btn-primary" id="btn-signup"> 
                                        <span class="glyphicon glyphicon-log-in"></span> 
                                        Agregar Telefono
                                    </button>
                                </div>
                                </form>
                            </div>
                            <!-- Fin Contenido --> 
                        </div>
                    </div>
            </div>
            <script>
                function validacion() {
                    var r = confirm("Desea enviar este mensaje!");
                    if (r == false) {
                        return false;
                    }
                }
            </script>