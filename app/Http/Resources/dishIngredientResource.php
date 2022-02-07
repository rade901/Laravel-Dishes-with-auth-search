<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class dishIngredientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'type'=>'Dish_ingredient',
            'attributes'=>[
                'dish_id'=> $this->dish_id,
                'ingredient_id'=> $this->ingredient_id,
               
            ]
        
        ];
    }
}
