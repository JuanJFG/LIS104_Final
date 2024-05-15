window.onload = function(){
    var fecha = new Date(); // obtiene la fecha actual
    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 1; // los meses en JavaScript empiezan desde 0
    var ano = fecha.getFullYear();

    if(dia < 10) dia = '0' + dia; // añade un cero si el día es menor a 10
    if(mes < 10) mes = '0' + mes; // añade un cero si el mes es menor a 10

    var fechaFormateada = ano + "-" + mes + "-" + dia; // formatea la fecha al formato yyyy-mm-dd

    document.getElementById("date").max = fechaFormateada; // establece la fecha máxima
    document.getElementById("date").value = fechaFormateada; // establece la fecha máxima
}
