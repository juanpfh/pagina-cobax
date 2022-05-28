@extends('adminlte::page')

@section('title', 'Estadísticas')

@section('content_header')
    <h1>Estadísticas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <center>
                <img src="{{URL::asset('image/stadistics1.png')}}" alt="profile Pic" class="img-fluid">
                <img src="{{URL::asset('image/stadistics2.png')}}" alt="profile Pic" class="img-fluid">
                <img src="{{URL::asset('image/stadistics3.png')}}" alt="profile Pic" class="img-fluid">
                {{-- <img src="vendor\adminlte\dist\img\stadistics2.png" class="img-fluid">
                <img src="vendor\adminlte\dist\img\stadistics3.png" class="img-fluid"> --}}
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