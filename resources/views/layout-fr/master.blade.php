<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta');

    {{-- load stylesheets --}}
    <link rel="preload" href="{{ url('/css/bootstrap.min.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="shortcut icon" href="{{ url('/favicon.ico') }}" type="image/x-icon">
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
    <style>
        body {
            background: #fff;
        }

        .box {
            margin-bottom: 80px;
        }

        .text-center {
            text-align: center;
        }

        section {
            padding: 60px 30px 0px;
        }

        .hero {
            color: #fff;
            border: 1px solid #000;
            border-radius: 30px;
            height: 275px
        }

        .tm-top-bar.active .navbar-expand-lg .navbar-nav .nav-link {
            padding: 3px 19px;
        }

        .is-open img {
            background: #dc3545;
            border-radius: 100px;
            padding: 3px;
        }

        .hero:before {
            background: rgba(0, 0, 0, 0.6);
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
        }

        span.vis {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }

        .hero .container {
            position: relative;
            z-index: 2;
        }

        .btn-danger,
        .btn-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .megamenu {
            background: rgb(24 62 131);
            z-index: 15;
            box-shadow: 0 2px 20px 0 rgba(0, 0, 0, .1);
            width: 95%;
            margin: auto;
            position: relative;
            top: 42px;
            border-radius: 30px;
            padding: 5px;
        }

        .megamenu .megamenu-nav {
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .megamenu .megamenu-nav .nav-item {
            display: block;
        }

        .megamenu .megamenu-nav .nav-item.is-open>.megamenu-content {
            visibility: visible;
            opacity: 1;
        }

        .megamenu .megamenu-nav .nav-item.is-open>.nav-link {
            background: #fff;
            color: #333;
        }

        .megamenu .megamenu-nav .nav-link {
            color: #fff;
            padding: 17px 9px;
            text-align: center;
            line-height: 32px;
        }

        .megamenu .megamenu-nav .nav-link:hover {
            background: #fff;
            color: #333;
        }

        .megamenu .megamenu-content {
            position: absolute;
            left: 0;
            right: 0;
            top: 95px;
            overflow: hidden;
            visibility: hidden;
            opacity: 0;
            z-index: 14;
            transition: all .3s ease-in-out;
        }

        .megamenu .megamenu-content .container {
            padding: 20px 40px 25px;
            background: #fff;
            border: 1px solid #c2bfbf;
            border-radius: 5px;
        }

        .megamenu .megamenu-content .subnav {
            margin: 0;
            padding: 0;
        }

        .megamenu .megamenu-content .subnav-item {
            /* display: block; */
            line-height: 31px;
            list-style: circle;
        }

        .megamenu .megamenu-content .subnav-item a {
            color: #000;
        }

        .megamenu-content h3 {
            font-weight: 600;
        }

        .megamenu .megamenu-content .subnav-item .subnav-link {
            padding: 10px 0;
            display: block;
        }

        .megamenu-background {
            background-color: #fff;
            position: absolute;
            left: 0;
            top: 82px;
            right: 0;
            margin: auto;
            height: auto !important;
            transition: all .3s ease-in-out;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
            z-index: 13;
        }


        body.megamenu-visible .megamenu-dim {
            z-index: 12;
            visibility: visible;
            opacity: 1;
        }

        .selection {
            color: #000;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .top {
            background: #e5efff;
            padding: 7px 10px 6px;
            font-size: 14px;
            border-radius: 10px;
            font-weight: 600;
            margin-right: 4px;
        }

        .top .fa {
            font-size: 13px;
            margin-right: 3px;
            color: #f40f25;
        }

        .sub-top {
            font-size: 16px;
            font-weight: 600;
        }

        /* the code below is for the dropdown menu */
        .wrapper-dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
            padding: 25px 0px 25px 0px;
            border-radius: 15px;
            /* background: #1c2028; */
            text-align: left;
            color: #000;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin-bottom: 0;
        }


        .scrollable-menu {
            height: auto;
            max-height: 200px;
            overflow-x: hidden;
        }

        .arrow {
            margin-left: 10px;
            margin-right: 10px;
            float: right;
            rotate: 180deg;
        }

        .selected-display {
            margin-left: 20px;
            font-size: 20px;
        }

        svg {
            transition: all 0.3s;
        }

        .wrapper-dropdown::before {
            position: absolute;
            top: 50%;
            right: 16px;

            margin-top: -2px;

            border-width: 6px 6px 0 6px;
            border-style: solid;
            border-color: #fff transparent;
        }

        .rotated {
            transform: rotate(-180deg);
        }

        .wrapper-dropdown .dropdown {
            transition: 0.3s;
            height: 300px;
            overflow-y: scroll;
            position: absolute;
            top: 108%;
            right: 0;
            left: 0;
            margin: 0;
            padding: 0;
            list-style: none;
            z-index: 99;
            border-radius: 15px;
            box-shadow: inherit;
            background: inherit;
            -webkit-transform-origin: top;
            -moz-transform-origin: top;
            -ms-transform-origin: top;
            transform-origin: top;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: 0;
            visibility: hidden;
        }

        .wrapper-dropdown .dropdown li {
            padding: 0 15px;
            line-height: 45px;
            overflow: hidden;
            border-bottom: 1px solid #dadada;
        }

        .wrapper-dropdown .dropdown li:last-child {
            border-bottom: none;
        }

        .dropdown {
            padding: 0.5rem !important;
        }

        .wrapper-dropdown .dropdown li:hover {
            background-color: rgb(24 62 131);
            border-radius: 10px;
            color: #fff;
        }

        .wrapper-dropdown.active .dropdown {
            opacity: 1;
            visibility: visible;
            border-radius: 0;
            background: #fff;
            border: 1px solid #00000054;
            margin-top: -14px;
        }

        .drop .col-sm-4 {
            border-right: 1px solid #dadada;
            box-shadow: rgba(0, 0, 0, 0.06) 0 8px 30px;
        }

        div#dropdown .active {
            background: #eee;
        }

        .select2-results__options::-webkit-scrollbar {
            width: 6px;
            height: 6px;
            cursor: pointer !important;
        }

        .select2-results__options::-webkit-scrollbar-thumb {
            box-shadow: inset 0 0 6px rgb(81 88 101);
        }

        button.subnav-item {
            background: #fff;
            border: none;
            padding: 0px;
            list-style: circle !important;
            width: 100%;
            text-align: left;
        }

        button:focus {
            outline: 1px dotted;
            outline: 0px auto -webkit-focus-ring-color;
        }

        button:hover {
            background: #eee;

        }

        .select2-container--classic .select2-selection--single {
            background-color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            outline: 0;
            /* background-image: -webkit-linear-gradient(top, #fff 50%, #eee 100%); */
            background-image: -o-linear-gradient(top, #fff 50%, #eee 100%);
            background-image: linear-gradient(to bottom, #fff 50%, #fff 100%);
            /* background-repeat: repeat-x; */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF', endColorstr='#FFEEEEEE', GradientType=0);
        }

        .select2-container--classic .select2-selection--single:focus {
            border: 1px solid #ffffff;
        }

        .drop {
            padding: 25px 10px 25px 10px;
        }

        .select2-container--classic.select2-container--open .select2-dropdown {
            /* border-color: #5897fb; */
            background: #fff;
            border: 1px solid #00000054;
        }

        .select2-container--classic .select2-selection--single .select2-selection__rendered {
            color: #000;
            line-height: 28px;
            font-size: 19px;
            padding: 0px 11px;
        }

        .select2-container--classic.select2-container--open .select2-selection--single {
            border: 1px solid #b9b9b9;
        }

        .select2-container--classic .select2-results__option--highlighted.select2-results__option--selectable {
            background-color: rgb(24 62 131);
            border-radius: 10px;
            color: #fff;
        }

        @media (max-width: 768px) {
            .hero {
                height: 433px;
            }

            .dots-loader:not(:required) {
                left: 35% !important;
                top: 20% !important;
            }

            .select2-container--classic .select2-selection--single .select2-selection__rendered {
                font-size: 17px !important;
            }

            .megamenu .megamenu-content .subnav {
                columns: 2 !important;
            }

            .megamenu {
                width: 100%;
                padding: 10px;
            }

            .megamenu .megamenu-nav {
                overflow-x: scroll;
                justify-content: flex-start;
            }

            .megamenu .megamenu-nav .nav-link {
                padding: 7px 12px !important;
                text-align: center;
                line-height: 19px !important;
                font-size: 11px !important;
            }

            .drop .col-sm-4 {
                border-right: none;
            }

            .megamenu-content h3 {
                font-size: 20px;
            }

            .vis {
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
            }

            .col-12.pr-5 {
                padding: 0px;
            }

            .megamenu .megamenu-content .subnav-item {
                line-height: 17px;
                list-style: circle;
                margin-bottom: 12px;
                font-size: 13px;
            }
        }

        .loading * {
            display: none;
        }


        .dots-loader:not(:required) {
            opacity: 1;
            overflow: hidden;
            position: relative;
            left: 45%;
            top: 20%;
            margin-left: 0px;
            margin-top: 0px;
            text-indent: -9999px;
            display: inline-block;
            width: 120px;
            height: 120px;
            background: url('/img/loading-f.gif');
            animation: dots-loader 5s infinite ease-in-out;
            transform-origin: 50% 50%;
            transform: scale(1);
            transition: .3s all;
        }


        .loaded .dots-loader {
            opacity: 0;
            z-index: -1;
            background-color: #f00;
            pointer-events: none;
            transform: scale(0);
        }

        .m-top {
            background: linear-gradient(316.24deg, #eeeeff -37.01%, #f9ecec 100%) !important;
            border-left: 3px solid #dc3545 !important;
            padding-left: 11px !important;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 13px;
        }

        @media screen and (max-width: 991px) {
            .text-center {
                font-size: 2.0vw;
            }
        }

        .megamenu-nav .nav-item:hover {
            background-color: #f1f1f1;
        }

        .megamenu-nav .nav-item:hover .megamenu-content {
            display: block;
        }

        .megamenu-nav .megamenu-content {
            display: none;
        }

        .select-list-container {
            display: flex;
            gap: 3px;
            justify-content: left;
            align-items: center;
        }

        .select-item {
            display: flex;
            align-items: center;
        }

        .separator {
            margin: 0 5px;
            color: black;
        }

        .subnav {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .subnav-item {
            cursor: pointer;
            display: block;
            padding: 3px;
            text-decoration: none;
        }

        li.subnav-item {
            list-style-type: disclosure-closed;
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

        // Handle language selection
        $('.language-option').click(function() {
            var selectedLang = $(this).data('lang');
            var currentUrl = window.location.href;
            var newUrl;

            var selectedLangText = $(this).text();
            $('#language-btn').html(
                '<img src="/img/world.png" alt="World Icon" style="width: 20px; height: 20px; margin-right: 5px;"> ' +
                selectedLangText
            );

            // Redirect based on the selected language
            if (selectedLang === 'fr-fr') {
                if (!currentUrl.includes('/fr-fr')) {
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
