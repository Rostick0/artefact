@include('layout.admin.header')

<main class="admin-main">
    @include('layout.admin.aside')
    <div class="admin-main__content">
        @if (substr(url()->current(), -strlen('list')) !== 'list' && url()->previous() !== url()->current())
            <a class="admin-main__back" href="{{ url()->previous() }}">
                <strong>⮪ Назад</strong>
            </a>
        @endif
        @yield('content')
    </div>
</main>

@include('layout.foot')
