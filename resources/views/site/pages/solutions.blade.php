@extends('site.layouts.master')
@section('content')
    <div class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>{{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li>{{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}</li>
                    </ul>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </div>
    <!--End Div-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}</h3>
                    </div>
                </div>
                @foreach ($solutions['data'] as $solution)
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="60">
                        <div class="sol_item">
                            <img src="{{ $solution['image'] }}" alt="" />
                            <h2>{{ $solution['title_' . locale()] }}</h2>
                            <p>
                                {{ $solution['brief_' . locale()] }}
                            </p>
                            <a href="{{ $solution['link'] != null ? $solution['link'] : route('site.solution', ['slug' => $solution['slug']]) }}"
                                class="link mt-15">
                                <span> {{ locale() == 'en' ? 'Read More' : 'إقرا المزيد' }} </span>
                            </a>
                        </div>
                        <!--End Div-->
                    </div>
                @endforeach
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
    </section>
@endsection
