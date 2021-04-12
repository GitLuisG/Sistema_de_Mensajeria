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
