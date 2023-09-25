<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceItem;
use App\Http\Requests\ServiceItem\StoreServiceItemRequest;
use App\Http\Requests\ServiceItem\UpdateServiceItemRequest;
use App\Utils\ImageDBUtil;
use Illuminate\Contracts\View\View;

class ServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $service_id): View
    {
        return view('pages.admin.service_item_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceItemRequest $request, int $service_id)
    {
        $values = $request->only(['title', 'description']);

        $service_item = ServiceItem::create([
            ...$values,
            'service_id' => $service_id
        ]);

        if ($request->prices) ServicePriceController::store($request->prices, $service_item);

        ImageDBUtil::create($request->file('image'), $service_item);

        return redirect('/admin/service-item/edit/' . $service_item->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceItem $serviceItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        $service_item = ServiceItem::findOrFail($id);

        return view('pages.admin.service_item', [
            'service_item' => $service_item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceItemRequest $request, int $id)
    {
        $service_item = ServiceItem::findOrFail($id);

        $values = $request->only(['title', 'description']);

        $service_item->update($values);

        if ($request->prices) ServicePriceController::store($request->prices, $service_item);
        if ($request->prices_delete) ServicePriceController::destroy($request->prices_delete, $service_item);

        if ($request->hasFile('image')) ImageDBUtil::create($request->file('image'), $service_item);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $service_item = ServiceItem::findOrFail($id);

        ServiceItem::destroy($id);

        return redirect('/admin/service/edit/' . $service_item->service_id);
    }
}
