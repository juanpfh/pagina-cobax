@extends('adminlte::page')

@section('title', 'Panel')

@section('content_header')
    <h1>Panel</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Bienvenido a Cobax</h4>
        </div>
        <div class="card-body">
            <p>Cobax es una plataforma de e-learning la cual fue creada con la finalidad de ser utilizada en el ámbito educativo para el aprendizaje centrándonos en un nivel medio superior o preparatoria. Incluye diferentes apartados para facilitar el estudio de los y las alumnas. Entre sus características están la de incluir un mecanismo de gestión de usuarios en el que cada usuario dispondrá de su propio espacio de trabajo, permitir la creación de proyectos con la que los usuarios pueden tener de una manera organizada los módulos que vayan realizando, incluso proporcionar una visión original a la hora de obtener los resultados de su trabajo y poder entenderlos mejor, mediante el uso de representaciones gráficas como tablas o escenas 3D totalmente manejables y manipulables. Todo esto es posible sin la necesidad de instalar nada más allá de un navegador compatible con HTML5.</p>
            <center>
                <img src="https://fococonsultores.es/wp-content/uploads/2019/01/plataforma-elearning.jpg" class="img-fluid">
            </center>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
