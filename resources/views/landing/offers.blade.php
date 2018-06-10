@extends('layouts.main')

@section('meta')
    <meta name="description"
          content="На данной странице перечисляются основные направления деятельности фирмы, ее предложения">
    <meta name="author" content="Bang-studio.com">
    <meta name="keywords"
          content="услуги, Кримінальні справи, Захист ваших бізнес-інтересів, Господарські та цивільні справи, адвокаты, херсон, грицак, терно, бубенщиков">
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
                        Наші послуги
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text">
                        <p> Ми забезпечуємо вас тим, що використовується в друкарстві та дизайні. Lorem Ipsum є,
                            фактично,
                            стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав
                            на ній
                            підбірку зразків шрифтів. "Риба" не тільки успішно пережила п'ять століть, але й прижилася в
                            електронному верстуванні, залишаючись по суті незмінною. </p>
                    </div>
                </div>
            </div>
            <div class="advantages services">

                <div class="row">

                    @foreach($offers as $offer)

                        <div class="col-12 col-md-4 advantage_{{ $loop->iteration }}">
                            <img src="{{ $offer->img }}" alt="icon" class="icon" width="150px" height="auto">
                            <div class="title_icon">{{ $offer->name }}</div>
                            <div class="text_icon dsp_sm">
                                {!! $offer->text !!}
                            </div>
                        </div>

                    @endforeach

                </div>
                <div class="row dsp_md">

                    @foreach($offers as $offer)

                        <div class="col-12 col-md-4 advantage_{{ $loop->iteration }}">
                            <div class="text_icon">
                                {!! $offer->text !!}
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
        </div>
    </div>

@endsection