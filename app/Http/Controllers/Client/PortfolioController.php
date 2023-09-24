<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $portfolios = Portfolio::all();

        $navigations = [
            [
                'link' => '/',
                'name' => 'Home',
            ],
            [
                'is_active' => true,
                'name' => 'Services and prices',
            ],
        ];

        return view('pages.client.portfolios', [
            'portfolios' => $portfolios,
            'navigations' => $navigations
        ]);
    }

    public function show(int $id): View
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('pages.client.portfolio', [
            'portfolio' => $portfolio
        ]);
    }
}
