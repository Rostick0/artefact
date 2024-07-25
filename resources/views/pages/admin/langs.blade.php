@extends('layout.admin.layout')

@section('seo_title', 'Все языки')

@section('content')
    <a class="btn" href="/admin/lang/create">+ Создать</a>
    <div class="admin-items">
        <div class="admin-items__list">
            @foreach ($langs as $lang)
                <a class="admin-item" href="/admin/lang/edit/{{ $lang->id }}">
                    <div class="admin-item__title">{{ $lang->name }}</div>
                </a>
            @endforeach
        </div>
    </div>
    {{ $langs->appends(Request::all())->links('vendor.pagination') }}
@endsection
