<!-- Side Menu
        ==========================================-->
<aside class="side-menu">
    <button class="toggle-btn">
        <i class="fa fa-times"></i>
    </button>
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <img src="{{ aurl('images/logo.png') }}" />
    </a>
    <ul>
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                - Dashboard
            </a>
        </li>
    </ul>
    <!--End Ul-->
</aside>
<!--End Aside-->
