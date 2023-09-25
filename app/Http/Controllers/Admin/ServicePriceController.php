<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePrice;
use App\Http\Requests\ServicePrice\UpdateServicePriceRequest;
use App\Models\ServiceItem;
use Illuminate\Contracts\View\View;

class ServicePriceController extends Controller
{

    public static function store($prices, ServiceItem $service_item)
    {
        foreach ($prices as $price) {
            $service_item->prices->create([
                'description' => $price->description,
                'price' => $price->price,
                'is_from' => $price->is_from,
            ]);
        }
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

        $service_price->update($request);

        return back();
    }

    public static function destroy($price_ids, ServiceItem $service_item)
    {
        $service_item->prices->whereIn('id', $price_ids)->delete();
    }
}
