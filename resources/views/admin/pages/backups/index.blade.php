@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        BACKUP & DISASTER RECOVERY
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">BACKUP & DISASTER RECOVERY</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title"> BACKUP & DISASTER RECOVERY</div>
            <div class="widget-content">
                <form method="post" action="{{ route('admin.backup.store') }}" class="ajax-form">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>image </label>
                                <input type="file" class="jfilestyle" name="image" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 950 * 540
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label> description (EN)</label>
                                <textarea class="form-control" name="description_en"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> description (AR)</label>
                                <textarea class="form-control" name="description_ar"></textarea>
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
                BACKUP & DISASTER RECOVERY
            </div>
            <div class="widget-content">
                @php
                    $x = 1;
                @endphp
                @foreach ($backups['data'] as $index => $backup)
                    <div class="slide_item">
                        <img src="{{ $backup['image'] }}" />
                        <div class="slide_cont">
                            <span> #{{ $x }} </span>
                            {{-- <h3>{{ $backup['title_en'] }}</h3> --}}
                            <div class="w-100">
                                <a class="custom-btn" href="{{ route('admin.backup.edit', ['id' => $backup['id']]) }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <button class="custom-btn red-bc delete-btn"
                                    data-url="{{ route('admin.backup.delete', ['id' => $backup['id']]) }}"
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
