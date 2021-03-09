<?php
if(Acceso["Contactos"]["Ver"]){
?>
<div class="container">
    <h3 class="mt-5">Formulario de envio</h3>
    <a class="btn btn-info" href="?c=sms&a=bandeja" role="button">Bandeja de Entrada</a>

    <hr>
    <div class="row">
        <div class="col-12 col-md-12"> 
            <!-- Contenido -->
            <div class="signup-form-container"> 
                <!-- form start -->
                <form onsubmit="return validacion()" action="?c=sms&a=Insertar" method="POST" autocomplete="on">
                    <div class="form-header">
                        <h3 class="form-title"><i class="fa fa-user"></i>
                            <span class="glyphicon glyphicon-user"></span>SMS</h3>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"> 
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="
                                             <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>Phone.svg
                                             " alt="" width="30" height="24" class="d-inline-block align-top"><!-- Logito -->
                                        </div>

                                        <select name="cel" id="celular" class="form-control">
                                            <option selected="selected" disabled="disabled">Seleccione un contacto</option>
                                            <?php echo $this->Listar(); ?>
                                        </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> 
                                            <span class="input-group-text" id="basic-addon1">
                                                <img src="
                                                     <?php echo URL['URL'] . PATH_LIB['Imagenes']; ?>MensajeBlack.svg
                                                     " alt="" width="30" height="24" class="d-inline-block align-top"><!-- Logito -->
                                            </span>
                                            <textarea name="men" cols="100" rows="5" class="form-control"></textarea>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="submit" value="Enviar" class="btn btn-primary" id="btn-signup"> 
                                <span class="glyphicon glyphicon-log-in"></span> 
                                Enviar Mensaje 
                            </button>
                        </div>
                </form>
            </div>
            <!-- Fin Contenido --> 
        </div>
    </div>
</div>
<?php
}
?>