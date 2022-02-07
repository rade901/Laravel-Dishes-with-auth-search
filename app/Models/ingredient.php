<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredient extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug'];
    protected $hidden = ['created_at', 'updated_at','pivot','ingredient_id','deleted_at','dish_id'];
}
