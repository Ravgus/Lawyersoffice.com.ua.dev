@extends('layouts.main')

@section('meta')
    @include('landing.import.meta', ['title' => 'Адвокатський Офіс. Наші контакти. Грицак, Терно, Бубенщиков: + 38 (095) 02-39-901', 'key' => 'контакты, почта, телефон, карта, контакти, пошта', 'desc' => 'Адвокатський Офіс – Інформація про наші контакти. + 38(095) 02-39-901, м.Херсон, вул. Робоча, 64-а, https://lawyersoffice.com.ua', 'full_desc' => 'Адвокатський Офіс – Інформація про наші контакти. + 38(095) 02-39-901, м.Херсон, вул. Робоча, 64-а, https://lawyersoffice.com.ua'])
@endsection

@section('title', $title)

@section('header', 'content')

@section('logo_size', '244px')

@section('navigation')
    @include('landing.import.navigation', ['title' => $title])
@endsection

@section('content')

    <div class="about contacts" id="1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title">
                        Контактна інформація
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="phone_contacts">
                        <img src="images/theme/svg/ic_phone.svg" alt="icon" class="icon_phone" width="24px"
                             height="auto">
                        <span>+ 38 (095) 02-39-901</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="mail_contacts">
                        <img src="images/theme/svg/ic_mail.svg" alt="icon" class="icon_place" width="24px"
                             height="auto">
                        <span>lawyersoffice.ks@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="address_contacts">
                        <img src="images/theme/svg/ic_place.svg" alt="icon" class="icon_place" width="24px"
                             height="auto">
                        <span>м.Херсон, вул. Робоча, 64-а</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" id="map" style="height: 400px; width: 100%;">
                    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2739.2059758784376!2d32.595371315651455!3d46.64244677913257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0Lwu0KXQtdGA0YHQvtC9LCDQstGD0LsuINCg0L7QsdC-0YfQsCwgNjQt0LA!5e0!3m2!1sru!2sua!4v1527341216299" width="1100" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>--}}

                </div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 separator"></div>
            </div>

        </div>
    </div>

@endsection

@section('add_js')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7D4qOD65gmGDghBMSrwdpQ2ObgjMgx8w&callback=initMap">
    </script>
    <script>
        function initMap() {
            var uluru = {lat: 46.6424117, lng: 32.5975535};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
@endsection

