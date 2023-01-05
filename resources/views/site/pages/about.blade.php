@extends('site.layouts.master')
@section('content')
    <div class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>{{ locale() == 'en' ? 'About us' : 'نبذة عنا' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li>{{ locale() == 'en' ? 'About us' : 'نبذة عنا' }}</li>
                    </ul>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </div>
    <!--End Div-->
    <!--  Section ==========================================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about_img" data-aos="fade-up" data-aos-delay="30">
                        <img src="{{ $about['image1'] }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="60">
                    <div class="about_cont p-0">
                        <h2>{{ locale() == 'en' ? 'Zenith Arabia' : 'سمتية العربية' }} </h2>
                        @foreach (explode("\n", $about['description1_' . locale()]) as $item)
                            <p>
                                {{ $item }}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <!--  Section==========================================-->
    <section class="section_img">
        <div class="container">
            <div class="row position-relative align-items-center">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="30">
                    <p>{{ locale() == 'en' ? 'You will most likely know us by looking at our results' : 'ستعرفنا على الأرجح من خلال الاطلاع على نتائجنا' }}
                    </p>
                </div>
                <div class="col-sm-4" data-aos="fade-up" data-aos-delay="60">
                    <div class="counter d-flex align-items-center">
                        <img src="{{ surl('images/about/counter1.png') }}" alt="" />
                        <h3 class="m-0">{{ $about['clients'] }} <span>{{ locale() == 'en' ? 'Clients' : 'عميل' }}</span>
                        </h3>
                    </div>
                </div>
                <!--End col-->
                <div class="col-sm-4" data-aos="fade-up" data-aos-delay="60">
                    <div class="counter d-flex align-items-center">
                        <img src="{{ surl('images/about/counter2.png') }}" alt="" />
                        <h3 class="m-0">{{ $about['projects'] }}
                            <span>{{ locale() == 'en' ? 'Projects' : 'مشروع' }}</span>
                        </h3>
                    </div>
                </div>
                <!--End col-->
                <div class="col-sm-4" data-aos="fade-up" data-aos-delay="60">
                    <div class="counter d-flex align-items-center">
                        <img src="{{ surl('images/about/counter3.png') }}" alt="" />
                        <h3 class="m-0">{{ $about['partners'] }}
                            <span>{{ locale() == 'en' ? 'Technology Partners' : 'شريك في التكنولوجيا' }}</span>
                        </h3>
                    </div>
                </div>
                <!--End col-->
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <!--  Section==========================================-->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="30">
                    <div class="about_cont p-0 mid">
                        <img src="{{ surl('images/about/mission_icon.png') }}" alt="" class="about_icon" />
                        <h2>{{ locale() == 'en' ? 'Our Mission' : 'مهمتنا' }}</h2>
                        <p>
                            {{ $about['description2_' . locale()] }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img h_auto" data-aos="fade-up" data-aos-delay="60">
                        <img src="{{ $about['image2'] }}" alt="" />
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
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img h_auto" data-aos="fade-up" data-aos-delay="60">
                        <img src="{{ $about['image3'] }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="30">
                    <div class="about_cont p-0 mid">
                        <img src="{{ surl('images/about/vision_icon.png') }}" alt="" class="about_icon" />
                        <h2>{{ locale() == 'en' ? 'Our vision' : 'رؤيتنا' }}</h2>
                        <p>
                            {{ $about['description3_' . locale()] }}
                        </p>
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->

    <!--  Section==========================================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about_img h_auto" data-aos="fade-up" data-aos-delay="30">
                        <img src="{{ $about['image4'] }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="60">
                    <div class="about_cont p-0 mid">
                        <img src="{{ surl('images/about/principles_icon.jpg') }}" alt="" class="about_icon" />
                        <h2>{{ locale() == 'en' ? 'Our Principles' : 'قيمنا' }}</h2>
                        <ul class="list">
                            @foreach (explode("\n", $about['description4_' . locale()]) as $item)
                                <li>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
