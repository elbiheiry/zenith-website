@extends('site.layouts.master')
@section('content')
    <div class="page_head" hidden>
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
                    <form class="help contact_form" method="post" action="{{ route('site.apple.store') }}">
                        @csrf
                        <div class="section_title text-center">
                            <h3>{{ locale() == 'en' ? 'Write to our Experts' : 'تواصل مع خبرائنا' }}</h3>
                            <p>
                                {{ locale() == 'en' ? 'Want to know more Information on jamf solutions for education?' : 'هل تريد معرفة المزيد من المعلومات حول حلول jamf للتعليم؟' }}
                            </p>
                        </div>
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
