@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Regions
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Regions</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title"> Add region</div>
            <div class="widget-content">
                <form method="post" action="{{ route('admin.regions.store') }}" class="ajax-form">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label> Name (EN)</label>
                                <input type="text" class="form-control" name="name_en" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Name (AR)</label>
                                <input type="text" class="form-control font_ar" name="name_ar" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Username (EN)</label>
                                <input type="text" class="form-control" name="username_en" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Username (AR)</label>
                                <input type="text" class="form-control font_ar" name="username_ar" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Location (EN)</label>
                                <input type="text" class="form-control" name="location_en" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Location (AR)</label>
                                <input type="text" class="form-control font_ar" name="location_ar" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Box (EN)</label>
                                <input type="text" class="form-control" name="box_en" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Box (AR)</label>
                                <input type="text" class="form-control font_ar" name="box_ar" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Fax</label>
                                <input type="text" class="form-control" name="fax">
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
        <div class="widget">
            <div class="widget-title">
                All regions
            </div>
            <div class="widget-content">
                @php
                    $x = 1;
                @endphp
                @foreach ($regions['data'] as $index => $region)
                    <div class="slide_item">
                        <div class="slide_cont">
                            <span> #{{ $x }} </span>
                            <h3>{{ $region['name_en'] }}</h3>
                            <div class="w-100">
                                <a class="custom-btn" href="{{ route('admin.regions.edit', ['id' => $region['id']]) }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <button class="custom-btn red-bc delete-btn"
                                    data-url="{{ route('admin.regions.delete', ['id' => $region['id']]) }}"
                                    style="margin-left:5px;">
                                    <i class="fa fa-trash-alt"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>
                    @php
                        $x++;
                    @endphp
                @endforeach

            </div>
        </div>

    </div>
    <!--End Page content-->
@endsection
