function Update() {
    $.post("?c=destinatario&a=Listar", function (data) {
        document.getElementById('obj').innerHTML = data;
    });

}
setInterval(Update, 1000);
