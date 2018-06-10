@extends('layouts.main')

@section('meta')
    <meta name="description" content="На данной странице описывается оказываемая помощь в случае возникновения ДТП">
    <meta name="author" content="Bang-studio.com">
    <meta name="keywords" content="услуги, ДТП, помощь при дтп, адвокаты, херсон, грицак, терно, бубенщиков">
@endsection

@section('title', $title)

@section('header', 'content')

@section('logo_size', '244px')

@section('navigation')
    @include('landing.import.navigation', ['title' => $title])
@endsection

@section('content')

    <div class="about" id="1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title">
                        Допомога при ДТП
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text">
                        <p>Ми працюємо для вас цілодобово. До переліку наших послуг входить:</p>
                    </div>
                </div>
            </div>
            <div class="advantages dtp">
                <div class="row">

                    @foreach($dtps as $dtp)

                        <div class="col-12 col-md-4 advantage_{{ $loop->iteration }}">
                            <img src="{{ $dtp->img }}" alt="icon" class="icon" width="150px" height="auto">
                            <div class="text_icon">{!! $dtp->text !!}</div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection

