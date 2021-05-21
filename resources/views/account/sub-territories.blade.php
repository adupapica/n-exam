@foreach($childs as $value)
    <li>
        @if(isset($value->children))
        <span class="caret">{{ $value->name }}</span>
        @else
        <span class="">{{ $value->name }}</span>
        @endif
        <ul class="nested">
            @if(isset($value->children))
                @if(count($value->children) > 0)
                @include('account.sub-territories',['childs' => $value->children])
                @endif
            @endif

        </ul>
    </li>
@endforeach
