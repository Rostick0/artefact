<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::all();

        $navigations = [
            [
                'link' => '/',
                'name' => 'Home',
            ],
            [
                'is_active' => true,
                'name' => 'My works',
            ],
        ];

        return view('pages.client.services', [
            'services' => $services,
            'navigations' => $navigations
        ]);
    }

    public function show(int $id): View
    {
        $service = Service::findOrFail($id);

        $navigations = [
            [
                'link' => '/',
                'name' => 'Home',
            ],
            [
                'link' => '/services',
                'name' => 'Services and prices',
            ],
            [
                'is_active' => true,
                'name' => $service?->title,
            ],
        ];

        return view('pages.client.service', [
            'service' => $service,
            'navigations' => $navigations,
        ]);
    }
}
