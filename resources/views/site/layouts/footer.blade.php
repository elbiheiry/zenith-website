<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <h3>{{ locale() == 'en' ? 'Quick Access' : 'روابط سريعة' }}</h3>
                <ul class="quick_links">
                    <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                    <li><a href="{{ route('site.partners') }}">
                            {{ locale() == 'en' ? 'Partners' : 'شركاؤنا في النجاح' }}</a></li>
                    <li><a href="{{ route('site.about') }}"> {{ locale() == 'en' ? 'About us' : 'نبذة عنا' }} </a></li>
                    <li><a href="{{ route('site.contact') }}"> {{ locale() == 'en' ? 'Contact us' : 'إتصل بنا' }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <h3>{{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}</h3>
                <ul class="quick_links">
                    <li>
                        <a
                            href="{{ route('site.it') }}">{{ locale() == 'en' ? 'Information Technology' : 'تكنولوجيا المعلومات' }}</a>
                    </li>
                    <li>
                        <a
                            href="{{ route('site.jamf') }}">{{ locale() == 'en' ? 'Jamf Education Solutions' : 'حلول التعليم' }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <h3>{{ locale() == 'en' ? 'Apple Solution' : 'Apple في التعليم' }}</h3>
                <ul class="quick_links">
                    <li>
                        <a
                            href="{{ route('site.ipad') }}">{{ locale() == 'en' ? 'iPad In Education' : 'ipad في التعليم' }}</a>
                    </li>
                    <li><a
                            href="{{ route('site.mac') }}">{{ locale() == 'en' ? 'Mac in Education' : 'Mac في التعليم' }}</a>
                    </li>
                    <li><a
                            href="{{ route('site.story') }}">{{ locale() == 'en' ? 'Success Stories' : 'قصص النجاح' }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-6">
                <h3>{{ locale() == 'en' ? 'GLOBAL CONTACT' : 'بيانات التواصل' }}</h3>
                <ul class="contact_info">
                    <li>
                        <i class="far fa-envelope"></i>
                        <a href="mailto:{{ $settings['email'] }}">
                            {{ $settings['email'] }}
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <a href="{{ $settings['phone'] }}"> {{ $settings['phone'] }} </a>
                    </li>
                    <li>
                        <i class="fa fa-fax"></i>
                        <a href="tel:{{ $settings['fax'] }}"> {{ $settings['fax'] }} </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid copyrights">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© {{ locale() == 'en' ? 'All Rights Reserved' : 'جميع الحقوق محفوظة' }} Zenith Arabia 2022.</p>

                    <ul>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100032330966914" target="_blank"
                                class="fab fa-facebook-f"></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/zenitharabia?lang=en" target="_blank"
                                class="fab fa-twitter"></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/zenith-arabia/" target="_blank"
                                class="fab fa-linkedin-in"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
