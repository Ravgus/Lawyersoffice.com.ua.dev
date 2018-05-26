@extends('layouts.main')

@section('title', $title)

@section('header', 'content')

@section('logo_size', '244px')

@section('navigation')
    @include('landing.import.navigation', ['title' => $title])
@endsection

@section('content')

    <div class="about faq" id="1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title">
                        Відповіді на запитання
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text">
                        <p> У цьому розділі ми вирішили зібрати Lorem Ipsum - це текст-"риба", що використовується в
                            друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли
                            невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів. "Риба" не
                            тільки
                            успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по
                            суті
                            незмінною.</p>
                    </div>
                </div>
            </div>

            @foreach($faqs as $faq)

                <div class="row">
                    <div class="col">
                        <div class="quest">
                            <div class="title_quest">
                                <span>{{ $faq->question }}</span>
                                <img class="arrow" src="images/theme/svg/arrow.svg" alt="more" height="12px"
                                     width="auto">
                            </div>
                            <div class="text_quest">
                                {!!  $faq->answer !!}
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection

