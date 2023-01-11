@extends('site.layouts.master')
@section('content')
    <div class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>{{ locale() == 'en' ? 'Information Technology' : 'تكنولوجيا المعلومات' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li><a href="javascript:;">{{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}</a></li>
                        <li>{{ locale() == 'en' ? 'Information Technology' : 'تكنولوجيا المعلومات' }}</li>
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
    <section class="colored">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Datacenter Designs' : 'تصاميم مراكز البيانات' }}
                        </h3>
                    </div>
                </div>
                <!--End Col-->
                @foreach ($centers['data'] as $center)
                    <div class="col-lg-4 col-12">
                        <div class="block_item">
                            <img src="{{ $center['image'] }}" alt="" />
                            <h3>{{ $center['title_' . locale()] }}</h3>
                        </div>
                    </div>
                @endforeach

            </div>
            <!--End Row-->
            <div class="row">
                <div class="col-12">
                    <div class="logos_wrap">
                        <p>
                            {{ $aspect['description_' . locale()] }}
                        </p>
                        <ul class="col-12 d-flex justify-content-between align-items-center">
                            @foreach ($images['data'] as $image)
                                <li><img src="{{ $image['image'] }}" alt="" /></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @foreach ($steps['data'] as $step)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="sol_feat">
                            <img src="{{ $step['image'] }}" alt="" />
                            <h3>{{ $step['title_' . locale()] }}</h3>
                            <p>
                                {{ $step['description_' . locale()] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <!--  Section ==========================================-->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Backup & Disaster Recovery' : 'النسخ الاحتياطي والتعافي من الكوارث' }}
                        </h3>
                    </div>
                </div>
                @foreach ($backups['data'] as $backup)
                    <div class="col-lg-6">
                        <img src="{{ $backup['image'] }}" alt="" class="img_rad" />
                        <p class="text_p">
                            {{ $backup['description_' . locale()] }}
                        </p>
                    </div>
                @endforeach
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
