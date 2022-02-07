<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug'];
    protected $hidden = ['created_at', 'updated_at','deleted_at','dish_id'];
}
