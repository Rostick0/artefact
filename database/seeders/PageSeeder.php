<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'path' => 'about'
            ],
            [
                'path' => 'contacts'
            ],
            [
                'path' => 'faq'
            ],
            [
                'path' => 'index'
            ],
            [
                'path' => 'portfolio'
            ],
            [
                'path' => 'portfolios'
            ],
            [
                'path' => 'service'
            ],
            [
                'path' => 'services'
            ]
        ];

        Page::insert($pages);
    }
}
