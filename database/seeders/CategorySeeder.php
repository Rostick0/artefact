<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'All'],
            ['name' => 'Animation'],
            ['name' => 'Interior'],
            ['name' => 'Items'],
            ['name' => 'Modelling'],
            ['name' => 'Panorams'],
            ['name' => 'Exterior'],
        ];

        Category::insert($categories);
    }
}
