@extends('site.layouts.master')
@section('content')
    <div class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>{{ $solution['title_' . locale()] }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li><a href="{{ route('site.solutions') }}">{{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}</a></li>
                        <li>{{ $solution['title_' . locale()] }}</li>
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
    <section class="solution">
        <div class="container">
            @foreach ($solution['contents']['data'] as $content)
                <div class="row justify-content-center">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="40">
                        <img src="{{ $content['image'] }}" alt="" />
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="40">
                        <div class="text">
                            <h3>{{ $content['title_' . locale()] }}</h3>
                            {!! $content['description_' . locale()] !!}
                        </div>
                    </div>
                </div>
                <!--End Row-->
            @endforeach
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
