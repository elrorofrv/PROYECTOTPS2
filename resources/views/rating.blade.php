@extends('adminlte::page')

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

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
        <label for="assessment">Calificación:</label>
        <input type="number" class="form-control" name="assessment" min="1" max="5" required>
    </div>
    <div class="form-group">
        <label for="review">Comentario:</label>
        <textarea class="form-control" name="review" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar Calificación</button>
</form>
</div>
@endsection





