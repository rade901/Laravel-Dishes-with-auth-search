<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Models\dish;
use App\Http\Resources\dishResource;
use App\Models\category;
use App\Http\Resources\categoryResource;
use App\Http\Requests\StoredishRequest;
use App\Models\dish_ingredient;
use App\Http\Resources\dishIngredientResource;
use App\Models\ingredient;
use App\Http\Resources\IngredientResource;


class dishLivewire extends Component
{
    public function route()
    {
        return Route::get('/dish', static::class)
            ->name('dish')
            ->middleware('auth');

    }

    public function render()
    {
        $dish = dishResource::collection(dish::paginate(5)->onEachSide(0));
        $category = categoryResource::collection(category::all());
        $ingredients = ingredientResource::collection(ingredient::all());
        $DiIn = dishIngredientResource::collection(dish_ingredient::all());
        return view('dish' , compact('dish', 'category', 'ingredients', 'DiIn',));
            
    }
}