@extends('layout-fr.master')

@section('meta')
    <title>Conference en Europe 2024/2025</title>
    <meta
        name="keywords"content="conference in Europe, conference in Europe 2024/2025, European conference, European conference 2024/2025, international conference in Europe, academic conference " />
    <meta name="description"
        content="Conference in Europe 2024-2025, Explore the beautiful cities of Europe while attending the informative. Check conferences based on interested topics, venue, and time." />

    <meta property="og:title" content="Conference en Europe 2024/2025" />
    <meta property="og:keywords"
        content="conference in Europe, conference in Europe 2023/ 2024, European conference, European conference 2023/ 2024, international conference in Europe, academic conference " />
    <meta property="og:description"
        content="Conference in Europe 2024-2025, Explore the beautiful cities of Europe while attending the informative. Check conferences based on interested topics, venue, and time." />

       <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="preload" href="{{ url('css/jQuery.tab.css') }}" as="style" onload="this.rel='stylesheet'">
@endsection

@section('style')
    <style>
        a {
            transition: none;
        }

        @media only screen and (max-width: 767px) {
            .sbtn {
                text-align: center;
            }

        }

        .justify-content-center {
            justify-content: center;
        }

        .upcoming-section .calander-div {
            text-align: center;
            margin-bottom: 27px;
        }

        .upcoming-section .calander-div .up-month {
            position: absolute;
            top: 13%;
            left: 0%;
            right: 0;
        }

        .upcoming-section .calander-div .up-year {
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* First we style the container element.  */
        .calendar {
            margin: 1.25em 30px 11px 10px;
            padding-top: 7px;
            float: right;
            width: 111px;
            background: #ededef;
            background: -webkit-gradient(linear, left top, left bottom, from(#ededef), to(#ccc));
            background: -moz-linear-gradient(top, #ededef, #ccc);
            font: bold 30px/60px Arial Black, Arial, Helvetica, sans-serif;
            text-align: center;
            color: #000;
            text-shadow: #fff 0 1px 0;
            border-radius: 3px;
            position: relative;
            box-shadow: 0 2px 2px #888;
        }

        /* Em element is also styled, it contains the month’s name. */
        .calendar em {
            display: block;
            font: normal bold 11px/30px Arial, Helvetica, sans-serif;
            color: #fff;
            text-shadow: #00365a 0 -1px 0;
            background: #04599a;
            background: -webkit-gradient(linear, left top, left bottom, from(#04599a), to(#00365a));
            background: -moz-linear-gradient(top, #04599a, #00365a);
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-top: 1px solid #00365a;
        }

        /* Now I am styling the pseudo elements. Container’s pseudo elements (:before and :after) are used to create thos circles, "holes in te paper". */
        .calendar:before,
        .calendar:after {
            content: '';
            float: left;
            position: absolute;
            top: 5px;
            width: 8px;
            height: 8px;
            background: #111;
            z-index: 1;
            border-radius: 10px;
            box-shadow: 0 1px 1px #fff;
        }

        .calendar:before {
            left: 11px;
        }

        .calendar:after {
            right: 11px;
        }

        /*…and em’s pseudo elements are used to create the rings: */
        .calendar em:before,
        .calendar em:after {
            content: '';
            float: right;
            position: absolute;
            top: -5px;
            width: 4px;
            height: 14px;
            background: #dadada;
            background: -webkit-gradient(linear, left top, left bottom, from(#f1f1f1), to(#aaa));
            background: -moz-linear-gradient(top, #f1f1f1, #aaa);
            z-index: 2;
            border-radius: 2px;
        }

        .calendar em:before {
            left: 13px;
        }

        .calendar em:after {
            right: 13px;
        }

        .calander-year {
            font-family: 'Roboto';
            font-weight: 700;
            font-size: 21px;
            text-align: center;
        }

        .pt-4 {
            padding-top: 3rem !important
        }

        .pb-4 {
            padding-bottom: 3rem !important
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

        .mobileview {
            display: none;
        }


        @media screen and (max-width: 768px) and (min-width: 200px) {

            .mobileview {
                display: block;
                margin-top: 33px;
                margin-bottom: 25px;
            }

            .dskview {
                display: none;
            }

            .tabContent>div {
                display: block !important;
            }
        }

        .new-width {
            max-width: 100%;
        }

        .tm-banner-bg {
            background-image: url(/img/banner-new.webp) !important;
            background-size: cover;
            width: 100%;
        }

        /* New CSS End (02-09-2022) */
        #more {
            display: none;
        }



        .faq-drawer {
            margin-bottom: 4px;
        }

        .faq-drawer__content-wrapper {
            font-size: 1.25em;
            line-height: 1.4em;
            max-height: 0px;
            overflow: scroll;
            transition: 0.25s ease-in-out;
        }

        .faq-drawer__title {
            border-top: #000 1px solid;

            cursor: pointer;
            display: block;
            font-size: 1.25em;
            font-weight: 700;
            padding: 15px 9px 11px 6px;
            position: relative;
            margin-bottom: 0;
            transition: all 0.25s ease-out;
        }

        .faq-drawer__title::after {
            border-style: solid;
            border-width: 1px 1px 0 0;
            content: " ";
            display: inline-block;
            float: right;
            height: 10px;
            left: -21px;
            position: relative;
            right: 20px;
            top: 2px;
            transform: rotate(135deg);
            transition: 0.35s ease-in-out;
            vertical-align: top;
            width: 10px;
        }

        /* OPTIONAL HOVER STATE */
        .faq-drawer__title:hover {
            color: #4E4B52;
        }

        .faq-drawer__trigger:checked+.faq-drawer__title+.faq-drawer__content-wrapper {
            max-height: 250px;
        }

        .faq-drawer__trigger:checked+.faq-drawer__title::after {
            transform: rotate(-45deg);
            transition: 0.25s ease-in-out;
        }

        input[type="checkbox"] {
            display: none;
        }



        .btnn {
            border: 2px solid #031e6b;
            background-color: #031e6b;
            color: #fff;
            padding: 6px 13px 6px 13px;
            font-size: 17px;
        }
    </style>
@endsection
@section('content')
    @include('layout-fr.header')
    <section class="tm-banner">
        <div class="tm-container-outer tm-banner-bg new-width" loading="lazy">
            <div class="container">
                <div class="row tm-banner-row tm-banner-row-header">
                    <div class="col-xs-12">
                        <div class="tm-banner-header">
                            <h1 class="tm-banner-subtitle">Welcome to Conference in Europe 2024/2025</h1>

                        </div>
                    </div>
                </div>
                <div class="row tm-banner-rows" id="tm-section-search">

                    <form action="{{ route('advance-search-fr') }}" class="tm-search-form tm-section-pad-2">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="text" name="keyword" id="keyword" class="form-control" required
                                    placeholder="Search events by keyword or conference details" />
                            </div>
                            <div class="col-md-2 sbtn">
                                <button type="submit" id="submit" class="btnn" value="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tm-banner-overlay"></div>
            </div>
        </div>
    </section>

    <div class="tm-container-outer" id="tm-section-2">
        <section class="pt-4 tm-container-outer tm-bg-gray">
            <div class="container">
                <div class="col-xs-12 mx-auto text-justify dskview">
                    <h2 class="text-uppercase mb-4 text-center" style="font-size: 30px;text-align: center!important;">
                        <strong>About Europe Conference Alerts</strong>
                    </h2>
                    <p class="mb-4" style="margin-bottom: 1.5rem!important;">Welcome to Conference in Europe
                        2024/2025, a dedicated platform that ensures a diverse
                        range of support in finding upcoming conferences in Europe. Get ready to explore our
                        informative and interactive services that allow a broader range of academicians,
                        business entrepreneurs, tech enthusiasts, students, and professionals from different
                        fields. We provide accurate and to-the-point information on specific conference events
                        held in Europe 2024/2025. Focusing on changing landscapes in different areas, we provide
                        beneficial information on attending procedures, fees structure, and travelling to your
                        specific conference.</p>
                    <div class="cont">
                        <p class="mb-4" style="margin-bottom: 1.5rem!important;">These featured conference
                            events
                            allow you to explore resources and knowledge for
                            expanding your learning, understanding, and networking scopes in your field. As a
                            participant, finding an appropriate conference that can benefit your professional
                            and
                            educational journey is important. However, our insightful approach to helping you
                            get in
                            touch with the dedicated events collaborated with the leaders, speakers,
                            academicians,
                            and researchers.</p>
                        <p class="mb-4" style="margin-bottom: 1.5rem!important;">Ready to elevate your career
                            by
                            diving deep into the world of knowledge and learning?
                            Join our community to get the latest updates on upcoming conferences in Europe and
                            explore the opportunities to propel you through your career.</p>
                    </div>
                </div>
                <div class="mobileview">
                    <h2 class="text-uppercase mb-4 text-center" style="font-size: 30px;text-align: center!important;">
                        <strong>About Europe Conference Alerts</strong>
                    </h2>
                    <p style="text-align:justify;">Welcome to Conference in Europe 2024-2025, a dedicated
                        platform
                        that ensures a diverse
                        range of support in finding upcoming conferences in Europe. Get ready to explore our
                        informative and interactive services that allow a broader range of academicians,
                        business entrepreneurs, tech enthusiasts, students, and professionals from different
                        fields. We provide accurate and to-the-point information on specific conference events
                        held in Europe 2024-2025. Focusing on changing landscapes in different areas, we provide
                        beneficial information on attending procedures, fees structure, and travelling to your
                        specific conference.<span id="dots">...</span></p><span id="more">
                        <p style="text-align:justify;">These featured conference events allow you to explore
                            resources and knowledge for
                            expanding your learning, understanding, and networking scopes in your field. As a
                            participant, finding an appropriate conference that can benefit your professional
                            and
                            educational journey is important. However, our insightful approach to helping you
                            get in
                            touch with the dedicated events collaborated with the leaders, speakers,
                            academicians,
                            and researchers.</p>
                        <p style="text-align:justify;">Ready to elevate your career by diving deep into the
                            world
                            of knowledge and learning?
                            Join our community to get the latest updates on upcoming conferences in Europe and
                            explore the opportunities to propel you through your career.</p>
                    </span>
                    <button onclick="myFunction()" id="myBtn" fdprocessedid="z1hewq"
                        style="border: 2px solid #031e6b;background-color: #031e6b;color: #fff;padding: 6px 5px 6px 6px;">Read
                        more</button>
                </div>
            </div>
        </section>

        <section class="tm-slideshow-section dskview">
            <div class="container">
                <div class="cont-lis">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab tab2">
                                <div class="tabHeader">
                                    <ul>
                                        <li class="active">Top Countries</li>
                                        <li>Top Cities</li>
                                        <li>Top Topics</li>
                                    </ul>
                                </div>
                                <div class="tabContent">
                                    <div class="tabItem active">
                                        @foreach ($topCountry as $url => $name)
                                            <a href="{{ route('country-page-fr', ['country' => $url]) }}"
                                                class="topic_click">{{ $name }}</a>
                                        @endforeach
                                    </div>

                                    <div class="tabItem">
                                        @foreach ($topCity as $url => $name)
                                            <a href="{{ route('city-page-fr', ['city' => $url]) }}"
                                                class="country_click">{{ $name }}</a>
                                        @endforeach
                                    </div>

                                    <div class="tabItem">
                                        @foreach ($topicList as $topic => $subtopic)
                                            <a href="{{ route('topic-list-page-fr', ['topic' => $topic]) }}"
                                                class="city_click">{{ ucfirst($topic) }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mobileview">
            <div class="container">
                <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" /><label class="faq-drawer__title"
                        for="faq-drawer">Top Countries</label>
                    <div class="faq-drawer__content-wrapper">
                        <div class="faq-drawer__content">
                            <div class="tabContent">
                                <div class="tabItem active">
                                    @foreach ($topCountry as $url => $name)
                                        <a href="{{ route('country-page-fr', ['country' => $url]) }}"
                                            class="topic_click">{{ $name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-2" type="checkbox" /><label
                        class="faq-drawer__title" for="faq-drawer-2">Top Cities</label>
                    <div class="faq-drawer__content-wrapper">
                        <div class="faq-drawer__content">
                            <div class="tabContent">
                                <div class="tabItem">
                                    @foreach ($topCity as $url => $name)
                                        <a href="{{ route('city-page-fr', ['city' => $url]) }}"
                                            class="country_click">{{ $name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-3" type="checkbox" /><label
                        class="faq-drawer__title" for="faq-drawer-3">Top Topics</label>
                    <div class="faq-drawer__content-wrapper">
                        <div class="faq-drawer__content">
                            <div class="tabContent">
                                <div class="tabItem">
                                    @foreach ($topicList as $topic => $subtopic)
                                        <a href="{{ route('topic-list-page-fr', ['topic' => $topic]) }}"
                                            class="city_click">{{ ucfirst($topic) }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <a href="{{ route('add-event-fr') }}" id="addevent">
                        <img src="/img/dummy.webp" alt="uk" loading="lazy" class="img-responsive bannr"
                            style="width: 100%;height: 181px;">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('journal-page-fr') }}" id="journal">
                        <img src="/img/journals-min.jpg" alt="uk" loading="lazy" class="img-responsive bannr"
                            style="width: 100%;height: 181px;">
                    </a>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
        <div id="calendar"></div></br>
        <section class="pb-4 py-md-5 mt-lg-5 upcoming-section">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <h2 class="text-uppercase mb-4 text-center" style="font-size: 30px;text-align: center!important;">
                            <strong>Event Calendar 2024/2025</strong>
                        </h2>
                    </div>
                    @for ($i = 0; $i < 12; $i++)
                        @php
                            $monthName = date('F', strtotime("first day of +$i month "));
                        @endphp

                        <div class="col-lg-2 col-6 col-sm-4 col-md-3 calender-media">
                            <a href="{{ route('month-page-fr', ['month' => strtolower($monthName)]) }}" class="calendar month_click">
                                <div class="calander-div">
                                    <em> {{ date('Y', strtotime("first day of +$i month ")) }}</em>
                                    <span class="calander-year">
                                        {{ date('F', strtotime("first day of +$i month ")) }}
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
        </section>
    </div>
    @include('layout-fr.footer-home')
@section('script')
    <script>
        // top countries, top cities and top topic mouse hower
        $(document).ready(function() {
            $(".tabItem").first().addClass("active");
            $(".tabHeader ul li").hover(function() {
                $(".tabHeader ul li").removeClass("active");
                $(".tabItem").removeClass("active");

                $(this).addClass("active");
                var index = $(this).index();
                $(".tabItem").eq(index).addClass("active");
            });
        });
    </script>
@endsection
@endsection
