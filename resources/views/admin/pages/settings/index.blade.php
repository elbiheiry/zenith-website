@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Site settings
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Site Settings</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                Site Settings
            </div>
            <div class="widget-content">
                <form method="put" action="{{ route('admin.settings.update') }}" class="ajax-form">
                    @csrf
                    @method('put')
                    <div class="row">

                        <div class="col-6">
                            <div class="form-group">
                                <label> Address (EN)</label>
                                <input type="text" class="form-control" name="address_en"
                                    value="{{ $settings['address_en'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Address (AR)</label>
                                <input type="text" class="form-control" name="address_ar"
                                    value="{{ $settings['address_ar'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $settings['email'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ $settings['phone'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Fax</label>
                                <input type="text" class="form-control" name="fax" value="{{ $settings['fax'] }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label> Map link</label>
                                <input type="text" class="form-control" name="map" value="{{ $settings['map'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="custom-btn" type="submit">
                            Save Change <i class="fa fa-long-arrow-alt-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--End Page content-->
@endsection
