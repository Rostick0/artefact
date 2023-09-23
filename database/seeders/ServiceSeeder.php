<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'service' => [
                    'title' => 'INTERIOR VISUALIZATION'
                ]
            ],
            [
                'service' => [
                    'title' => 'EXTERIOR VISUALIZATION'
                ]
            ],
            [
                'service' => [
                    'title' => 'PRODUCT RENDERING'
                ]
            ],
            [
                'service' => [
                    'title' => 'MODELLING'
                ]
            ],
            [
                'service' => [
                    'title' => 'ANIMATION'
                ]
            ],
        ];

        foreach ($data as $item) {
            $service = Service::create($item['service']);
        }
    }
}
