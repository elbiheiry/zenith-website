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
        <li
            class="sub-menu {{ request()->routeIs('admin.sliders.index') || request()->routeIs('admin.sliders.edit') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - Home page
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>
                <li
                    class="{{ request()->routeIs('admin.sliders.index') || request()->routeIs('admin.sliders.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.sliders.index') }}">
                        - Slideshow
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="sub-menu {{ request()->routeIs('admin.jamf.solution.index') || request()->routeIs('admin.jamf.solution.edit') || request()->routeIs('admin.jamf.content.index') || request()->routeIs('admin.jamf.content.edit') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - Jamf education solutions
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>
                <li
                    class="{{ request()->routeIs('admin.jamf.content.index') || request()->routeIs('admin.jamf.content.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.jamf.content.index') }}">
                        - content
                    </a>
                </li>
                <li
                    class="{{ request()->routeIs('admin.jamf.solution.index') || request()->routeIs('admin.jamf.solution.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.jamf.solution.index') }}">
                        - solutions
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="sub-menu {{ request()->routeIs('admin.apple.index') || request()->routeIs('admin.apple.edit') || request()->routeIs('admin.ipad.index') || request()->routeIs('admin.ipad.edit') || request()->routeIs('admin.mac.index') || request()->routeIs('admin.mac.edit') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - Apple solutions
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>
                <li
                    class="{{ request()->routeIs('admin.apple.index') || request()->routeIs('admin.apple.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.apple.index') }}">
                        - Apple
                    </a>
                </li>
                <li
                    class="{{ request()->routeIs('admin.ipad.index') || request()->routeIs('admin.ipad.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.ipad.index') }}">
                        - Ipad in education
                    </a>
                </li>
                <li
                    class="{{ request()->routeIs('admin.mac.index') || request()->routeIs('admin.mac.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.mac.index') }}">
                        - Mac in education
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('admin.why.index') || request()->routeIs('admin.why.edit') ? 'active' : '' }}">
            <a href="{{ route('admin.why.index') }}">
                - Why zenith arabia
            </a>
        </li>
        <li
            class="{{ request()->routeIs('admin.processes.index') || request()->routeIs('admin.processes.edit') ? 'active' : '' }}">
            <a href="{{ route('admin.processes.index') }}">
                - Our process
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
