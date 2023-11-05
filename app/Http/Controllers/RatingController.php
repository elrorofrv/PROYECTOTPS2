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
        $ratings = Rating::all();
        return view('rating', compact('ratings'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'assessment' => 'required|numeric|min:1|max:5',
            'review' => 'required|string',
        ]);
    
        $rating = new Rating;
        $rating->assessment = $request->input('assessment');
        $rating->review = $request->input('review');
        $rating->users_id = auth()->id(); // Asigna el ID del usuario autenticado
    
        $rating->save();
    
        // Redirigir o mostrar un mensaje después de guardar
        return redirect()->route('agradecimiento');
    }}