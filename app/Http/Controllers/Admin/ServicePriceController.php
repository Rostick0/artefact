<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePrice;
use App\Http\Requests\StoreServicePriceRequest;
use App\Http\Requests\UpdateServicePriceRequest;

class ServicePriceController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServicePriceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServicePrice $servicePrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServicePrice $servicePrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServicePriceRequest $request, ServicePrice $servicePrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServicePrice $servicePrice)
    {
        //
    }
}
