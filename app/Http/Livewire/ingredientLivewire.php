<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Http\Resources\IngredientResource;
use App\Models\ingredient;


class ingredientLivewire extends Component
{
    public function route()
    {
        return Route::get('/ingredient', static::class)
            ->name('ingredient')
            ->middleware('auth');

    }

    public function render()
    {
        $ingredients = ingredientResource::collection(ingredient::paginate(5));
        return view('ingredient',compact('ingredients'));
            
    }
    
    
}