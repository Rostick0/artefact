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
                'path' => 'about.blade.php'
            ],
            [
                'path' => 'contacts.blade.php'
            ],
            [
                'path' => 'faq.blade.php'
            ],
            [
                'path' => 'index.blade.php'
            ],
            [
                'path' => 'portfolio.blade.php'
            ],
            [
                'path' => 'portfolios.blade.php'
            ],
            [
                'path' => 'service.blade.php'
            ],
            [
                'path' => 'services.blade.php'
            ]
        ];

        Page::insert($pages);
    }
}
