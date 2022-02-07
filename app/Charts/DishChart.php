<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\dish;
use App\Models\category;
use App\Models\ingredient;

class DishChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $dish = dish::count();
        $category = category::count();
        $ingredients = ingredient::count();
        
        return Chartisan::build()
        ->labels(['Dishes', 'Categories', 'Ingredients'])
        ->dataset('Dishes', [$dish, $category, $ingredients])
        ->dataset('ingredients', [$ingredients, $ingredients, $ingredients]);
}
}