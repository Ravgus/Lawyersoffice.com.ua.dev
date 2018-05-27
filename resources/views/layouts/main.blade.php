<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->

<head>

    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    <title>@yield('title')</title>
    <meta name="description" content="">

    <link rel="shortcut icon" href={{ asset("images/theme/favicon/fav.ico") }} type="image/x-icon">
    <link rel="apple-touch-icon" href={{ asset("images/theme/favicon/apple-touch-icon.png") }}>
    <link rel="apple-touch-icon" sizes="72x72" href={{ asset("images/theme/favicon/apple-touch-icon-72x72.png") }}>
    <link rel="apple-touch-icon" sizes="114x114" href={{ asset("images/theme/favicon/apple-touch-icon-114x114.png") }}>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href={{ asset("libs/bootstrap-4.0.0/css/bootstrap-grid.min.css") }}>
    <link rel="stylesheet" href={{ asset("libs/animate/animate.css") }}>
    @yield('add_css')

    <link rel="stylesheet" href={{ asset("css/fonts.css") }}>
    <link rel="stylesheet" href={{ asset("css/main.css") }}>
    <link rel="stylesheet" href={{ asset("css/media.css") }}>

    <script src={{ asset("libs/modernizr/modernizr.js") }}></script>

</head>

<body>
<div class="wrapper">
    <header class="header @yield('header')">
        <div class="container">
            <div class="row ">
                <div class="col">
                    <div class="address">
                        <img src={{ asset("images/theme/svg/ic_place.svg") }} alt="icon" class="icon_place" width="24px"
                             height="auto">
                        м.Херсон, вул. Робоча, 64-а
                    </div>
                    <div class="phone">
                        <img src={{ asset("images/theme/svg/ic_phone.svg") }} alt="icon" class="icon_phone" width="24px"
                             height="auto">
                        + 38 (095) 02-39-901
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-center">
                    <div class="logo" onclick="window.location.href='{{ url('/') }}'">
                        <img src={{ asset("images/theme/svg/logo.svg") }} alt="logo" class="logo"
                             width="@yield('logo_size')" height="auto">
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('navigation')

    @yield('content')

</div>

<footer class="footer">
            <span class="social">
                <a href="#"><img src={{ asset("images/theme/svg/vk-icon.svg") }} alt="vk" height="20px"></a>
                <a href="#"><img src={{ asset("images/theme/svg/facebook-icon.svg") }} alt="facebook" height="20px"></a>
                <a href="#"><img src={{ asset("images/theme/svg/telegram-icon.svg") }} alt="telegram" height="20px"></a>
                <a href="#"><img src={{ asset("images/theme/svg/twitter-icon.svg") }} alt="twitter" height="20px"></a>
                <a href="#"><img src={{ asset("images/theme/svg/instagram-icon.svg") }} alt="instagram"
                                 height="20px"></a>
            </span>

    @include('landing.import.copyright')

</footer>


<div class="hidden"></div>

<div class="loader">
    <div class="loader_inner"></div>
</div>

<!--[if lt IE 9]>
<script src={{ asset("libs/html5shiv/es5-shim.min.js") }}></script>
<
script
src = {
{
    asset("libs/html5shiv/html5shiv.min.js")
}
}></script>
<script src={{ asset("libs/html5shiv/html5shiv-printshiv.min.js") }}></script>
<
script
src = {
{
    asset("libs/respond/respond.min.js")
}
}></script>
<![endif]-->

<script src={{ asset("libs/jquery/jquery-1.11.2.min.js") }}></script>
<script src={{ asset("libs/waypoints/waypoints.min.js") }}></script>
<script src={{ asset("libs/animate/animate-css.js") }}></script>
<script src={{ asset("libs/plugins-scroll/plugins-scroll.js") }}></script>
@yield('add_js')

<script src={{ asset("js/common.js") }}></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119545422-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-119545422-1');
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter48930662 = new Ya.Metrika({
                    id: 48930662,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true,
                    ecommerce: "dataLayer"
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/48930662" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function () {
        var widget_id = 'uFUzNE6D5x';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }

        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>