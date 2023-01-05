<!DOCTYPE html>
<html lang="{{ locale() }}" dir="{{ locale() == 'en' ? 'ltr' : 'rtl' }}">

@include('site.layouts.head')

<body>
    <!-- Mouse Cursor
    ==========================================-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Loading
    =============================-->
    <div class="loading">
        <div class="load_cont">
            <img src="{{ surl('images/logo.png') }}" alt="" />
            <div class="shap">
                <span></span>
            </div>
        </div>
    </div>
    <!-- Header
    ==========================================-->
    @include('site.layouts.header')
    @yield('content')
    <!-- Footer
    ==========================================-->
    @include('site.layouts.footer')
    <a href="#home" class="up_btn icon">
        <i class="fa fa-angle-up"></i>
    </a>
    @include('site.layouts.scripts')
</body>

</html>
