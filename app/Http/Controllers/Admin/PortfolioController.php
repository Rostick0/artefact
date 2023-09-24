<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Http\Requests\Portfolio\StorePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;
use App\Utils\ImageDBUtil;
use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('pages.admin.portfolios');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.admin.portfolio_create');
    }


    public function store(StorePortfolioRequest $request)
    {
        $values = $request->only(['title', 'description']);

        $portfolio = Portfolio::create($values);

        ImageDBUtil::create($request->file('image'), $portfolio);

        return redirect('/admin/portfolio/edit/' . $portfolio->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('pages.admin.portfolio', [
            'portfolio' => $portfolio
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, int $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $values = $request->only(['title', 'description']);

        $portfolio->update($values);

        if ($request->hasFile('image')) ImageDBUtil::create($request->file('image'), $portfolio);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Portfolio::destroy($id);

        return redirect('/admin/portfolio/list');
    }
}
