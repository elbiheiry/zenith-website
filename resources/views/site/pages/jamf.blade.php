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
                    <h3>Manage and secure Apple in Education.</h3>
                    <p>
                        Whether you’re offering a 1-to-1 iPad initiative, shared-device
                        model or searching for an alternative to pen and paper assessment
                        formats, Jamf helps schools engage with students in new ways and
                        deliver an active learning environment with iPad, Mac and Apple
                        TV.
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
                            <h3>Write to our Experts</h3>
                            <p>
                                Want to know more Information on jamf solutions for education?
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Name" />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="School Name" />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Email Address" />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Mobile Number " />
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Your Message" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="link">
                                    <span> Send Messgae </span>
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
                        <h3>We are the best</h3>
                        <p>
                            Empower your Apple users and IT team to succeed with Apple. All
                            the MDM capabilities you need in one package.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="beat_item">
                        <h3>
                            <img src="{{ surl('images/solutions/best1.png') }}" alt="" />
                            Deployment
                        </h3>
                        <p>
                            Provide your end users with a fully customizable onboarding
                            experience. Provision and deploy Mac, iPad, iPhone or Apple TV
                            devices seamlessly with the customized workflows.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="beat_item">
                        <h3>
                            <img src="{{ surl('images/solutions/best2.png') }}" alt="" /> Device
                            Management
                        </h3>
                        <p>
                            Configuration profiles, policies and scripts direct your Apple
                            devices to function exactly as needed. Surpass simple
                            troubleshooting by automating management with our patented Smart
                            Groups technology
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="beat_item">
                        <h3>
                            <img src="{{ surl('images/solutions/best3.png') }}" alt="" /> App
                            Management
                        </h3>
                        <p>
                            Streamline app management with bulk purchasing and deployment.
                            Jamf Pro integrates with Apple Business Manager and Apple School
                            Manager, allowing you to assign apps to users or devices
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="beat_item">
                        <h3>
                            <img src="{{ surl('images/solutions/best4.png') }}" alt="" />Inventory
                        </h3>
                        <p>
                            Automatically collect user, hardware, software and security
                            device data or customize inventory specifications. Dynamic Smart
                            Groups keep track of everything for you, including software
                            versions and warranty expiration.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="beat_item">
                        <h3>
                            <img src="{{ surl('images/solutions/best5.png') }}" alt="" /> Self
                            Service
                        </h3>
                        <p>
                            Give your users access to a one-stop shop for trusted apps,
                            company resources and shortcuts for troubleshooting tasks like
                            password resets. Jamf Self Service — a fully customizable,
                            ondemand app store that you control
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="beat_item">
                        <h3>
                            <img src="{{ surl('images/solutions/best6.png') }}" alt="" /> Security
                        </h3>
                        <p>
                            Secure Apple devices by leveraging native security features.
                            Manage device settings and configurations, restrict malicious
                            software and patch your Apple devices without user interaction
                            or physical access to the device.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="colored">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3>Jamf Education Solutions</h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_cont p-0 mid">
                        <img src="{{ surl('images/solutions/jamf_logo.png') }}" alt="" class="about_icon" />
                        <h2>Management Solution for Schools​</h2>
                        <p>
                            The ideal solution for teachers or instructional technologists.
                            Jamf School empowers educators to manage devices from the
                            classroom. Teacher, Parent and Student apps are included in this
                            solution.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img h_auto">
                        <img src="{{ surl('images/solutions/jamf_about1.png') }}" alt="" />
                    </div>
                </div>
            </div>
            <!--End Row-->

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img h_auto">
                        <img src="{{ surl('images/solutions/jamf_about1.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_cont p-0 mid">
                        <img src="{{ surl('images/solutions/jamf_logo.png') }}" alt="" class="about_icon" />
                        <h2>Management Solution for Districts​</h2>
                        <p>
                            Built for IT directors, managers or administrators. Jamf Pro
                            offers a wide variety of Apple management features for Mac,
                            iPad, iPhone and Apple TV.
                        </p>
                    </div>
                </div>
            </div>
            <!--End Row-->

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_cont p-0 mid">
                        <img src="{{ surl('images/solutions/jamf_logo.png') }}" alt="" class="about_icon" />
                        <h2>Jamf Safe Internet</h2>
                        <p>
                            Jamf Safe Internet is a purpose-built content filtering and
                            network threat protection solution to help schools deliver a
                            safe and robust online experience for students — all via a
                            seamless, simple deployment experience that prioritises student
                            privacy.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img h_auto">
                        <img src="{{ surl('images/solutions/jamf_about3.png') }}" alt="" />
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
    </section>
@endsection
