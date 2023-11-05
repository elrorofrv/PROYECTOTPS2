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
            'assessment' => 'required|numeric|min:1|max:5',  // Coincide con la columna 'assessment' en tu base de datos
            'review' => 'required|string',                 // Coincide con la columna 'review' en tu base de datos
        ]);
    
        $rating = new Rating;
        $rating->assessment = $request->input('assessment');
        $rating->review = $request->input('review');
        $rating->users_id = auth()->id();  // Asegúrate de usar el nombre correcto de la columna de usuario en tu base de datos
    
        $rating->save();
    
        return redirect()->route('agradecimiento');
    }}
    