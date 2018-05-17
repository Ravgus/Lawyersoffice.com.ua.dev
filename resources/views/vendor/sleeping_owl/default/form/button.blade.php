@if(!$url)
    <button {!! $attributes !!} value="{{$name}}">
        @if($iconClass)<i class="fa {{ $iconClass }}"></i>@endif {{$text}}
    </button>
@else
    <a href="{{$url}}" {!! $attributes !!}>
        @if($iconClass)<i class="fa {{$iconClass}}"></i>@endif {{ $text }}
    </a>
@endif
@if($groupElements)
    <div class="btn-group">

        <div class="dropdown-menu btn-actions">
            <div class="btn-group-vertical">
                @foreach($groupElements as $groupButton)
                    @if($groupButton instanceof \SleepingOwl\Admin\Form\Buttons\FormButton && $groupButton->getShow())
                        {!! $groupButton->render() !!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif
