@extends('layouts.main')

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
                        <p> Ми працюємо для вас цілодобово, що використовується в друкарстві та дизайні. Lorem Ipsum є,
                            фактично,
                            стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав
                            на ній
                            підбірку зразків шрифтів. "Риба" не тільки успішно пережила п'ять століть, але й прижилася в
                            електронному
                            верстуванні, залишаючись по суті незмінною. </p>
                        <p>До переліку наших послуг входить:</p>
                    </div>
                </div>
            </div>
            <div class="advantages dtp">
                <div class="row">

                    @foreach($dtps as $dtp)

                        <div class="col-12 col-md-4 advantage_{{ $loop->iteration }}">
                            <img src="{{ $dtp->img }}" alt="icon" class="icon">
                            <div class="text_icon">{!! $dtp->text !!}</div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection

