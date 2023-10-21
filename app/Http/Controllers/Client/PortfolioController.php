<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $portfolios = Portfolio::all();
        $categories = Category::all();

        $navigations = [
            [
                'link' => '/',
                'name' => 'Home',
            ],
            [
                'is_active' => true,
                'name' => 'Portfolio',
            ],
        ];

        return view('pages.client.portfolios', [
            'portfolios' => $portfolios,
            'categories' => $categories,
            'navigations' => $navigations
        ]);
    }

    public function show(int $id): View
    {
        $portfolio = Portfolio::findOrFail($id);

        $navigations = [
            [
                'link' => '/',
                'name' => 'Home',
            ],
            [
                'link' => '/portfolio',
                'name' => 'Portfolio',
            ],
            [
                'is_active' => true,
                'name' => $portfolio->title,
            ],
        ];

        return view('pages.client.portfolio', [
            'portfolio' => $portfolio,
            'navigations' => $navigations
        ]);
    }
}
