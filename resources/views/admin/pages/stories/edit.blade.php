@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Success stories
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Success stories</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title"> Success stories</div>
            <div class="widget-content">
                <form method="put" action="{{ route('admin.stories.update', ['id' => $story['id']]) }}" class="ajax-form">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label> Title (EN)</label>
                                <input type="text" class="form-control" name="title_en"
                                    value="{{ $story['title_en'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Title (AR)</label>
                                <input type="text" class="form-control font_ar" name="title_ar"
                                    value="{{ $story['title_ar'] }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Link</label>
                                <input type="text" class="form-control" name="link" value="{{ $story['link'] }}" />
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
