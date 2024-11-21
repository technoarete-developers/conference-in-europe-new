<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta');

    {{-- load stylesheets --}}
    <link rel="preload" href="{{ url('/css/bootstrap.min.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="shortcut icon" href="{{ url('/img/favicon.ico') }}" type="image/x-icon">
    <link rel="preload" type="text/css" href="{{ url('/slick/slick.css') }}" as="style"
        onload="this.rel='stylesheet'" />
    <link rel="preload" type="text/css" href="{{ url('/slick/slick-theme.css') }}" as="style"
        onload="this.rel='stylesheet'" />
    <link rel="preload" href="{{ url('/css/templatemo-style.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ url('/css/font-awesome-4.7.0/css/font-awesome.min.css') }}" as="style"
        onload="this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" as="style"
        onload="this.rel='stylesheet'" />
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
        #mainNav {
            position: relative;
        }

        .search-container {
            display: none;
            position: absolute;
            top: 96px;
            left: 0;
            width: 100%;
            background-color: #fff;
            z-index: 1000;
            border-top: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-wrap {
            padding: 15px;
        }

        .search-box {
            padding: 19px 20px;
            position: relative;
            max-width: 1050px;
            width: 100%;
            margin: auto;
        }

        .search-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            font-size: 24px;
            color: #333;
            cursor: pointer;
            font-weight: bold;
        }

        .search-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: none;
        }

        .search-field {
            width: 100%;
            outline: 0;
            border: 1px solid #e8eef6;
            font-size: 17px;
            padding: 15px 40px 15px 16px;
        }

        .search-wrap .search-btn {
            position: absolute;
            right: 30px;
            top: 0;
            bottom: 0;
            width: 22px;
            height: 22px;
            padding: 0;
            border: 0;
            cursor: pointer;
            transform: scale(0.8);
            margin: auto;
            background-size: 20px auto;
        }

        .search-btn {
            background: url('/img/searchicon.svg');
        }

        .language-select {
            border: none;
            background: none;
            display: flex;
            align-items: center;
        }

        .language-dropdown {
            display: none;
            position: absolute;
            top: 40px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 150px;
            z-index: 1000;
        }

        .language-dropdown {
            display: none;
            /* Hidden by default */
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 5px;
            z-index: 1000;
            list-style-type: none;
            padding: 0;
            margin: 0;
            top: 60px;
        }

        .language-dropdown .language-option {
            padding: 10px;
            cursor: pointer;
        }

        .language-dropdown .language-option:hover {
            background-color: #f0f0f0;
        }

        .language-select:before {
            position: absolute;
            content: "";
            width: 22px;
            height: 16px;
            left: 0;
            background-size: 528px auto;
            background-position: 0 0;
            background: url('/img/world.png');
        }

        .tabContent a,
        a.calendar.month_click,
        #footer a {
            text-decoration: none;
        }

        .footer-checkbox {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .form-control {
            border-radius: 0px;
        }

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
            background: url('/img/event-bg.png');
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

<script>
    $(document).ready(function() {
        $('#advance-serch').on('click', function() {
            $('#search-container').show();
            $('#advance-serch').show();
        });
        $('#close-search').on('click', function() {
            $('#search-container').hide();
        });
    });

    $(document).ready(function() {
      
        $('#language-btn').click(function(event) {
            var isExpanded = $(this).attr('aria-expanded') === 'true';
            $(this).attr('aria-expanded', !isExpanded);
            $('#language-dropdown').toggle();
            event.stopPropagation();
        });

        $('.language-option').click(function() {
            var selectedLang = $(this).data('lang'); 
            var currentUrl = window.location.href;
            var newUrl;

            var selectedLangText = $(this).text();
            $('#language-btn').html(
                '<img src="/img/world.png" alt="World Icon" style="width: 20px; height: 20px; margin-right: 5px;"> ' +
                selectedLangText
            );

            if (selectedLang === 'fr-fr') {
                if (!currentUrl.includes('fr-fr')) {
                    newUrl = currentUrl.replace(window.location.origin,
                        `${window.location.origin}/fr-fr`);
                }
            } else if (selectedLang === 'en') {
                newUrl = currentUrl.replace('/fr-fr', '');
               
            }

            if (newUrl) {
                window.location.href = newUrl;
            }
            $('#language-dropdown').hide();
            $('#language-btn').attr('aria-expanded', 'false');
        });

        $(document).click(function(event) {
            if (
                !$('#language-btn').is(event.target) &&
                !$('#language-dropdown').is(event.target) &&
                $('#language-dropdown').has(event.target).length === 0
            ) {
                $('#language-dropdown').hide();
                $('#language-btn').attr('aria-expanded', 'false');
            }
        });
    });
</script>

</html>
