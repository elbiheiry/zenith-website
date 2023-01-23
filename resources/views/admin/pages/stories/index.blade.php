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
            <div class="widget-title"> Add story</div>
            <div class="widget-content">
                <form method="post" action="{{ route('admin.stories.store') }}" class="ajax-form">
                    @csrf
                    @method('post')
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
                                <label> Link</label>
                                <input type="text" class="form-control" name="link" />
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
                All stories
            </div>
            <div class="widget-content">
                @php
                    $x = 1;
                @endphp
                @foreach ($stories['data'] as $index => $story)
                    <div class="slide_item">
                        <div class="slide_cont">
                            <span> #{{ $x }} </span>
                            <h3>{{ $story['title_en'] }}</h3>
                            <div class="w-100">
                                <a class="custom-btn" href="{{ route('admin.stories.edit', ['id' => $story['id']]) }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <button class="custom-btn red-bc delete-btn"
                                    data-url="{{ route('admin.stories.delete', ['id' => $story['id']]) }}"
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