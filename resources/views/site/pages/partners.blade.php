@extends('site.layouts.master')
@section('content')
    <div class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>{{ locale() == 'en' ? 'Partners' : 'شركاؤنا في النجاح' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li>{{ locale() == 'en' ? 'Partners' : 'شركاؤنا في النجاح' }}</li>
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
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Our Partners' : 'شركاؤنا في النجاح' }}</h3>
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
    <!--  Section ==========================================-->
    <section class="colored">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
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
                <!--End Col-->
                @foreach ($clients['data'] as $client)
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="60">
                        <div class="client_details">
                            <img src="{{ $client['image'] }}" alt="" />
                            <div class="info">
                                <h3>{{ $client['title_' . locale()] }}</h3>
                                <p>
                                    {{ $client['description_' . locale()] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Div-->
                @endforeach
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
