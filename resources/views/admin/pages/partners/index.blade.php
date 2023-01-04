@extends('admin.layouts.master')
@push('modals')
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document" id="edit-area">

        </div>
    </div>
@endpush
@section('content')
    <div class="page-head">
        <i class="fa fa-image"></i> Our partners
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active"> Our partners </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-content">
                <form class="row ajax-form" action="{{ route('admin.partners.store') }}" method="post">
                    @csrf
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Image </label>
                            <input class="jfilestyle" type="file" name="image">
                        </div>
                        <span class="text-danger">Please note that image dimensions should be : 180 * 70
                        </span>
                    </div>
                    <div class="col-md-12 col-sm-12 form-group text-center">
                        <button class="custom-btn green-bc" type="submit">
                            <i class="fa fa-plus"></i> Save change
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget">
            <div class="widget-title">
                Our partners
            </div>
            <!--End Widget Title-->
            <div class="widget-content">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Images </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($partners['data'] as $index => $partner)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td><img src="{{ $partner['image'] }}" width="100">
                                            </td>
                                            <td>
                                                <button class="custom-btn btn-modal-view"
                                                    data-url="{{ route('admin.partners.edit', ['id' => $partner['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.partners.delete', ['id' => $partner['id']]) }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        @php
                                            $x++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Widget-content-->
        </div>
        <!--End widget-->
    </div>
    <!--End Page content-->
@endsection
