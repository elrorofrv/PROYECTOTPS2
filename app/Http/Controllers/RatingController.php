<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::all(); // Recupera todas las calificaciones
        return view('rating', compact('ratings'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'rating' => 'required|numeric|min:1|max:5',
        'comment' => 'required|string',
    ]);

    $rating = new Rating;
    $rating->user_id = auth()->id(); // Si hay autenticación de usuario
    $rating->rating = $request->input('rating');
    $rating->comment = $request->input('comment');
    $rating->save();
    $rating->user_id = auth()->id(); // Asegúrate de que el usuario esté autenticado

    return redirect()->route('agradecimiento');
}}