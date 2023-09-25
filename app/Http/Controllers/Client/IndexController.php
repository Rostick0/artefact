<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(): View
    {
        $portfolios = Portfolio::limit(10)->get();
        $services = Service::limit(6)->get();

        return view('pages.client.index', [
            'services' => $services,
            'portfolios' => $portfolios,
        ]);
    }
}
