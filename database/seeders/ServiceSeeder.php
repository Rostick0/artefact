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
                    'title' => 'INTERIOR VISUALIZATION',
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
                    'title' => 'EXTERIOR VISUALIZATION'
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
                    'title' => 'PRODUCT RENDERING',
                    'description' => "Our product rendering service takes your product modelling to the next level by adding lighting, materials, and textures to create a stunning visualization that truly showcases your product"
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
                    'title' => 'MODELLING',
                    'description' => "Our product modelling service is perfect for showcasing your product in a 3D environment. We'll create a realistic and engaging visualization that highlights the key features and benefits of your product."
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
                    'title' => 'ANIMATION'
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
        ];

        foreach ($data as $elem) {
            $service = Service::create($elem['service']);

            if (empty($elem['items'])) continue;

            foreach ($elem['items'] as $item) {
                $service_item = $service->items()->create($item['item']);

                if (empty($item['prices'])) continue;

                foreach ($item['prices'] as $price) {
                    $service_item->prices()->create($price);
                }
            }
        }
    }
}
