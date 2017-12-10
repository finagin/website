<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <title>Finagin's profile</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta property="og:title" content="Igor Finagin - Software Developer"/>
    <meta property="og:image" content="/images/logo.png"/>
    <meta property="og:description" content="Finagin's profile"/>

    <link rel="icon" type="image/png" href="/favico.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon.png" sizes="96x96">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon.png">
    <meta name="msapplication-TileColor" content="#EDEDF0">
    <meta name="msapplication-TileImage" content="/favicon.png">

    <style>
        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 100;
            src: local('Lato Hairline'), local('Lato-Hairline'), url(https://fonts.gstatic.com/s/lato/v11/h3_FseZLI76g1To6meQ4zX-_kf6ByYO6CLYdB4HQE-Y.woff2) format('woff2');
            unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 100;
            src: local('Lato Hairline'), local('Lato-Hairline'), url(https://fonts.gstatic.com/s/lato/v11/ifRS04pY1nJBsu8-cUFUS-vvDin1pK8aKteLpeZ5c0A.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
        }

        html, body {
            height: 100%;
            background-color: #EDEDF0;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }

        .text {
            font-size: 32px;
        }

        .mail {
            font-size: 24px;
            color: #939699;
        }

        .mail a,
        .mail a:hover,
        .mail a:focus,
        .mail a:visited {
            color: #285473;
            cursor: pointer;
            text-decoration: none;
            border-bottom: 1px dotted #285473;
        }

        body .rtl, body .ltr {
            position: relative;
            -webkit-transition-timing-function: ease-out;
            -moz-transition-timing-function: ease-out;
            -ms-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            opacity: .005;
            -webkit-transition-duration: .5s; /* Safari */
            transition-duration: .5s;
        }

        body .rtl {
            -webkit-transform: translateY(-140%);
            -moz-transform: translateY(-140%);
            -ms-transform: translateY(-140%);
            -o-transform: translateY(-140%);
            transform: translateY(-140%);
        }

        body .ltr {
            -webkit-transform: translateY(140%);
            -moz-transform: translateY(140%);
            -ms-transform: translateY(140%);
            -o-transform: translateY(140%);
            transform: translateY(140%);
        }

        body.ready .rtl, body.ready .ltr {
            opacity: 1;
            -webkit-transform: translateY(00px);
            -moz-transform: translateY(00px);
            -ms-transform: translateY(00px);
            -o-transform: translateY(00px);
            transform: translateY(00px);
        }

        body.ready .logo {
            opacity: 0;
            -webkit-transition-duration: .5s; /* Safari */
            transition-duration: .5s;
        }

        .drop-table {
            display: table;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="drop-table logo">
    <div class="container">
        <div class="content">
            <div class="title">
                IF
            </div>
        </div>
    </div>
</div>
<div class="drop-table">
    <div class="container">
        <div class="content">
            <div class="rtl">
                <div class="title">
                    Igor Finagin
                </div>
            </div>
            <div class="ltr">
                <div class="text">
                    Software Developer
                </div>
                <div class="mail">
                    Have questions? Send me
                    <a href="mailto:Igor@Finag.in">
                        mail
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="scripts">
    <script
        src="//code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
        crossorigin="anonymous"></script>
    <script>
        jQuery(function () {
            jQuery('body')
                .delay(1e3)
                .queue(function (next) {
                    jQuery(this).addClass('ready');
                    next();
                });
        });
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter40619720 = new Ya.Metrika({
                        id: 40619720,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true,
                        trackHash: true
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
        <div>
            <img src="https://mc.yandex.ru/watch/40619720" style="position:absolute; left:-9999px;" alt=""/>
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</div>
</body>
</html>
