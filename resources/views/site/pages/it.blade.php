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
                        <h3>Datacenter Designs</h3>
                    </div>
                </div>
                <!--End Col-->
                <div class="col-lg-4 col-12">
                    <div class="block_item">
                        <img src="{{ surl('images/solutions/server.png') }}" alt="" />
                        <h3>Server Hardware</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="block_item">
                        <img src="{{ surl('images/solutions/dc_networking.png') }}" alt="" />
                        <h3>DC Networking</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="block_item">
                        <img src="{{ surl('images/solutions/storage.jpg') }}" alt="" />
                        <h3>Storage</h3>
                    </div>
                </div>
            </div>
            <!--End Row-->
            <div class="row">
                <div class="col-12">
                    <div class="logos_wrap">
                        <p>
                            Data center facilities consulting services that deliver hybrid
                            infrastructure-ready data centers as an integrated aspect of IT
                            strategy.
                        </p>
                        <ul class="col-12 d-flex justify-content-between align-items-center">
                            <li><img src="{{ surl('images/solutions/logo1.jpg') }}" alt="" /></li>
                            <li><img src="{{ surl('images/solutions/logo2.jpg') }}" alt="" /></li>
                            <li><img src="{{ surl('images/solutions/logo3.jpg') }}" alt="" /></li>
                            <li><img src="{{ surl('images/solutions/logo4.jpg') }}" alt="" /></li>
                            <li><img src="{{ surl('images/solutions/logo5.jpg') }}" alt="" /></li>
                            <li><img src="{{ surl('images/solutions/logo6.jpg') }}" alt="" /></li>
                            <li><img src="{{ surl('images/solutions/logo7.jpg') }}" alt="" /></li>
                            <li><img src="{{ surl('images/solutions/logo8.jpg') }}" alt="" /></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="sol_feat">
                        <img src="{{ surl('images/solutions/planning.png') }}" alt="" />
                        <h3>Planning</h3>
                        <p>
                            We perform a thorough analysis of your data infrastructure
                            requirements
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="sol_feat">
                        <img src="{{ surl('images/solutions/design.png') }}" alt="" />
                        <h3>Designing</h3>
                        <p>
                            Our expert architects will design a data center based on the
                            proposed layout
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="sol_feat">
                        <img src="{{ surl('images/solutions/construction.png') }}" alt="" />
                        <h3>Construction</h3>
                        <p>
                            Our team will ensure that all stages of construction are
                            well-managed
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="sol_feat">
                        <img src="{{ surl('images/solutions/consultation.png') }}" alt="" />
                        <h3>Consultation</h3>
                        <p>
                            We provide ongoing support long after the project is completed
                        </p>
                    </div>
                </div>
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
                        <h3>Backup & Disaster Recovery</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ surl('images/solutions/veeam.png') }}" alt="" class="img_rad" />
                    <p class="text_p">
                        Veeam Backup & Replication is a data protection and disaster
                        recovery solution for virtual environments of any size. It
                        provides fast, flexible and reliable recovery of virtualized
                        applications and data.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ surl('images/solutions/veeam2.png') }}" alt="" class="img_rad" />
                    <p class="text_p">
                        It also features data center functions including tape support and
                        snapshot storage integration, along with integration with key
                        deduplication backup target appliances.
                    </p>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
