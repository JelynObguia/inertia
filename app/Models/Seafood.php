<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seafood extends Model
{
    use HasFactory;
    protected $fillable = ['main_dish', 'dessert', 'beverages', 'price'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
