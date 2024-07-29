<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $pages = Page::all();

        return view('pages.admin.pages', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    public function edit(int $id)
    {
        $page = Page::findOrFail($id);
        $content = File::get(resource_path('views/pages/client/' . $page->path . '.blade.php'));

        return view('pages.admin.page', compact('page', 'content'));
    }

    public function update(UpdatePageRequest $request, int $id)
    {
        $page = Page::findOrFail($id);

        $page->update(
            $request->only([
                'seo_title',
                'seo_description',
                'seo_keywords',
            ])
        );

        File::put(
            resource_path('views/pages/client/' . $page->path . '.blade.php'),
            '@extends("layout.client.layout")
            @section("seo_title", ' . $request->seo_title . ')
            @section("seo_description", ' . $request->seo_description . ')
            @section("seo_keywords", ' . $request->seo_keywords . ')
            
            @section(' . "'content'" . ')
            ' . htmlspecialchars_decode($request->content) . '
            @endsection'
        );

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(int $id)
    // {
    //     //
    // }
}
