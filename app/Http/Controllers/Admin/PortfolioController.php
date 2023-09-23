<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Http\Requests\Portfolio\StorePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.portfolios');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.portfolio_create');
    }


    public function store(StorePortfolioRequest $request)
    {
        // return redirect()->route();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $portfolio= Portfolio::findOrFail($id);

        return view('pages.admin.portfolio', [
            'portfolio' => $portfolio
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Portfolio::destroy($id);

        return back();
    }
}
