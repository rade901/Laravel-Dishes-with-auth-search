<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish_tag extends Model
{
    use HasFactory;
    protected $table = 'dish_tags';
    protected $fillable = ['tag_id', 'dish_id'];
}
