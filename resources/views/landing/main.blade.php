@extends('layouts.main')

@section('meta')
    @include('landing.import.meta', ['title' => 'Адвокатський Офіс – Грицак, Терно, Бубенщиков: + 38 (066) 011-18-10', 'key' => 'Уголовный адвокат херсон, Адвокат по семейным делам, Хозяйственные споры, Административные споры', 'desc' => 'Адвокатський Офіс – Терно Андрій Михайлович, Грицак Ярослав Ярославович, Бубенщиков Вячеслав Олегович: + 38 (066) 011-18-10; Правова допомога у кримінальних, цивільних та адміністративних справах. https://lawyersoffice.com.ua', 'full_desc' => 'Юридичні послуги в Херсоні. Терно Андрій Михайлович. Грицак Ярослав Ярославович. Бубенщиков Вячеслав Олегович. + 38 (066) 011-18-10 або lawyersoffice.ks@gmail.com Ми не даємо пустих обіцянок! Ми просто виконуємо свою роботу якісно та результативно! Наша мета – надання адвокатських та юридичних послуг клієнтам на найвищому професійн ому рівні.'])
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
                <div class="col"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p style="text-align: justify;">
                        <q><i>
                                За прокурором стоит закон, а за адвокатом – человек со своей судьбой, со своими
                                чаяниями, и
                                этот человек взбирается на адвоката, ищет у него защиты, и очень страшно поскользнуться
                                с
                                такой ношей.
                            </i></q>
                    </p>
                    <p style="text-align: right;">
                        <cite>
                            Ф. Плевако
                        </cite>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text">
                        <p style="    font-size: 24px;
    color: #663333;
    margin-top: 30px;
    margin-bottom: 20px; text-align: center;">Ми не даємо пустих обіцянок! Ми просто виконуємо свою роботу якісно та
                            результативно!
                            Наша мета – надання адвокатських та юридичних послуг клієнтам на найвищому професійному
                            рівні.
                        </p>
                    </div>
                </div>
            </div>
            <div class="advantages">
                <div class="row">
                    <div class="col-12 col-md-4 advantage_1">
                        <img src="images/theme/icon_4.svg" alt="icon" class="icon" width="150px" height="auto">
                        <div class="title_icon">Професіонали своєї справи</div>
                        <div class="text_icon">Для нашої команди захист інтересів клієнта – найвищий пріоритет!
                            Гарантуємо порядність та конфіденційність.
                        </div>
                    </div>
                    <div class="col-12 col-md-4 advantage_2">
                        <img src="images/theme/icon_1.svg" alt="icon" class="icon" width="150px" height="auto">
                        <div class="title_icon">Працюємо 24/7</div>
                        <div class="text_icon">Кваліфіковані та досвідчені фахівці завжди готові прийти Вам на допомогу
                            і надати ефективну підтримку.
                        </div>
                    </div>
                    <div class="col-12 col-md-4 advantage_3">
                        <img src="images/theme/icon_7.svg" alt="icon" class="icon" width="150px" height="auto">
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
