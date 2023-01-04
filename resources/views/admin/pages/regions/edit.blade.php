@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        regions
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">regions</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title"> regions</div>
            <div class="widget-content">
                <form method="put" action="{{ route('admin.regions.update', ['id' => $region['id']]) }}"
                    class="ajax-form">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label> Name (EN)</label>
                                <input type="text" class="form-control" name="name_en"
                                    value="{{ $region['name_en'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Name (AR)</label>
                                <input type="text" class="form-control font_ar" name="name_ar"
                                    value="{{ $region['name_ar'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Username (EN)</label>
                                <input type="text" class="form-control" name="username_en"
                                    value="{{ $region['username_en'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Username (AR)</label>
                                <input type="text" class="form-control font_ar" name="username_ar"
                                    value="{{ $region['username_ar'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Location (EN)</label>
                                <input type="text" class="form-control" name="location_en"
                                    value="{{ $region['location_en'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Location (AR)</label>
                                <input type="text" class="form-control font_ar" name="location_ar"
                                    value="{{ $region['location_ar'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Box (EN)</label>
                                <input type="text" class="form-control" name="box_en" value="{{ $region['box_en'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Box (AR)</label>
                                <input type="text" class="form-control font_ar" name="box_ar"
                                    value="{{ $region['box_ar'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $region['email'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ $region['phone'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Fax</label>
                                <input type="text" class="form-control" name="fax" value="{{ $region['fax'] }}">
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
            <!--End Widget-content-->
        </div>
    </div>
    <!--End Page content-->
@endsection
