@extends('adminlte::page')

@section('title', 'Agenda')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content')
    <p>Bienvenido a los eventos</p>

    <a name="" id="" class="btn btn-primary" href="events/create" role="button">Crear Evento</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
