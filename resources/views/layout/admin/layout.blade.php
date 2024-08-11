@include('layout.admin.header')

<main class="admin-main">
    @include('layout.admin.aside')
    <div class="admin-main__content">
        @if (substr(url()->current(), -strlen('list')) !== 'list')
            @if (url()->previous() !== url()->current())
                <a onclick="javascript:history.back(); return false;" href="#">
                    <strong>⮪ Назад</strong>
                </a>
            @else
                <a onclick="javascript:history.go(-2); return false;" href='#'>
                    <strong>⮪ Назад</strong>
                </a>
            @endif
        @endif
        @yield('content')
    </div>
</main>

@include('layout.foot')
