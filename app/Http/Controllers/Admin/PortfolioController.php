<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Http\Requests\Portfolio\StorePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;
use App\Models\Category;
use App\Utils\FileDBUtil;
use App\Utils\ImageDBUtil;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $portfolios = Portfolio::query();

        if ($request->title) $portfolios->where('title', 'LIKE', '%' . $request->title . '%');
        if ($request->category_id) $portfolios->where('category_id', '=', $request->category_id);

        $portfolios = $portfolios->orderByDesc('id')->paginate(18);
        $categories = Category::all();

        return view('pages.admin.portfolios', [
            'portfolios' => $portfolios,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();

        return view('pages.admin.portfolio_create', [
            'categories' => $categories,
        ]);
    }


    public function store(StorePortfolioRequest $request)
    {
        // dd($request->file('video')[0]->getClientMimeType());

        $values = $request->only(['title', 'description', 'category_id']);

        $portfolio = Portfolio::create($values);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                ImageDBUtil::create($image, $portfolio);
            }
        }

        if ($request->hasFile('video')) {
            foreach ($request->file('video') as $video) {
                FileDBUtil::create($video, $portfolio);
            }
        }

        return redirect('/admin/portfolio/edit/' . $portfolio->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        $portfolio = Portfolio::findOrFail($id);
        $categories = Category::all();

        return view('pages.admin.portfolio', [
            'portfolio' => $portfolio,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, int $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $values = $request->only(['title', 'description', 'category_id']);

        $portfolio->update($values);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                ImageDBUtil::create($image, $portfolio);
            }
        }

        if ($request->image_delete) {
            ImageDBUtil::delete([...$request->image_delete], $portfolio);
        }

        if ($request->hasFile('video')) {
            foreach ($request->file('video') as $file) {
                FileDBUtil::create($file, $portfolio);
            }
        }

        if ($request->file_delete) {
            FileDBUtil::delete([...$request->file_delete], $portfolio);
        }

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
