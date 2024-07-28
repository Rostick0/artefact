@extends('layout.client.layout')

@section('seo_title', 'Services and prices')

@section('content')
    <x-banner-nav title="Services and prices" :navigations="$navigations" />
    <div class="services">
        <div class="container">
            <x-services-list :services="[...$services]" />
        </div>
    </div>
@endsection
