@extends('site.layouts.master')
@section('content')
    <div class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>{{ locale() == 'en' ? 'Success Stories' : 'قصص النجاح' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li><a href="javascript:;"> {{ locale() == 'en' ? 'Apple Solution' : 'Apple في التعليم' }}</a></li>
                        <li>{{ locale() == 'en' ? 'Success Stories' : 'قصص النجاح' }}</li>
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
            <div class="row justify-content-center">
                @foreach ($stories['data'] as $story)
                    <div class="col-lg-6">
                        <h2>{{ $story['title_' . locale()] }}</h2>
                        <iframe src="{{ $story['link'] }}" seamless="seamless" scrolling="no" allowfullscreen=""
                            allow="autoplay; clipboard-read; clipboard-write" width="100%" height="480"
                            frameborder="0"></iframe>
                    </div>
                @endforeach
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
