<section>
    <div class="container">
        <h3 class="mt-5">Formulario de envio</h3>
        <hr>
        <div class="row">
            <div class="col-12 col-md-12"> 
                <!-- Contenido -->
                <div class="signup-form-container"> 

                    <div class="form-header">
                        <h3 class="form-title"><i class="fa fa-user"></i>
                            <span class="glyphicon glyphicon-user"></span>Notificar en Facebook</h3>
                    </div>
                    <div class="form-body">
                        <div class="row">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <!-- form start -->
                                    <form action="?c=facebook&a=Publicar" method="POST" autocomplete="on">
                                        <div class="input-group-prepend"> 
                                            <span class="input-group-text" id="basic-addon1">
                                                <img src="
                                                     <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>facebook.svg
                                                     " alt="" class="d-inline-block align-top"><!-- Logito -->
                                                En la paguina
                                            </span>
                                            <textarea cols="60" rows="5" style="resize: both;" name="pub" class="form-control"></textarea>
                                            <button type="submit" value="Enviar" class="btn btn-primary" id="btn-signup"> 
                                                <span class="glyphicon glyphicon-log-in">
                                                    Publicar</span>
                                            </button>
                                        </div>
                                    </form>
                                    <form action="?c=facebook&a=Mensaje" method="POST" autocomplete="on">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <img src="
                                                     <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>facebook.svg
                                                     " alt="" class="d-inline-block align-top"><!-- Logito -->
                                                Via Mensaje
                                            </span>
                                            <textarea cols="60" rows="5" style="resize: both;" name="men" class="form-control"></textarea>
                                            <button type="submit" value="Enviar" class="btn btn-primary" id="btn-signup"> 
                                                <span class="glyphicon glyphicon-log-in">
                                                    Enviar Mensaje</span>
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Fin Contenido --> 
                </div>
            </div>
        </div>
</section>
