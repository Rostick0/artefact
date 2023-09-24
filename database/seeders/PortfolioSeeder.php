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
                'portfolio' => [
                    'title' => 'Осень',
                    'category_id' => 3,
                ],
                'image' => [
                    
                    'name' => 'Screenshot_153.jpg',
                    'path' => 'upload/image/Screenshot_153.jpg',
                    'width' => 1080,
                    'height' => 810,
                ]
            ],
            [
                'portfolio' => [
                    'title' => 'Коттедж',
                    'category_id' => 6,
                ],
                'image' => [
                    
                    'name' => 'Screenshot_4.jpg',
                    'path' => 'upload/image/Screenshot_4.jpg',
                    'width' => 1164,
                    'height' => 868,
                ]
            ],
            [
                'portfolio' => [
                    'title' => 'Спальня',
                    'category_id' => 2,
                ],
                'image' => [
                    
                    'name' => 'Screenshot_6.jpg',
                    'path' => 'upload/image/Screenshot_6.jpg',
                    'width' => 1165,
                    'height' => 818,
                ]
            ],
            [
                'portfolio' => [
                    'title' => 'Стол',
                    'category_id' => 3,
                ],
                'image' => [
                    
                    'name' => 'Screenshot_3.jpg',
                    'path' => 'upload/image/Screenshot_3.jpg',
                    'width' => 873,
                    'height' => 757,
                ]
            ],
            [
                'portfolio' => [
                    'title' => 'Жилой комплекс',
                    'category_id' => 3,
                ],
                'image' => [
                    
                    'name' => 'Screenshot_7.jpg',
                    'path' => 'upload/image/Screenshot_7.jpg',
                    'width' => 1156,
                    'height' => 810,
                ]
            ],
            [
                'portfolio' => [
                    'title' => 'Детская',
                    'category_id' => 2,
                ],
                'image' => [
                    
                    'name' => 'Screenshot_8.jpg',
                    'path' => 'upload/image/Screenshot_8.jpg',
                    'width' => 867,
                    'height' => 819,
                ]
            ],
            [
                'portfolio' => [
                    'title' => 'Panorama',
                    'category_id' => 5,
                    'description' => '<iframe class="panorams-item__iframe" allowfullscreen="" width="976" height="549" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://anastasiyaust.github.io/Bedroom-/" />'
                ],
                'image' => [
                    
                    'name' => 'Screenshot_458.jpg',
                    'path' => 'upload/image/Screenshot_458.jpg',
                    'width' => 1209,
                    'height' => 657,
                ]
            ]
        ];

        foreach ($data as $item) {
            $portfolio = Portfolio::create($item['portfolio']);

            $portfolio->image()->create([
                ...$item['image'],
                // 'type_id' => $portfolio->id
            ]);
        }
    }
}
