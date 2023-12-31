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
                    'title' => 'Interior visualization',
                ],
                'image' => [
                    'name' => '3d-vizyalizacia-interyera-gostinoy_0.jpg',
                    'path' => 'upload/image/3d-vizyalizacia-interyera-gostinoy_0.jpg',
                    'width' => 1080,
                    'height' => 810,
                ],
                'items' => [
                    [
                        'item' => [
                            'title' => 'Rooms less than 10 square meters',
                            'description' => "This service is ideal for small spaces such as bathroom or offices. We'll create a visualization that maximises the space available and highlights its potential.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating scene (+ 1 render)',
                                'price' => '240',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '60',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '50',
                                'is_from' => 0,
                            ]
                        ]
                    ],
                    [
                        'item' => [
                            'title' => '10 to 20 square meters',
                            'description' => "Our visualization for medium-sized rooms is perfect for bedrooms, living rooms, and dining areas. We'll create a visualization that showcases your vision for the space and creates a sense of atmosphere.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating scene (+ 1 render)',
                                'price' => '290',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '65',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '50',
                                'is_from' => 0,
                            ],
                        ]
                    ],
                    [
                        'item' => [
                            'title' => 'More than 20 square meters',
                            'description' => "If you're looking to visualize a larger space such as a conference room, ballroom or banquet hall, our large room visualization service is the perfect choice.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating scene (+ 1 render)',
                                'price' => '340',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '70',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '50',
                                'is_from' => 0,
                            ],
                        ]
                    ],
                    [
                        'item' => [
                            'title' => 'Commercial space',
                            'description' => "We understand the importance of making a great impression on potential customers, which is why we offer commercial space visualization services that showcase your business in the best possible way.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating scene (+ 1 render)',
                                'price' => '420',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '90',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '70',
                                'is_from' => 0,
                            ],
                        ]
                    ],
                    [
                        'item' => [
                            'title' => '3D plan',
                            'description' => "Our 3D plan visualization service is ideal for architects and designers who need to present their ideas in a clear and visually engaging way.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating new scene (+ 1 render)',
                                'price' => '200',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'With an already existing scene',
                                'price' => '100',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '50',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '40',
                                'is_from' => 0,
                            ],
                        ]
                    ],
                    [
                        'item' => [
                            'title' => '3D 360 panorama',
                            'description' => "Our 3D 360 panorama service is a great way to showcase a space in an interactive way. We'll create a visualization that allows viewers to explore every corner of the space from different angles. View of your project, giving viewers a unique perspective and a sense of the surrounding environment.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating new scene (+ 1 render)',
                                'price' => '280',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'With an already existing scene',
                                'price' => '60',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '60',
                                'is_from' => 0,
                            ],
                        ]
                    ]
                ]

            ],
            [
                'service' => [
                    'title' => 'Exterior visualization'
                ],
                'image' => [
                    'name' => 'exterior_rendering_3dsmax_render_academy.jpg',
                    'path' => 'upload/image/exterior_rendering_3dsmax_render_academy.jpg',
                    'width' => 1500,
                    'height' => 1000,
                ],
                'items' => [
                    [
                        'item' => [
                            'title' => 'Residential rendering',
                            'description' => "Our residential rendering service is perfect for architects and property developers who want to showcase their project in a realistic and visually engaging way.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating scene (+ 1 render)',
                                'price' => '490',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '140',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '80',
                                'is_from' => 0,
                            ]
                        ]
                    ],
                    [
                        'item' => [
                            'title' => '10 to 20 square meters',
                            'description' => "Our visualization for medium-sized rooms is perfect for bedrooms, living rooms, and dining areas. We'll create a visualization that showcases your vision for the space and creates a sense of atmosphere.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating scene (+ 1 render)',
                                'price' => '290',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '65',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '50',
                                'is_from' => 0,
                            ]
                        ]
                    ],
                    [
                        'item' => [
                            'title' => 'Medium-large exterior rendering',
                            'description' => "Our medium-large exterior rendering service is ideal for visualizing larger projects such as apartment buildings, office complexes or shopping centers.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating scene (+ 1 render)',
                                'price' => '620',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '200',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '90',
                                'is_from' => 0,
                            ]
                        ]
                    ],
                    [
                        'item' => [
                            'title' => 'Aerial rendering',
                            'description' => "Our aerial rendering service provides a bird's eye",
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating scene (+ 1 render)',
                                'price' => '850',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '290',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '100',
                                'is_from' => 0,
                            ]
                        ]
                    ],
                ]
            ],
            [
                'service' => [
                    'title' => 'Product rendering',
                    'description' => "Our product rendering service takes your product modelling to the next level by adding lighting, materials, and textures to create a stunning visualization that truly showcases your product"
                ],
                'image' => [
                    'name' => 'Product-Renders-service-12.jpg',
                    'path' => 'upload/image/Product-Renders-service-12.jpg',
                    'width' => 1920,
                    'height' => 1080,
                ],
                'items' => [
                    [
                        'item' => [
                            'title' => 'Product rendering - scene of interior',
                        ],
                        'prices' => [
                            [
                                'description' => 'Creating scene (+ 1 render)',
                                'price' => '150',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Modeling',
                                'price' => '100',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '70',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '50',
                                'is_from' => 0,
                            ]
                        ]
                    ],
                    [
                        'item' => [
                            'title' => 'Product rendering - white background',
                        ],
                        'prices' => [
                            [
                                'description' => 'Modeling',
                                'price' => '100',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Additional render',
                                'price' => '50',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '50',
                                'is_from' => 0,
                            ]
                        ]
                    ],
                ]
            ],
            [
                'service' => [
                    'title' => 'Modelling',
                    'description' => "Our product modelling service is perfect for showcasing your product in a 3D environment. We'll create a realistic and engaging visualization that highlights the key features and benefits of your product."
                ],
                'image' => [
                    'name' => 'Thanos-Infinity-Gauntlet-3D-model-for-3D-Printing-1.png',
                    'path' => 'upload/image/Thanos-Infinity-Gauntlet-3D-model-for-3D-Printing-1.png',
                    'width' => 784,
                    'height' => 494,
                ],
                'items' => [
                    [
                        'item' => [
                            'title' => '',
                            'description' => "",
                        ],
                        'prices' => [
                            [
                                'description' => 'from',
                                'price' => '100',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'or one houre',
                                'price' => '20',
                                'is_from' => 0
                            ],
                            [
                                'description' => '360 product rotatator ',
                                'price' => '80',
                                'is_from' => 1,
                            ]
                        ]
                    ],
                ]
            ],
            [
                'service' => [
                    'title' => 'Animation'
                ],
                'image' => [
                    'name' => '25c4bdd6-4e09-4b43-8736-9813c9d0e479.jpg',
                    'path' => 'upload/image/25c4bdd6-4e09-4b43-8736-9813c9d0e479.jpg',
                    'width' => 800,
                    'height' => 450,
                ],
                'items' => [
                    [
                        'item' => [
                            'description' => "Realistic: Our realistic animation service is perfect for showcasing a new product or presenting an architectural project in an engaging and dynamic way.",
                        ],
                        'prices' => [
                            [
                                'description' => 'Photorealistic animation in sec',
                                'price' => '60',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '70',
                                'is_from' => 0,
                            ]
                        ]
                    ],
                    [
                        'item' => [
                            'description' => "Non-realistic: Our non-realistic animation service is suitable if you want to show the work process and don't care about being realistic..",
                        ],
                        'prices' => [
                            [
                                'description' => 'Non-realistic in min',
                                'price' => '150',
                                'is_from' => 1,
                            ],
                            [
                                'description' => 'Revision',
                                'price' => '40',
                                'is_from' => 0,
                            ]
                        ]
                    ],
                ]
            ],
            [
                'service' => [
                    'title' => 'Panorama',
                    'description' => '<iframe class="panorams-item__iframe" allowfullscreen="" width="976" height="549" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://anastasiyaust.github.io/Bedroom-/" />'
                ],
                'image' => [
                    'name' => 'Screenshot_458.jpg',
                    'path' => 'upload/image/Screenshot_458.jpg',
                    'width' => 800,
                    'height' => 450,
                ],
            ],
        ];

        foreach ($data as $elem) {
            $service = Service::create($elem['service']);
            $service->image()->create($elem['image']);

            if (empty($elem['items'])) continue;

            foreach ($elem['items'] as $item) {
                $service_item = $service->items()->create($item['item']);
                $service_item->image()->create([
                    'name' => 'Screenshot_154.jpg',
                    'path' => 'upload/image/Screenshot_154.jpg',
                    'width' => 329,
                    'height' => 349,
                ]);

                if (empty($item['prices'])) continue;

                foreach ($item['prices'] as $price) {
                    $service_item->prices()->create($price);
                }
            }
        }
    }
}
