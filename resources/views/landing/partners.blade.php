@extends('layouts.main')

@section('meta')
    <meta name="description"
          content="На данной странице перечисляются партнеры и фирмы, с которыми работает данная фирма">
    <meta name="author" content="Bang-studio.com">
    <meta name="keywords" content="наши партнеры ,Ми співпрацюємо, парнеры, херсон, грицак, терно, бубенщиков">
@endsection

@section('title', $title)

@section('add_css')
    <link rel="stylesheet" href="libs/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/owlcarousel/dist/assets/owl.theme.default.min.css">
@endsection

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
                        Ми співпрацюємо
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

            <div class="owl-carousel">

                @foreach($partners as $partner)

                    <div class="team_member item">
                        <div class="row">
                            <div class="col-sm-12 col-lg-8">
                                <div class="photo" style="background-image: url({{ $partner->img }})">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-2 outer_slider"></div>
                            <div class="col">
                                <div class="info">
                                    <h2>{{ $partner->name }}</h2>
                                    <div class="text_info">
                                        {!! $partner->text !!}
                                    </div>
                                    <a class="more-link"
                                       href="{{ $partner->link }}"><span>{{ $partner->link }}</span></a>
                                </div>
                            </div>
                            <div class="col-1 outer_slider"></div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

@endsection

@section('add_js')
    <script src='libs/owlcarousel/dist/owl.carousel.min.js'></script>
@endsection