<aside class="admin-aside">
    <nav class="admin-aside__nav">
        <a class="admin-aside__nav_link{{ Request::segment(2) === 'service' ? ' _active' : '' }}"
            href="/admin/service/list">Услуги</a>
        <a class="admin-aside__nav_link{{ Request::segment(2) === 'portfolio' ? ' _active' : '' }}"
            href="/admin/portfolio/list">Портфолио</a>
    </nav>
</aside>
