@extends('admin.layouts.master')
@section('content')
    <div class="page-content">
        <div class="widget">
            <div class="widget-content">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="counter">
                                    <i class="fa fa-newspaper"></i>
                                    <div class="counter-cont">
                                        <h3 class="timer" data-to="{{ \App\Models\Message::count() }}" data-speed="1500">
                                            {{ \App\Models\Message::count() }}
                                        </h3>
                                        <div class="count-name">Message</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="counter">
                                    <i class="fa fa-newspaper"></i>
                                    <div class="counter-cont">
                                        <h3 class="timer" data-to="{{ \App\Models\SolutionMessage::count() }}"
                                            data-speed="1500">
                                            {{ \App\Models\SolutionMessage::count() }}
                                        </h3>
                                        <div class="count-name">Apple Messages</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="row" style="margin: 0 -15px">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-title"> Latest Messages
                        <a href="{{ route('admin.messages.index') }}" class="custom-btn"> see all</a>
                    </div>
                    <div class="widget-content" style="padding: 0">
                        @foreach ($messages as $message)
                            <div class="item-list">
                                <a href="{{ route('admin.messages.show', ['message' => $message->id]) }}">
                                    <img src="{{ $message->image() }}" />
                                    <div class="item-content">
                                        {{ $message->email }}
                                        <br />
                                        <span> <i class="fa fa-clock"></i> {{ $message->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-title"> Apple messages
                        <a href="{{ route('admin.solution_message.index') }}" class="custom-btn"> see all</a>
                    </div>
                    <div class="widget-content" style="padding: 0">
                        @foreach ($solutions as $message)
                            <div class="item-list">
                                <a href="{{ route('admin.solution_message.show', ['id' => $message->id]) }}">
                                    <img src="{{ $message->image() }}" />
                                    <div class="item-content">
                                        {{ $message->email }}
                                        <br />
                                        <span> <i class="fa fa-clock"></i> {{ $message->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
