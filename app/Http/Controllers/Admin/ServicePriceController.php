<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePrice;
use App\Http\Requests\StoreServicePriceRequest;
use App\Http\Requests\UpdateServicePriceRequest;
use App\Models\ServiceItem;

class ServicePriceController extends Controller
{

    public static function create($prices, ServiceItem $service_item)
    {
        foreach ($prices as $price) {
            $service_item->prices->create([
                'description' => $price->description,
                'price' => $price->price,
                'is_from' => $price->is_from,
            ]);
        }
    }

    public static function edit(ServicePrice $servicePrice)
    {
        //
    }

    public static function destroy($price_ids, ServiceItem $service_item)
    {
        $service_item->prices->whereIn('id', $price_ids)->delete();
    }
}
