@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Steps
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Steps</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">edit step</div>
            <div class="widget-content">
                <form method="put" action="{{ route('admin.steps.update', ['id' => $step['id']]) }}" class="ajax-form">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ $step['image'] }}" width="100px; !important">
                            <div class="form-group">
                                <label>Image </label>
                                <input type="file" class="jfilestyle" name="image" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 64 * 64
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Title (EN)</label>
                                <input type="text" class="form-control" name="title_en"
                                    value="{{ $step['title_en'] }}" />
                            </div>
                            <div class="form-group">
                                <label> Title (AR)</label>
                                <input type="text" class="form-control font_ar" name="title_ar"
                                    value="{{ $step['title_ar'] }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label> description (EN)</label>
                                <textarea class="form-control" name="description_en">{{ $step['description_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> description (AR)</label>
                                <textarea class="form-control" name="description_ar">{{ $step['description_ar'] }}</textarea>
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
