@extends('layouts.main')

@section('meta')
    @include('landing.import.meta', ['title' => 'Адвокатський Офіс. Юридичні послуги в Херсоні – Грицак, Терно, Бубенщиков: + 38 (066) 011-18-10', 'key' => 'Кримінальні справи, Захист ваших бізнес-інтересів, Господарські справи, Цивільні справи', 'desc' => 'Юридичні послуги в Херсоні. Кримінальні справи. Захист ваших бізнес-інтересів. Господарські та цивільні справи. Терно Андрій Михайлович. Грицак Ярослав Ярославович. Бубенщиков Вячеслав Олегович. + 38 (066) 011-18-10. https://lawyersoffice.com.ua', 'full_desc' => 'Юридичні послуги в Херсоні. Захист від обвинувачення на слідстві та у судовому провадженні. Представництво інтересів потерпілого. Правова допомога свідку та іншим учасникам кримінального провадження. Невідкладний виїзд (24/7) за вашим повідомленням про проведення обшуку. Адвокатський супровід під час перевірок діяльності підприемства. Оскарження дій та рішень ДФС та інших конролюючих органів. Терно Андрій Михайлович. Грицак Ярослав Ярославович. Бубенщиков Вячеслав Олегович. Спори, пов’язані з невиконанням договірних зобов’язань. Кредитні спори. Корпоративні права. Захист права власності, майнові спори, спадкові справи. + 38 (066) 011-18-10 або lawyersoffice.ks@gmail.com'])
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
                        <p> Ми працюємо для вас цілодобово. До переліку наших послуг входить: </p>
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