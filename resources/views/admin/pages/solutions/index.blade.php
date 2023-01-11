@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Solutions
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Solutions</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title"> Add solution</div>
            <div class="widget-content">
                <form method="post" action="{{ route('admin.solutions.store') }}" class="ajax-form">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>image </label>
                                <input type="file" class="jfilestyle" name="image" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 640 * 480
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>link </label>
                                <input type="text" class="form-control" name="link" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label> Title (EN)</label>
                                <input type="text" class="form-control" name="title_en" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Title (AR)</label>
                                <input type="text" class="form-control font_ar" name="title_ar" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> brief (EN)</label>
                                <textarea class="form-control" name="brief_en"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> brief (AR)</label>
                                <textarea class="form-control" name="brief_ar"></textarea>
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
                All solutions
            </div>
            <div class="widget-content">
                @php
                    $x = 1;
                @endphp
                @foreach ($solutions['data'] as $index => $solution)
                    <div class="slide_item">
                        <img src="{{ $solution['image'] }}" />
                        <div class="slide_cont">
                            <span> #{{ $x }} </span>
                            <h3>{{ $solution['title_en'] }}</h3>
                            <div class="w-100">
                                @if ($solution['link'] == null)
                                    <a class="custom-btn blue-bc"
                                        href="{{ route('admin.solutions.content.index', ['id' => $solution['id']]) }}">
                                        <i class="fa fa-info"></i> Content
                                    </a>
                                @endif

                                <a class="custom-btn" href="{{ route('admin.solutions.edit', ['id' => $solution['id']]) }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <button class="custom-btn red-bc delete-btn"
                                    data-url="{{ route('admin.solutions.delete', ['id' => $solution['id']]) }}"
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
