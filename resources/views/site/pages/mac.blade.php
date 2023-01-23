@extends('site.layouts.master')
@section('content')
    <div class="page_head" hidden>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>{{ locale() == 'en' ? 'Mac in Education' : 'Mac في التعليم' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li><a href="{{ route('site.apple') }}">
                                {{ locale() == 'en' ? 'Apple Solution' : 'Apple في التعليم' }}</a></li>
                        <li>{{ locale() == 'en' ? 'Mac in Education' : 'Mac في التعليم' }}</li>
                    </ul>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </div>
    <!--End Div-->

    <!--  Section =========================================-->
    <section class="section_img apple_banner" style="background-image: url({{ $content['image'] }})">
        <div class="container">
            <div class="row position-relative">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="30">
                    <img src="{{ surl('images/partners/Apple-Authorised.png') }}" alt="" />
                    <h3>{{ $content['title_' . locale()] }}</h3>
                    <p class="mb-0">
                        {{ $content['description_' . locale()] }}
                    </p>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <!--  Section ==========================================-->
    <section class="apple">
        <div class="container">
            @foreach ($macs['data'] as $mac)
                <div class="row justify-content-center">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="40">
                        <img src="{{ $mac['image'] }}" alt="" />
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="40">
                        <div class="text">
                            <h3>{{ $mac['title_' . locale()] }}</h3>
                            @foreach (explode("\n", $mac['description_' . locale()]) as $item)
                                <p>{{ $item }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--End Row-->
            @endforeach
            <!--End Row-->
        </div>
        <!--End container-->
    </section>
    <!--End Section-->
    <!--  Section  ==========================================-->
    <section class="colored">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>{{ app()->getLocale() == 'en' ? 'Why Zenith Arabia' : 'لماذا سمتية العربية' }}</h3>
                    </div>
                </div>
                @foreach ($whies['data'] as $why)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="60">
                        <div class="reason_item">
                            <img src="{{ $why['image'] }}" alt="" />
                            <h3>{{ $why['title_' . locale()] }}</h3>
                            <p>
                                {{ $why['description_' . locale()] }}
                            </p>
                        </div>
                    </div>
                    <!--End Col-6-->
                @endforeach

            </div>
            <!--End Row-->
        </div>
        <!--End container-->
    </section>
    <!--End Section-->

    <!--  Section==========================================-->
    <section class="steps">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Our Process' : 'دورتنا' }}</h3>
                    </div>
                </div>
                <!--End Col-->
                @php
                    $x = 1;
                @endphp
                @foreach ($processes['data'] as $process)
                    <div class="col-md-6 order{{ $x == 3 ? '4' : '' }}{{ $x == 4 ? '3' : '' }}" data-aos="fade-up"
                        data-aos-delay="60">
                        <div class="step_item order_{{ $x }}">
                            <img src="{{ $process['image'] }}" alt="" />
                            <h3>{{ $process['title_' . locale()] }}</h3>
                            <p>
                                {{ $process['description_' . locale()] }}
                            </p>
                        </div>
                    </div>
                    @php
                        $x++;
                    @endphp
                @endforeach
                <!--End col-->
            </div>
            <!--End Row-->
        </div>
        <!--End container-->
    </section>
    <!--End Section-->
    <!--  Section ==========================================-->
    <section class="colored">
        <div class="container">
            <div class="row justify-content-center">
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
                <div class="col-12">
                    <div class="owl-carousel owl-theme clients_slider">
                        @foreach ($clients['data'] as $client)
                            <div class="item">
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
        <!--End container-->
    </section>
    <!--End Section-->

    <!--  Section==========================================-->
    <section class="support p-0">
        <div class="container-fluid">
            <div class="row position-relative align-items-center justify-content-center">
                <div class="col-lg-6 bc p-0">
                    <img src="{{ surl('images/apple/support.png') }}" alt="" />
                </div>
                <div class="col-lg-6 support_form">
                    <div class="section_title">
                        <h3>{{ locale() == 'en' ? 'Write to our Experts' : 'تواصل مع خبرائنا' }}</h3>
                        <p class="m-0">
                            {{ locale() == 'en' ? 'Want to know more Information on jamf solutions for education?' : 'هل تريد معرفة المزيد من المعلومات حول حلول jamf للتعليم؟' }}
                        </p>
                    </div>
                    <form class="contact_form" method="post" action="{{ route('site.apple.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name"
                                    placeholder="{{ locale() == 'en' ? 'Name' : 'الإسم' }}" />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="school"
                                    placeholder="{{ locale() == 'en' ? 'School Name' : 'إسم المدرسة' }}" />
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email"
                                    placeholder="{{ locale() == 'en' ? 'Email Address' : 'البريد الإلكتروني' }}" />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="phone"
                                    placeholder="{{ locale() == 'en' ? 'Mobile Number' : 'رقم الهاتف' }} " />
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="{{ locale() == 'en' ? 'Your Message' : 'رسالتك' }}" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="link">
                                    <span> {{ locale() == 'en' ? 'Send Message' : 'إرسل رسالتك' }} </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
@push('js')
    <script>
        $(document).on('submit', '.contact_form', function() {
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            form.find(":submit").attr('disabled', true).html(
                "<span>{{ locale() == 'en' ? 'Please wait' : 'برجاء الإنتظار' }} <i class='fa fa-long-arrow-alt-{{ locale() == 'en' ? 'right' : 'left' }}'></i></span>"
            );

            $.ajax({
                url: url,
                method: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    notification("success", response, "fas fa-check");
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    notification("danger", response, "fas fa-times");
                    form.find(":submit").attr('disabled', false).html(
                        "<span>{{ locale() == 'en' ? 'Send Message' : 'إرسل الرسالة' }} <i class='fa fa-long-arrow-alt-{{ locale() == 'en' ? 'right' : 'left' }}'></i></span>"
                    );
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            return false;
        });
    </script>
@endpush
