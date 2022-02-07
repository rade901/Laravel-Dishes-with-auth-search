<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'category_id'];
    protected $hidden = ['created_at', 'updated_at','deleted_at'];

    public function category()
    {
        return $this->hasOne(category::class,  'id','category_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'dish_tag', 'dish_id','tag_id',);
    }
    public function ingredients()
    {
        return $this->belongsToMany(ingredient::class, 'dish_ingredient',  'dish_id','ingredient_id',);
    }
}
