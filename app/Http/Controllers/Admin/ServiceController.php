<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Utils\ImageDBUtil;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $services = Service::with([]);

        if ($request->title) $services->where('title', 'LIKE', '%' . $request->title . '%');

        $services = $services->paginate(18);

        return view('pages.admin.services', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.admin.service_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $values = $request->only(['title', 'description']);

        $service = Service::create($values);

        if ($request->hasFile('image')) ImageDBUtil::create($request->file('image'), $service);

        return redirect('/admin/service/edit/' . $service->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        $service = Service::findOrFail($id);

        return view('pages.admin.service', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, int $id)
    {
        $service = Service::findOrFail($id);

        $values = $request->only(['title', 'description']);

        $service->update($values);

        if ($request->hasFile('image')) ImageDBUtil::updateOne($request->file('image'), $service);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Service::destroy($id);

        return redirect('/admin/service/list');
    }
}
