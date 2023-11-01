@extends('adminlte::page')

@section('title', 'Agenda')

@section('content_header')
    <h1>Agend</h1>
@stop

@section('content')
<p>Bienvenido a las agendas</p>

    <!--<div class="mb-3">
                <a href="route('admin.events.create'}*/) }}" class="btn btn-primary">New Event</a>
            </div>-->
    <form method="POST" action="{{ route('admin.agends.store') }}">
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
            <button type="submit" class="btn btn-success">Crear Agenda</button>
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