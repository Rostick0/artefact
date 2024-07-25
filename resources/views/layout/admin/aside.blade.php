<aside class="admin-aside">
    <nav class="admin-aside__nav">
        <a class="admin-aside__nav_link{{ Request::segment(2) === 'service' ? ' _active' : '' }}"
            href="/admin/service/list">Услуги</a>
        <a class="admin-aside__nav_link{{ Request::segment(2) === 'portfolio' ? ' _active' : '' }}"
            href="/admin/portfolio/list">Портфолио</a>
        <a class="admin-aside__nav_link{{ Request::segment(2) === 'page' ? ' _active' : '' }}"
            href="/admin/page/list">Страницы</a>
        <a class="admin-aside__nav_link{{ Request::segment(2) === 'article' ? ' _active' : '' }}"
            href="/admin/article/list">Статьи</a>
        <a class="admin-aside__nav_link{{ Request::segment(2) === 'lang' ? ' _active' : '' }}"
            href="/admin/lang/list">Языки</a>
    </nav>
</aside>
