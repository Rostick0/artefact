@include('layout.admin.header')

<main class="admin-main">
    @include('layout.admin.aside')
    <div class="admin-main__content">
        @yield('content')
    </div>
</main>

@include('layout.foot')
