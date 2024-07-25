@extends('layout.client.layout')
@section('seo_title', 'Contacts')

@section('content')
    <div class="contacts">
        <div class="container">
            <h1 class="title contacts__title">ARTEFACT</h1>
            <div class="contacts__flex">
                <div class="contacts__info">
                    <div class="contacts__info_item">
                        <div class="contacts__info_icon">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <a class="contacts__info_link">info@artefact.guru</a>
                    </div>
                    <div class="contacts__info_item">
                        <div class="contacts__info_icon">
                            <span class="icon fas fa-map-marker-alt"></span>
                        </div>
                        <a class="contacts__info_link">Prague, Korunni 2569/108</a>
                    </div>
                    <div class="contacts__info_item">Fyzická osoba zapsaná v živnostenském rejstříku</div>
                </div>
                <x-contact-form />
            </div>
        </div>
    </div>
@endsection
