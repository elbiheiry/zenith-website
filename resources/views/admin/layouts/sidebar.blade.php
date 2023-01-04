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

        <li class="{{ request()->routeIs('admin.settings.index') ? 'active' : '' }}">
            <a href="{{ route('admin.settings.index') }}">
                - Site settings
            </a>
        </li>
        <li class="{{ request()->routeIs('admin.about.index') ? 'active' : '' }}">
            <a href="{{ route('admin.about.index') }}">
                - About us
            </a>
        </li>
        <li class="{{ request()->routeIs('admin.partners.index') ? 'active' : '' }}">
            <a href="{{ route('admin.partners.index') }}">
                - Our partners
            </a>
        </li>
        <li
            class="{{ request()->routeIs('admin.clients.index') || request()->routeIs('admin.clients.edit') ? 'active' : '' }}">
            <a href="{{ route('admin.clients.index') }}">
                - Our clients
            </a>
        </li>
        <li
            class="{{ request()->routeIs('admin.regions.index') || request()->routeIs('admin.regions.edit') ? 'active' : '' }}">
            <a href="{{ route('admin.regions.index') }}">
                - Regions
            </a>
        </li>
        <li
            class="{{ request()->routeIs('admin.messages.index') || request()->routeIs('admin.messages.show') ? 'active' : '' }}">
            <a href="{{ route('admin.messages.index') }}">
                - Messages
            </a>
        </li>
    </ul>
    <!--End Ul-->
</aside>
<!--End Aside-->
