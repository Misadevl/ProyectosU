function mostrarHora()
{
    momentoActual = new Date();
    hora = momentoActual.getHours();
    minuto = momentoActual.getMinutes();
    segundo = momentoActual.getSeconds();

    horaImprimible = hora + ":" + minuto + ":" + segundo;
    document.getElementById('mostrarHora').innerHTML = horaImprimible;
}
function mostrarTiempo()
{
    momentoActual = new Date();
    dia = momentoActual.getDay();
    mes = momentoActual.getMonth();
    año = momentoActual.getFullYear();
    tiempoImprimible =dia  + "/" + mes + "/" + año;
    document.getElementById('mostrarHora2').innerHTML = tiempoImprimible;
}
function mostrardia()
{
    momentoActual = new Date();
    var d=new Date();
var dia=new Array(7);
dia[0]="Domingo";
dia[1]="Lunes";
dia[2]="Martes";
dia[3]="Miercoles";
dia[4]="Jueves";
dia[5]="Viernes";
dia[6]="Sabado";

diaImprimible = ("Hoy es: " + dia[d.getDay()]);
document.getElementById('mostrardia' ).innerHTML = diaImprimible;
}