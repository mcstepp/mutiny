<ol class="breadcrumb bg-mutinydark-grad">
    @foreach($menu as $item)
        @if ($loop->last)
            <li class="breadcrumb-item active">
                {{ $item['link-name'] }}
            </li>
        @elseif ( isset($item['link-route']))
            <li class="breadcrumb-item">
                <a href="{{ $item['link-route'] }}" class="flicker">{{ $item['link-name'] }}</a>
            </li>
        @else
            <li class="breadcrumb-item">
                {{ $item['link-name'] }}
            </li>
        @endif
    @endforeach
</ol>


