<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Models\category;
use App\Http\Resources\categoryResource;


class categoryLivewire extends Component
{
    public function route()
    {
        return Route::get('/category', static::class)
            ->name('category')
            ->middleware('auth');

    }

    public function render()
    {
        $category = categoryResource::collection(category::paginate(5));
        return view('category' , compact('category'));
            
            
    }
}