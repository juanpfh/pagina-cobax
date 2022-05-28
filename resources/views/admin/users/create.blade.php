@extends('adminlte::page')

@section('title', 'Crear nuevo usuario')

@section('content_header')
    <h1>Crear nuevo usuario</h1>
@stop

@section('content')
    {{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif --}}
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.users.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del usuario']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-mail:') !!}
                    {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el correo electrónico del usuario']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Contraseña:') !!}
                    {!! Form::text('password', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el correo electrónico del usuario']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    {{-- @livewire('admin.users-index') --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop