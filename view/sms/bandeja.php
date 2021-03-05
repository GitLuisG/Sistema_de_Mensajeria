
<div class="container">
    <h3 class="mt-5">Formulario de envio</h3>
    <a class="btn btn-info" href="?c=sms&a=Index" role="button"><-</a>
    <hr>
    <div class="row">
        <div class="col-12 col-md-12"> 
            <!-- Contenido -->
            <div class="signup-form-container"> 
                <!-- form start -->
                <form onsubmit="return validacion()" action="?c=sms&a=Enviar" method="POST" autocomplete="on">
                    <div class="form-header">
                        <h3 class="form-title"><i class="fa fa-user"></i>
                            <span class="glyphicon glyphicon-user"></span>SMS</h3>
                    </div>
                    <div class="form-body">
                        <div class="row">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> 
                                            <span class="input-group-text" id="basic-addon1">
                                                <img src="
                                                     <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>MensajeBlack.svg
                                                     " alt="" width="30" height="24" class="d-inline-block align-top"><!-- Logito -->
                                                </div>
                                                <label class="form-control">Destinatario: 8342582423</label>
                                        </div>
                                    </div>

                                </div>
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
