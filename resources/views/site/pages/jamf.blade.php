@extends('site.layouts.master')
@section('content')
    <div class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>{{ locale() == 'en' ? 'Jamf Education Solutions' : 'حلول التعليم' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li><a href="javascript:;">{{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}</a></li>
                        <li>{{ locale() == 'en' ? 'Jamf Education Solutions' : 'حلول التعليم' }}</li>
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
    <section class="section_img jamf_banner">
        <div class="container">
            <div class="row position-relative">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="30">
                    <img src="{{ surl('images/partners/Apple-Authorised.png') }}" alt="" />
                    <h3>{{ $content['title_' . locale()] }}</h3>
                    <p>
                        {{ $content['description_' . locale()] }}
                    </p>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <!--  Section==========================================-->
    <section class="colored pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <form class="help">
                        <div class="section_title text-center">
                            <h3>{{ locale() == 'en' ? 'Write to our Experts' : 'تواصل مع خبرائنا' }}</h3>
                            <p>
                                {{ locale() == 'en' ? 'Want to know more Information on jamf solutions for education?' : 'هل تريد معرفة المزيد من المعلومات حول حلول jamf للتعليم؟' }}
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    placeholder="{{ locale() == 'en' ? 'Name' : 'الإسم' }}" />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    placeholder="{{ locale() == 'en' ? 'School Name' : 'إسم المدرسة' }}" />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    placeholder="{{ locale() == 'en' ? 'Email Address' : 'البريد الإلكتروني' }}" />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control"
                                    placeholder="{{ locale() == 'en' ? 'Mobile Number' : 'رقم الهاتف' }} " />
                            </div>
                            <div class="col-12">
                                <textarea placeholder="{{ locale() == 'en' ? 'Your Message' : 'رسالتك' }}" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="link">
                                    <span> {{ locale() == 'en' ? 'Send Messgae' : 'إرسل رسالتك' }} </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--End Col-->
            </div>
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'We are the best' : 'نحن الأفضل' }}</h3>
                        <p>
                            @if (locale() == 'en')
                                Empower your Apple users and IT team to succeed with Apple. All
                                the MDM capabilities you need in one package.
                            @else
                                قم بتمكين مستخدمي Apple وفريق تكنولوجيا المعلومات لديك من النجاح مع Apple. الجميع
                                إمكانيات MDM التي تحتاجها في حزمة واحدة.
                            @endif

                        </p>
                    </div>
                </div>
                @foreach ($steps['data'] as $step)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="beat_item">
                            <h3>
                                <img src="{{ $step['image'] }}" alt="" />
                                {{ $step['title_' . locale()] }}
                            </h3>
                            <p>
                                {{ $step['description_' . locale()] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="colored">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Jamf Education Solutions' : 'حلول التعليم' }}</h3>
                    </div>
                </div>
            </div>
            @foreach ($solutions['data'] as $index => $solution)
                <div class="row align-items-center">
                    @if ($index % 2 == 0)
                        <div class="col-lg-6">
                            <div class="about_cont p-0 mid">
                                <img src="{{ surl('images/solutions/jamf_logo.png') }}" alt=""
                                    class="about_icon" />
                                <h2>{{ $solution['title_' . locale()] }}</h2>
                                <p>
                                    {{ $solution['description_' . locale()] }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about_img h_auto">
                                <img src="{{ $solution['image'] }}" alt="" />
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6">
                            <div class="about_img h_auto">
                                <img src="{{ $solution['image'] }}" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about_cont p-0 mid">
                                <img src="{{ surl('images/solutions/jamf_logo.png') }}" alt=""
                                    class="about_icon" />
                                <h2>{{ $solution['title_' . locale()] }}</h2>
                                <p>
                                    {{ $solution['description_' . locale()] }}
                                </p>
                            </div>
                        </div>
                    @endif

                </div>
                <!--End Row-->
            @endforeach

            <!--End Row-->
        </div>
    </section>
@endsection
