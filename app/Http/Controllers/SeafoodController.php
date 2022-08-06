<?php

namespace App\Http\Controllers;

use App\Models\Seafood;
use Illuminate\Http\Request;

class SeafoodController extends Controller
{
    public function index() {
        $seafoods = Seafood::get();

        return inertia('Seafood',[
            'seafoods' => $seafoods
        ]);
    }
}
