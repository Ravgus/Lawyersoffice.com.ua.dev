@if(isset($navigation))

    <nav class="navigation" id="navigation">
        <div class="icon_menu">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="text_menu">Меню</div>
        </div>
        <ul class="menu">

            @foreach($navigation as $item)

                <li onclick="window.location.href='{{ url('/') }}/{{ $item['alias'] }}'"
                    @if($item['name'] == $title) class="active" @endif><a
                            href="{{ url('/') }}/{{ $item['alias'] }}">{{ $item['name'] }}</a></li>

            @endforeach

            <li class="waypoint" id="waypoint"><a href="#1"><img
                            src={{ asset("images/theme/svg/arrow_down.svg") }} alt="down"
                            width="24px"
                            height="auto"></a></li>
        </ul>
    </nav>

@endif