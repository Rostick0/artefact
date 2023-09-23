@extends('layout.client.layout')

@section('content')
    <x-banner-nav title="Panorams" :navigations="$navigations" />
    <section class="panorams">
        <div class="container">
            <h1 class="title-section panorams__title-section">Panorams</h1>
            <div class="panorams__item panorams-item">
                <div class="panorams-item__title">Heading</div>
                <div class="panorams-item__view">
                    <iframe class="panorams-item__iframe" allowfullscreen="" width="976" height="549" style="border:0;"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        src="https://anastasiyaust.github.io/Bedroom-/" />
                </div>
            </div>
        </div>
    </section>
@endsection
