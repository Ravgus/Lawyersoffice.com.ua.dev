@extends('layouts.main')

@section('meta')
    @include('landing.import.meta', ['title' => 'Адвокатський Офіс. Питання/Відповіді – Грицак, Терно, Бубенщиков: + 38 (095) 02-39-901', 'key' => 'вопросы, ответы, faq, Відповіді, запитання', 'desc' => 'Адвокатський Офіс – Відповіді на найбільш поширені питання. + 38(095) 02-39-901. https://lawyersoffice.com.ua', 'full_desc' => 'Адвокатський Офіс – Відповіді на найбільш поширені питання. + 38(095) 02-39-901. https://lawyersoffice.com.ua'])
@endsection

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

            @if(!isset($faqs))

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

                    @if($loop->count == 1 || $loop->count == 2)
                        <div style="height:25vh; width: auto;"></div>
                    @endif

                @endforeach

            @else

                <div style="text-align: center;"><h2>Немає питань</h2></div>
                <div style="height:30vh; width: auto;"></div>

            @endif

        </div>
    </div>

@endsection

