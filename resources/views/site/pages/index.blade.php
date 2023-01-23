@extends('site.layouts.master')
@section('content')
    <!-- Main Section ==========================================-->
    <section class="main_section" id="home">
        <div id="main_section" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="7000">
            <div class="carousel-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            @foreach ($slides['data'] as $slide)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="intro_cont">
                                        <h2 class="animated" style="animation-delay: 0.5s">
                                            {{ $slide['title_' . locale()] }}
                                        </h2>
                                        <h3 class="animated" style="animation-delay: 0.8s">
                                            {{ $slide['description_' . locale()] }}
                                        </h3>
                                        <div class="w-100 animated" style="animation-delay: 1.2s">
                                            <a href="{{ route('site.solutions') }}" class="link">
                                                <span> {{ locale() == 'en' ? 'Read More' : 'إقرا المزيد' }} </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--End Intro Cont-->
                                </div>
                                <!--End Item-->
                            @endforeach
                        </div>
                        <!--End Col-->
                    </div>
                    <!--End Row-->
                </div>
                <!--End Container-->
            </div>
            <!--End Inner-->
            <ol class="carousel-indicators">
                @foreach ($slides['data'] as $index => $slide)
                    <li data-target="#main_section" data-slide-to="{{ $index }}"
                        class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <button class="carousel-control-prev icon fa fa-long-arrow-alt-left" type="button" data-target="#main_section"
                data-slide="prev"></button>
            <button class="carousel-control-next icon fa fa-long-arrow-alt-right" type="button" data-target="#main_section"
                data-slide="next"></button>
        </div>
        <!--End Slide-->
    </section>
    <!--End Section-->
    <!--  Section ==========================================-->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about_img" data-aos="fade-up" data-aos-delay="30">
                        <img src="{{ $about['image1'] }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="60">
                    <div class="about_cont">
                        <h2>{{ locale() == 'en' ? 'Zenith Arabia' : 'سمتية العربية' }} </h2>
                        @foreach (explode("\n", $about['description1_' . locale()]) as $item)
                            <p>
                                {{ $item }}
                            </p>
                        @endforeach

                        <a href="{{ route('site.about') }}" class="link">
                            <span>{{ locale() == 'en' ? 'Read More' : 'إقرا المزيد' }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <!--  Section==========================================-->
    <section class="colored">
        <div class="container">
            <div class="row">
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title">
                        <h3>{{ locale() == 'en' ? 'Our Clients' : 'عملاؤنا' }}</h3>
                        <p>
                            @if (locale() == 'en')
                                We work closely with a wide range of clients from different
                                sectors and regions across public sector, private sector and
                                local and national governments.
                            @else
                                نحن نعمل بشكل وثيق مع مجموعة واسعة من العملاء من مختلف القطاعات والمناطق عبر القطاع العام
                                والقطاع الخاص والحكومات المحلية والوطنية.
                            @endif

                        </p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($clients['data'] as $client)
                            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="30">
                                <div class="client_item tilt">
                                    <img src="{{ $client['image'] }}" alt="" />
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <!--  Section ==========================================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Partners' : 'شركاؤنا في النجاح' }}</h3>
                    </div>
                </div>
                @foreach ($partners['data'] as $partner)
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="30">
                        <div class="client_item tilt">
                            <img src="{{ $partner['image'] }}" alt="" />
                        </div>
                    </div>
                @endforeach
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <!--  Section==========================================-->
    <section class="section_img">
        <div class="container">
            <div class="row position-relative">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="30">
                    <h3>{{ locale() == 'en' ? 'Your business. Our technology' : 'نطور أعمالكم بأفضل وأحدث التقنيات في مجالكم' }}
                    </h3>
                    <p>
                        @if (locale() == 'en')
                            We work with businesses like yours to achieve your business
                            objectives
                        @else
                            نتولي تنفيذ وتطوير خطة أعمالكم بأحدث التقنيات وبالشراكة مع كبري الشركات العالمية لتحقيق أهدافكم
                        @endif

                    </p>
                    <a href="{{ route('site.contact') }}"
                        class="link"><span>{{ locale() == 'en' ? 'Contact us' : 'إتصل بنا' }}</span></a>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
