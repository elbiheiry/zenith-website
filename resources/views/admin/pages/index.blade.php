@extends('admin.layouts.master')
@section('content')
    <div class="page-content">
        <div class="widget">
            <div class="widget-content">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            {{-- <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="counter">
                                    <i class="fa fa-newspaper"></i>
                                    <div class="counter-cont">
                                        <h3 class="timer" data-to="{{ \App\Models\Message::count() }}" data-speed="1500">
                                            {{ \App\Models\Message::count() }}
                                        </h3>
                                        <div class="count-name">Message</div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100"></div>
    </div>
@endsection
