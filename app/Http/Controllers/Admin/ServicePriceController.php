<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicePrice\StoreServicePriceRequest;
use App\Models\ServicePrice;
use App\Http\Requests\ServicePrice\UpdateServicePriceRequest;
use App\Models\ServiceItem;
use Illuminate\Contracts\View\View;

class ServicePriceController extends Controller
{

    public function create(int $service_item_id): View
    {
        return view('pages.admin.service_price_create');
    }

    public function store(StoreServicePriceRequest $request, int $service_item_id)
    {
        $service_price = ServicePrice::create([
            ...$request->validated(),
            'is_from' => $request->has('is_from') ? 1 : 0,
            'service_item_id' => $service_item_id
        ]);

        return redirect('/admin/service-price/edit/' . $service_price->id);
    }

    public function edit(int $id): View
    {
        $service_price = ServicePrice::findOrFail($id);

        return view('pages.admin.service_price', [
            'service_price' => $service_price
        ]);
    }

    public function update(UpdateServicePriceRequest $request, int $id)
    {
        $service_price = ServicePrice::findOrFail($id);

        $service_price->update([
            ...$request->validated(),
            'is_from' => $request->has('is_from') ? 1 : 0
        ]);

        return back();
    }

    public function destroy(int $id)
    {
        $service_price = ServicePrice::findOrFail($id);

        ServicePrice::destroy($id);

        return redirect('/admin/service-item/edit/' . $service_price->service_item_id);
    }
}
