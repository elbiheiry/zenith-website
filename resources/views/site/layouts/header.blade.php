<header class="w-100 position-fixed">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <a href="{{ route('site.index') }}" class="logo">
                    <img src="{{ surl('images/logo.png') }}" alt="logo" />
                </a>
                <button class="menu-btn icon fa fa-bars" type="button" data-toggle="collapse"
                    data-target="#main-nav"></button>
            </div>
            <!--End Col-12-->
        </div>
        <!--End Row-->
    </div>
    <!--End Container-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav d-flex justify-content-between align-items-center w-100">
                    <li>
                        <a href="{{ route('site.index') }}"
                            class="{{ request()->routeIs('site.index') ? 'active' : '' }}">
                            {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('site.solutions') }}"
                            class="{{ request()->routeIs('site.solutions') || request()->routeIs('site.solution') || request()->routeIs('site.it') || request()->routeIs('site.jamf') ? 'active' : '' }}">
                            {{ locale() == 'en' ? 'Solutions' : 'حلولنا' }} <i class="fa fa-angle-down"></i>
                        </a>
                        <a class="extra" href="#" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a
                                    href="{{ route('site.it') }}">{{ locale() == 'en' ? 'Information Technology' : 'تكنولوجيا المعلومات' }}</a>
                            </li>
                            <li>
                                <a
                                    href="{{ route('site.jamf') }}">{{ locale() == 'en' ? 'Jamf Education Solutions' : 'حلول التعليم' }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('site.apple') }}"
                            class="{{ request()->routeIs('site.apple') || request()->routeIs('site.ipad') || request()->routeIs('site.mac') || request()->routeIs('site.story') ? 'active' : '' }}">
                            {{ locale() == 'en' ? 'Apple Solution' : 'Apple في التعليم' }} <i
                                class="fa fa-angle-down"></i>
                        </a>
                        <a class="extra" href="#" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a
                                    href="{{ route('site.ipad') }}">{{ locale() == 'en' ? 'iPad In Education' : 'ipad في التعليم' }}</a>
                            </li>
                            <li><a
                                    href="{{ route('site.mac') }}">{{ locale() == 'en' ? 'Mac in Education' : 'Mac في التعليم' }}</a>
                            </li>
                            <li><a
                                    href="{{ route('site.story') }}">{{ locale() == 'en' ? 'Success Stories' : 'قصص النجاح' }}</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('site.partners') }}"
                            class="{{ request()->routeIs('site.partners') ? 'active' : '' }}">
                            {{ locale() == 'en' ? 'Partners' : 'شركاؤنا في النجاح' }}</a></li>
                    <li><a href="{{ route('site.about') }}"
                            class="{{ request()->routeIs('site.about') ? 'active' : '' }}">
                            {{ locale() == 'en' ? 'About us' : 'نبذة عنا' }} </a></li>
                    <li><a href="{{ route('site.contact') }}"
                            class="{{ request()->routeIs('site.contact') ? 'active' : '' }}">
                            {{ locale() == 'en' ? 'Contact us' : 'إتصل بنا' }}</a></li>
                    <li><a href=""> {{ locale() == 'en' ? 'Store' : 'المتجر الإلكتروني' }}</a></li>
                    <li>
                        @if (locale() == 'en')
                            <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="flag">
                                <img src="{{ surl('images/sauid.jpg') }}" />
                            </a>
                        @else
                            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="flag">
                                <img src="{{ surl('images/en.png') }}" />
                            </a>
                        @endif

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Nav-->
</header>
