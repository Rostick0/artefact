<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lang\StoreLangRequest;
use App\Http\Requests\Lang\UpdateLangRequest;
use App\Models\Lang;
use Illuminate\Http\Request;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langs = Lang::query();

        $langs = $langs->orderByDesc('id')->paginate(18);

        return view('pages.admin.langs', [
            'langs' => $langs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.lang_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLangRequest $request)
    {
        $values = $request->validated();

        $lang = Lang::create($values);

        return redirect('/admin/lang/edit/' . $lang->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $lang = Lang::findOrFail($id);

        return view('pages.admin.lang', [
            'lang' => $lang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLangRequest $request, int $id)
    {
        $lang = Lang::findOrFail($id);

        $values = $request->validated();

        $lang->update($values);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Lang::destroy($id);

        return redirect('/admin/lang/list');
    }
}
