<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta');

    {{-- load stylesheets --}}
    <link rel="preload" href="{{ url('css/bootstrap.min.css') }}" as="style" onload="this.rel='stylesheet'">
   <link rel="shortcut icon" href="{{url('img/favicon.ico')}}" type="image/x-icon">
    <link rel="preload" type="text/css" href="{{ url('slick/slick.css') }}" as="style"
        onload="this.rel='stylesheet'" />
    <link rel="preload" type="text/css" href="{{ url('slick/slick-theme.css') }}" as="style"
        onload="this.rel='stylesheet'" />
    <link rel="preload" href="{{ url('css/templatemo-style.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" as="style"
        onload="this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" as="style"
        onload="this.rel='stylesheet'" />
    <link rel="stylesheet" href="{{ url('css/language_switcher.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    {{-- JAVASCRIPT FILES --}}
    <script src="/js/bootstrap.min.js" async></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Google Tag Manager --}}
    <script async>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KHJ3DH3');
    </script>

    {{-- End Google Tag Manager --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140828824-1"></script>
    <script async>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-140828824-1');
    </script>

    <style>
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        #subform {
            margin-top: 10px;
        }
        
        .g-recaptcha {
            transform: scale(0.77);
            transform-origin: 0 0;
        }

        .marqq {
            background: #031e6b;
            padding: 10px 10px 6px 10px;
            color: #fff;
            font-size: 16px;
        }

        .hide {
            display: none;
        }

        /* Back to top buttom here */
        #button {
            display: inline-block;
            background-color: #031e6b;
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 4px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            transition: background-color .3s,
                opacity .5s, visibility .5s;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        #button::after {
            content: "\f077";
            font-family: FontAwesome;
            font-weight: normal;
            font-style: normal;
            font-size: 2em;
            line-height: 50px;
            color: #fff;
        }

        #button:hover {
            cursor: pointer;
            background-color: #333;
        }

        #button:active {
            background-color: #555;
        }

        #button.show {
            opacity: 1;
            visibility: visible;
        }

        .venue {
            font-weight: bold;
        }

        /*add your event */
        .e-card {
            display: inline-block;
            margin-bottom: 20px;
            background: url(https://conferenceineurope.net/img/event-bg.png);
            padding: 14px 15px 20px;
            border: 2px #000000;
            background-size: cover;
            background-position: center;
        }

        .e-card h4 {
            background: #0b3783;
            color: #fff;
            padding: 9px;
            font-size: 16px;
            text-align: center;
            text-transform: uppercase;
            font-weight: 600;
        }

        .e-card p {
            text-align: justify;
            font-size: 14px;
            margin-bottom: 11px;
        }

        .e-card ul {
            padding-left: 11px;
            list-style: circle;
            font-weight: 600;
            font-size: 13px;
            padding: 0 20px;
            margin-bottom: 0px;
        }

        #feedback-form-wrapper #floating-icon>button {
            position: fixed;
            right: 0;
            top: 50%;
            z-index: 999;
            transform: rotate(-90deg) translate(50%, -50%);
            transform-origin: right;
        }

        #feedback-form-wrapper .rating-input-wrapper input[type="radio"] {
            display: none;
        }

        #feedback-form-wrapper .rating-input-wrapper input[type="radio"]~span {
            cursor: pointer;
        }

        #feedback-form-wrapper .rating-input-wrapper input[type="radio"]:checked~span {
            background-color: #4261dc;
            color: #fff;
        }

        #feedback-form-wrapper .rating-labels>label {
            font-size: 14px;
            color: #777;
        }

        .modal-content {
            margin-top: 120px;
        }

        .tm-banner-overlay {
            z-index: 0 !important;
        }

        .collapse.show {
            margin-top: -25px;
            border: none;
        }

        .iconn {
            float: right;
            margin-top: 4px;
            margin-right: 12px;
        }

        .mobileview {
            display: none;
        }


        @media screen and (max-width: 768px) and (min-width: 200px) {

            .mobileview {
                display: block;
            }

            .dskview {
                display: none;
            }
        }
    </style>
    @yield('style')
</head>

<body class="bg-white">

    @yield('content')

    @yield('script')
</body>

<script></script>

</html>
