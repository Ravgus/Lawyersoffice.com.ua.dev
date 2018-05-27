@extends('layouts.main')

@section('meta')
    <meta name="description"
          content="На данной странице находится главная страница сайта, она описывает преимущества данной фирмы, ее участников, их опыт">
    <meta name="author" content="Bang-studio.com">
    <meta name="keywords"
          content="главная станица, партнеры, о нас, про нас, Професіонали своєї справи, Працюємо 24/7, Все для вас, адвокаты, херсон, грицак, терно, бубенщиков">
@endsection

@section('title', $title)

@section('logo_size', '572px')

@section('navigation')
    @include('landing.import.navigation', ['title' => $title])
@endsection

@section('content')

    <div class="about" id="1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title">
                        Про нас
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="text">
                        <p>Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні.
                            Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий
                            друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
                            "Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні,
                            залишаючись по суті незмінною.</p>
                        <p>Вона популяризувалась в 60-их роках минулого сторіччя завдяки виданню зразків шрифтів
                            Letraset,
                            які містили уривки з Lorem Ipsum, і вдруге - нещодавно завдяки програмам комп'ютерного
                            верстування
                            на кшталт Aldus Pagemaker, які використовували різні версії Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="advantages">
                <div class="row">
                    <div class="col-12 col-md-4 advantage_1">
                        <img src="images/theme/icon.png" alt="icon" class="icon">
                        <div class="title_icon">Професіонали своєї справи</div>
                        <div class="text_icon">Вже давно відомо, що читабельний зміст буде заважати зосередитись людині,
                            яка оцінює композицію сторінки.
                        </div>
                    </div>
                    <div class="col-12 col-md-4 advantage_2">
                        <img src="images/theme/icon.png" alt="icon" class="icon">
                        <div class="title_icon">Працюємо 24/7</div>
                        <div class="text_icon">Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш
                            нормальне розподілення літер
                        </div>
                    </div>
                    <div class="col-12 col-md-4 advantage_3">
                        <img src="images/theme/icon.png" alt="icon" class="icon">
                        <div class="title_icon">Все для вас</div>
                        <div class="text_icon">"Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний.
                            Багато програм верстування та веб-дизайну
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title">
                        Партнери
                    </div>
                </div>
            </div>

            @include('landing.import.workers', $workers)

        </div>
    </div>

@endsection
