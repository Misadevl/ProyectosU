@extends('adminlte::page')
@section('title', 'Panel de administracion')
@section('content_header')
    <h1>Panel de admin</h1>

    <script type="text/javascript" src="{{asset('js/reloj.js')}}"></script>
   
@stop

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Hola administrador, Bienvenido al sistema para controlar toda tu empresa.</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Hora</h2>

                    <script type="text/javascript">
                        function startTime(){
                        today=new Date();
                        h=today.getHours();
                        m=today.getMinutes();
                        s=today.getSeconds();
                        m=checkTime(m);
                        s=checkTime(s);
                        document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
                        t=setTimeout('startTime()',500);}
                        function checkTime(i)
                        {if (i<10) {i="0" + i;}return i;}
                        window.onload=function(){startTime();}
                        </script>
                        <div id="reloj" style="font-weight:380; font-size:2rem;"></div> 

                    <h2>Fecha</h2>
                <div id="fecha" style="font-weight:380; font-size:2rem;">
                    <script  type="text/javascript">
                        //<![CDATA[
                        var date = new Date();
                        var d  = date.getDate();
                        var day = (d < 10) ? '0' + d : d;
                        var m = date.getMonth() + 1;
                        var month = (m < 10) ? '0' + m : m;
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(day + "/" + month + "/" + year);
                        //]]>
                        </script>
                </div>
                        <h2>Dia</h2>

                        {{-- <div id="mostrardia" style="font-weight:380; font-size:2rem;"><script type="text/javascript">mostrardia();</script></div> --}}
                        <div id="dia" style="font-weight:380; font-size:2rem;">
                        <script type="text/javascript">
                            //<![CDATA[
                            function makeArray() {
                            for (i = 0; i<makeArray.arguments.length; i++)
                            this[i + 1] = makeArray.arguments[i];}
                            var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
                            'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth() + 1;
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write("Hoy es " + day + " de " + months[month] + " del " + year);
                            //]]>
                            </script>
                        </div>
                        
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop