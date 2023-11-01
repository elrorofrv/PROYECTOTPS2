@extends('adminlte::page')

@section('title', 'Agenda')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content')
    <p>Bienvenido a los eventos</p>

    <!--<div class="mb-3">
                <a href="route('admin.events.create'}*/) }}" class="btn btn-primary">New Event</a>
            </div>-->
    <form method="POST" action="{{ route('admin.events.store') }}">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="heplId"
                placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="" aria-describedby="helpId"
                placeholder="Description">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Ubication</label>
            <input type="text" class="form-control" name="ubication" id="ubication" aria-describedby="helpId"
                placeholder="Ubication">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha Inicio</label>
            <input type="datetime-local" class="form-control" name="fech_inicio" id="fechinicio" aria-describedby="helpId"
                placeholder="fechinicio">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Finalizacion</label>
            <input type="datetime-local" class="form-control" name="fech_final" id="fechfinal" aria-describedby="helpId"
                placeholder="fechfinal">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-submit">Crear Evento</button>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop