@foreach ($messages['data'] as $message)
    <div class="item-list gray">
        <a href="{{ route('admin.solution_message.show', ['id' => $message['id']]) }}">
            <img src="{{ $message['image'] }}" />
            <div class="item-content">
                {{ $message['name'] }}
                <br />
                <span> <i class="fa fa-clock"></i> {{ $message['created_at'] }} </span>
                <span> <i class="fa fa-envelope"></i> {{ $message['email'] }} </span>
                <span> <i class="fa fa-info"></i> {{ $message['school'] }} </span>
            </div>
        </a>
        <button class="icon-btn red-bc delete-btn"
            data-url="{{ route('admin.solution_message.delete', ['id' => $message['id']]) }}">
            <i class="fa fa-trash"></i>
        </button>
    </div>
@endforeach
