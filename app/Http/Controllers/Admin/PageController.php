<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

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
        //
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
        
        return view('pages.admin.page', compact('page'));
    }

    public function update(UpdatePageRequest $request, int $id)
    {
        $page = Page::findOrFail($id);

        $page->update($request->validated());

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
