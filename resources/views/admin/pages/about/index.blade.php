@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        About us
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">About us</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                About us
            </div>
            <div class="widget-content">
                <form method="put" action="{{ route('admin.about.update') }}" class="ajax-form">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ $about['image1'] }}" style="height : 100px !important">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>About us Image </label>
                                <input type="file" class="jfilestyle" name="image1" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 650 * 350
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> About us (EN)</label>
                                <textarea type="text" class="form-control" name="description1_en">{{ $about['description1_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> About us (AR)</label>
                                <textarea type="text" class="form-control" name="description1_ar">{{ $about['description1_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> No. of clients</label>
                                <input type="number" class="form-control" name="clients" value="{{ $about['clients'] }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> No. of projects</label>
                                <input type="number" class="form-control" name="projects" value="{{ $about['projects'] }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> No. of partners</label>
                                <input type="number" class="form-control" name="partners" value="{{ $about['partners'] }}">
                            </div>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-6">
                            <img src="{{ $about['image2'] }}" style="height : 100px !important">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Our Mission Image </label>
                                <input type="file" class="jfilestyle" name="image2" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 650 * 350
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Our Mission (EN)</label>
                                <textarea type="text" class="form-control" name="description2_en">{{ $about['description2_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Our Mission (AR)</label>
                                <textarea type="text" class="form-control" name="description2_ar">{{ $about['description2_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-6">
                            <img src="{{ $about['image3'] }}" style="height : 100px !important">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Our Vision Image </label>
                                <input type="file" class="jfilestyle" name="image3" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 650 * 350
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Our Vision (EN)</label>
                                <textarea type="text" class="form-control" name="description3_en">{{ $about['description3_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Our Vision (AR)</label>
                                <textarea type="text" class="form-control" name="description3_ar">{{ $about['description3_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-6">
                            <img src="{{ $about['image4'] }}" style="height : 100px !important">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Our principles Image </label>
                                <input type="file" class="jfilestyle" name="image4" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 650 * 350
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Our principles (EN)</label>
                                <textarea type="text" class="form-control" name="description4_en">{{ $about['description4_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Our principles (AR)</label>
                                <textarea type="text" class="form-control" name="description4_ar">{{ $about['description4_ar'] }}</textarea>
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
