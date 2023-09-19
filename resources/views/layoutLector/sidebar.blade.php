<aside id="sidebar-wrapper" style="background-color: #471D7C;">
    <div class="sidebar-brand">
        <img class="navbar-brand-full app-header-logo" src="{{ asset('img/logo.png') }}" width="65"
             alt="Infyom Logo">
        <a href="{{ url('/LectorBlogs') }}"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/LectorBlogs') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/logo.png') }}" width="45px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layoutLector.menu')
    </ul>
</aside>
