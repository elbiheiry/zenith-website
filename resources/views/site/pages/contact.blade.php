@extends('site.layouts.master')
@section('content')
    <div class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3>{{ locale() == 'en' ? 'Contact us' : 'إتصل بنا' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li>{{ locale() == 'en' ? 'Contact us' : 'إتصل بنا' }}</li>
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
    <section class="colored contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 contact_details">
                    <h3>{{ locale() == 'en' ? 'GLOBAL CONTACT' : 'بيانات التواصل' }}</h3>
                    <ul class="contact_info">
                        <li>
                            <i class="fa fa-map-marker-alt"></i>
                            <a href="javascript:void(0)">
                                {{ $settings['address_' . locale()] }}
                            </a>
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:{{ $settings['email'] }}">
                                {{ $settings['email'] }}
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:{{ $settings['phone'] }}"> {{ $settings['phone'] }}</a>
                        </li>
                    </ul>
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100032330966914"
                                class="facebook_bc fab fa-facebook-f" target="_blank"></a>
                        </li>

                        <li>
                            <a href="https://twitter.com/zenitharabia?lang=en" class="twitter_bc fab fa-twitter"
                                target="_blank"></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/zenith-arabia/" class="linkedin_bc fab fa-linkedin-in"
                                target="_blank"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 contact_form">
                    <form class="contact_form" method="post" action="{{ route('site.contact.store') }}">
                        @csrf
                        <h3>{{ locale() == 'en' ? 'Get In Touch' : 'تواصل معنا' }}</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first_name"
                                        placeholder="{{ locale() == 'en' ? 'First name' : 'الإسم الاول' }}" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last_name"
                                        placeholder="{{ locale() == 'en' ? 'Last name' : 'الإسم الأخير' }}" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="{{ locale() == 'en' ? 'Email address' : 'البريد الإلكتروني' }}" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="department">
                                        <option value="0">{{ locale() == 'en' ? 'Choose department' : 'إختر القسم' }}
                                        </option>
                                        <option value="IT Support">
                                            {{ locale() == 'en' ? 'IT Support' : 'دعم تكنولوجيا المعلومات' }}</option>
                                        <option value="Sales support">
                                            {{ locale() == 'en' ? 'Sales support' : 'دعم المبيعات' }}</option>
                                        <option value="Technical support">
                                            {{ locale() == 'en' ? 'Technical support' : 'دعم فني ' }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="{{ locale() == 'en' ? 'Your Message' : 'رسالتك' }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="link" type="submit">
                            <span>{{ locale() == 'en' ? 'Send Message' : 'إرسل الرسالة' }} <i
                                    class="fa fa-long-arrow-alt-right"></i></span>
                        </button>
                    </form>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <!--  Section ==========================================-->
    <section class="contact">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($regions['data'] as $region)
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="contact_details inner_contact">
                            <h3>{{ $region['name_' . locale()] }}</h3>
                            <ul class="contact_info">
                                <li>
                                    <i class="far fa-user"></i>
                                    <a href="javascript:void(0)"> {{ $region['username_' . locale()] }} </a>
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:{{ $region['email'] }}">
                                        {{ $region['email'] }}
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:{{ $region['phone'] }}"> {{ $region['phone'] }} </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <iframe src="{{ $settings['map'] }}" width="100%" height="580" style="border: 0; margin-bottom: -8px"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
