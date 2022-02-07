<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Http\Resources\dishIngredientResource;
use App\Http\Resources\IngredientResource;
use App\Models\ingredient;
use App\Models\category;
use App\Models\dish;
use App\Models\dish_ingredient;
class searchLivewire extends Component
{
    public function route()
    {
        return Route::get('/searchIngredient', static::class)
            ->name('searchIngredient')
            ->middleware('auth');
    }
    public function render()
    {
        $search_text = $_GET['query'];
        $ingredients = ingredient::where('title', 'LIKE', '%'.$search_text.'%')->get();
        $category = category::where('title', 'LIKE', '%'.$search_text.'%')->get();
        $dish = dish::where('title', 'LIKE', '%'.$search_text.'%')->get();
        $DiIn = dishIngredientResource::collection(dish_ingredient::all());
        $ingredientColl = ingredientResource::collection(ingredient::all());
        if ($search_text == '') {
            return '<h2>No Results</h2>';
        }
        
        return view ('searchIngredient',compact('ingredients','category','dish','DiIn','ingredientColl')); 
        
       
    }
    
}
