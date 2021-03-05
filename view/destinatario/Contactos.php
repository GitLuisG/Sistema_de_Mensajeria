
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
<script>
    
    function validacion() {
        var r = confirm("Desea enviar este mensaje!");
        if (r == false) {
            return false;
        }
    }
    function Update() {
        $.post("?c=destinatario&a=Listar", function (data) {
            document.getElementById('obj').innerHTML = data;
        });
        
    }
    setInterval(Update, 1000);

</script>
