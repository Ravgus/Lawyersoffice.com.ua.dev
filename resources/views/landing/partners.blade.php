@extends('layouts.main')

@section('meta')
    @include('landing.import.meta', ['title' => 'Адвокатський Офіс. Наші партнери. Грицак, Терно, Бубенщиков: + 38 (066) 011-18-10', 'key' => 'наши партнеры, Ми співпрацюємо, парнеры', 'desc' => 'Адвокатський Офіс – Інформація про наших партнерів. + 38 (066) 011-18-10. https://lawyersoffice.com.ua', 'full_desc' => 'Адвокатський Офіс – Інформація про наших партнерів. + 38 (066) 011-18-10. https://lawyersoffice.com.ua'])
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
                        <p>{{--У цьому розділі ми вирішили зібрати Lorem Ipsum - це текст-"риба", що використовується в
                            друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли
                            невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів. "Риба" не
                            тільки
                            успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по
                            суті
                            незмінною.--}}</p>
                    </div>
                </div>
            </div>

            @if(!$partners->isEmpty())

                <div class="owl-carousel">

                    @foreach($partners as $partner)

                        <div class="team_member item">
                            <div class="row">
                                <div class="col-sm-12 col-lg-8">
                                    <div class="photo photo_slider" style="background-image: url({{ $partner->img }})">
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

            @else

                <div style="text-align: center;"><h2>Поки що немає партнерів</h2></div>
                <div style="height:35vh; width: auto;"></div>

            @endif

        </div>
    </div>

@endsection

@section('add_js')
    <script src='libs/owlcarousel/dist/owl.carousel.min.js'></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                items: 1,
                dots: false,
                autoplay: true,
                autoplaySpeed: 1000,
                autoplayTimeout: 5000 /*автопрокрутка время в мс*/
            });
        });
    </script>
@endsection