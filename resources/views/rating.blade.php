@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Califica esto:</h1>

    <!-- Mostrar calificaciones anteriores -->
    <div class="mb-4">
        @foreach ($ratings as $rating)
        <div class="alert alert-info" role="alert">
            Calificación: {{ $rating->rating }}
        </div>
        @endforeach
    </div>
    <iframe id="mi-iframe" name="mi-iframe" style="display: none;"></iframe>
    <!-- Formulario para enviar una nueva calificación -->
    <form action="{{ route('admin.rating.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="rating">Calificación:</label>
        <input type="number" class="form-control" name="rating" min="1" max="5" required>
    </div>
    <div class="form-group">
        <label for="comment">Comentario:</label>
        <textarea class="form-control" name="comment" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar Calificación</button>
</form>
</div>
@endsection