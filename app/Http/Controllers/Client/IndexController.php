<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(): View
    {
        $services = Service::limit(6);

        return view('pages.client.index', [
            'services' => $services
        ]);
    }
}
