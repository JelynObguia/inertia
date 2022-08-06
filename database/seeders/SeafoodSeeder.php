<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seafood;

class SeafoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seafoods = [
            [
                'main_dish'=>'Buttered Shrimp',
                'dessert' => 'Salad',
                'beverages' => 'Wine',
                'price' => '500',
            ],  
            [
                'main_dish'=>'Calamares',
                'dessert' => 'Cake',
                'beverages' => 'Softdrinks',
                'price' => '400',
            ]
        ];

        foreach($seafoods as $s) {
            Seafood::create($s);
        }
    }
}
