<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class dishResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
        'id'=> $this->id,
        'type'=>'Dishes',
        'attributes'=>[
            'title'=>$this->title,
            'description'=>$this->description,
            'created'=>$this->created_at->diffForHumans(),
            'category'=>$this->category,
            'ingredients'=>new IngredientResource($this->ingredients),
             
        ]
        
    ];
    }
}
