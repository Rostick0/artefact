<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Осень',
                'category_id' => 3,
            ],
            [
                'title' => 'Коттедж',
                'category_id' => 6,
            ],
            [
                'title' => 'Спальня',
                'category_id' => 2,
            ],
            [
                'title' => 'Стол',
                'category_id' => 3,
            ],
            [
                'title' => 'Жилой комплекс',
                'category_id' => 3,
            ],
            [
                'title' => 'Детская',
                'category_id' => 2,
            ],
            [
                'title' => 'Panorama',
                'category_id' => 5,
                'description' => '<iframe class="panorams-item__iframe" allowfullscreen="" width="976" height="549" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://anastasiyaust.github.io/Bedroom-/" />'
            ]
        ];

        foreach ($data as $item) {
            Portfolio::create($item);
        }
    }
}
