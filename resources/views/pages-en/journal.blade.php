@extends('layout-en.master')

@section('meta')
    <title>Submit Paper for Journals | Journal Publication 2022-2023 | Conference in Europe</title>
    <meta name="description"
        content="Find upcoming video Conference in 2022 provided by various organizations in our Conference in Europe portal.">
    <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('style')
    <style>
        .mgaa {
            color: #fe322f !important;
        }

        .mgaa a {
            font-weight: 800 !important;
            font-size: 15px !important;
            color: #3498db !important;
            padding: 10px 5px !important;
        }

        .pos {
            margin-top: 2%;
        }

        #cols li {
            color: #fe322f !important;
        }

        #cols li a {
            font-weight: 800 !important;
            color: #3498db !important
        }

        .ind {
            color: #fe322f !important;
        }

        .ind a {
            font-weight: 800 !important;
            color: #3498db !important
        }

        .tabset {
            text-align: center;
        }

        .tabset>input[type="radio"] {
            position: absolute;
            left: -200vw;
        }

        .tabset .tab-panel {
            display: none;
        }

        .tab-panels h2 {
            font-size: 24px;
        }

        .tabset>input:first-child:checked~.tab-panels>.tab-panel:first-child,
        .tabset>input:nth-child(3):checked~.tab-panels>.tab-panel:nth-child(2),
        .tabset>input:nth-child(5):checked~.tab-panels>.tab-panel:nth-child(3),
        .tabset>input:nth-child(7):checked~.tab-panels>.tab-panel:nth-child(4),
        .tabset>input:nth-child(9):checked~.tab-panels>.tab-panel:nth-child(5),
        .tabset>input:nth-child(11):checked~.tab-panels>.tab-panel:nth-child(6),
        .tabset>input:nth-child(13):checked~.tab-panels>.tab-panel:nth-child(7),
        .tabset>input:nth-child(15):checked~.tab-panels>.tab-panel:nth-child(8),
        .tabset>input:nth-child(17):checked~.tab-panels>.tab-panel:nth-child(9),
        .tabset>input:nth-child(19):checked~.tab-panels>.tab-panel:nth-child(10) {
            display: block;
        }

        .tabset>label {
            position: relative;
            display: inline-block;
            padding: 15px 17px 15px;
            border: 1px solid #002576;
            cursor: pointer;
            font-weight: 600;
            background: #fff;
            color: #002576;
            margin-bottom: 0;
            border-bottom: 0;
        }

        /*.tabset > label::after { content: "";  position: absolute; left: 15px;bottom: 10px; width: 22px; height: 4px; background: #8d8d8d; }*/
        .tabset>label:hover,
        .tabset>input:focus+label {
            color: #06c;
        }

        .tabset>label:hover::after,
        .tabset>input:focus+label::after,
        .tabset>input:checked+label::after {
            background: #06c;
        }

        .tabset>input:checked+label {
            margin-bottom: -1px;
            background: #012676;
            color: #fff;
        }

        .tab-panel {
            padding: 30px 0;
            border-top: 1px solid #ccc;
        }

        .tabset {
            max-width: 100%;
        }

        .entry-description h3 {
            margin-top: 22px !important;
        }

        .con p {
            text-align: justify;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .tabset>label:hover,
        .tabset>input:focus+label {
            color: #fff;
        }

        .opu {
            border: 5px ridge #ccc;
            box-shadow: 5px 5px 5px #ccc;
            padding: 20px;
            background: #fff;
            margin: 50px 0;
        }

        .opu p {
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            line-height: 30px;
        }

        .opu p b {
            color: #012676;
            font-size: 28px
        }

        .opu h3 {
            margin-top: 0;
            margin-bottom: 15px;
            text-align: center;
            font-weight: bold;
            color: #012676;
            font-size: 24px
        }

        .book h4 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 60px;
            color: #002576;
            margin-top: 60px;
            text-transform: uppercase;
        }

        .book p {
            font-size: 16px;
            line-height: 25px;
        }

        .scopus h3 {
            text-align: left;
            font-weight: bold;
            color: #c52521;
            font-size: 24px;
            margin-bottom: 40px;
        }

        .scopus h5 {
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .scopus ol {
            padding-left: 15px;
        }

        .scopus ol li {
            font-size: 16px;
            line-height: 25px;
        }

        .card .card-image img {
            width: 100%;
        }

        .card {
            border: 1px solid #ccc;
            margin-bottom: 25px;
            width: 48%;
            float: left;
            margin-left: 10px;
            margin-right: 10px;
            padding: 15px;
            min-height: 250px;
        }

        .card h5 {
            text-align: left;
            font-weight: 600;
            font-size: 16px;
            color: #012676;
            line-height: 22px;
            margin-top: 0;
        }

        .card strong {
            font-weight: 600 !important;
            font-size: 16px;
        }

        .card p {
            text-align: left;
            font-size: 16px;
        }


        .ded .card .card-image img {
            width: 100%;
        }

        .ded .card {
            border: 1px solid #ccc;
            margin-bottom: 25px;
            width: 48%;
            float: left;
            margin-left: 10px;
            margin-right: 10px;
            padding: 15px;
            min-height: 220px;
        }

        .ded .card h5 {
            text-align: left;
            font-weight: 600;
            font-size: 16px;
            color: #012676;
            line-height: 22px;
            margin-top: 0;
            margin-bottom: 5px;
        }

        .ded .card strong {
            font-weight: 600 !important;
            font-size: 16px;
        }

        .ded .card p {
            text-align: left;
            font-size: 16px;
        }


        .googl .card .card-image img {
            width: 100%;
        }

        .googl .card {
            border: 1px solid #ccc;
            margin-bottom: 25px;
            width: 48%;
            float: left;
            margin-left: 10px;
            margin-right: 10px;
            padding: 15px;
            min-height: 195px;
        }

        .googl .card h5 {
            text-align: left;
            font-weight: 600;
            font-size: 16px;
            color: #012676;
            line-height: 22px;
            margin-top: 0;
            margin-bottom: 5px;
        }

        .googl .card strong {
            font-weight: 600 !important;
            font-size: 16px;
        }

        .googl .card p {
            text-align: left;
            font-size: 16px;
        }

        .googl h3 {
            text-align: left;
            font-weight: bold;
            color: #c52521;
            font-size: 24px;
            margin-bottom: 40px;
        }


        .ug .card .card-image img {
            width: 100%;
        }

        .ug .card {
            border: 1px solid #ccc;
            margin-bottom: 25px;
            width: 48%;
            float: left;
            margin-left: 10px;
            margin-right: 10px;
            padding: 15px;
            min-height: 195px;
        }

        .ug .card h5 {
            text-align: left;
            font-weight: 600;
            font-size: 16px;
            color: #012676;
            line-height: 22px;
            margin-top: 0;
            margin-bottom: 5px;
        }

        .ug .card strong {
            font-weight: 600 !important;
            font-size: 16px;
        }

        .ug .card p {
            text-align: left;
            font-size: 16px;
        }

        .ug h3 {
            font-weight: bold;
            color: #c52521;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .msg-sec p {
            text-align: justify;
        }

        .journal-btn {
            background: #012676;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-weight: 600;
            margin: 10px 0;
        }

        .journal-btn:hover {
            text-decoration: none;
            color: #ff0;
        }

        .journal-btn:focus {
            text-decoration: none;
            color: #ff0;
        }

        .float-left {
            float: left;
        }

        .float-right {
            float: right;
            background: none;
            color: #f75d03;
            cursor: auto;
            font-size: 16px;
        }

        .float-right:hover {
            text-decoration: none;
            color: #000;
        }

        .float-right:focus {
            text-decoration: none;
            color: #000;
        }

        .publ {
            width: 100%;
            float: left;
            margin-top: 15px;
        }

        .publ p {
            margin-bottom: 0;
        }

        hr.new1 {
            border-top: 1px solid #333;
            width: 100%;
            float: left;
            margin-bottom: 40px;
        }

        .con h1 {
            text-align: center;
            margin-top: 0;
            font-weight: bold;
            font-size: 30px;
            color: #1365af;
        }

        @media screen and (max-width: 767px) {
            .date {
                margin: -14px -14px !important;
                padding-bottom: 0px;
            }

            .ded .card {
                width: 100%;
            }

            .card {
                width: 100%;
            }

            .googl .card {
                width: 100%;
            }

            .ded .card {
                width: 100%;
            }

            .ug .card {
                width: 100%;
            }

            .tabset>input:checked+label {
                margin-bottom: 5px;
            }
        }

        /* Load more */
        .load {
            width: 99%;
            background: #15a9ce;
            text-align: center;
            color: white;
            padding: 10px 0px;
            font-family: sans-serif;
        }

        .load:hover {
            cursor: pointer;
        }

        .vid-txt {
            float: left;
            width: 100%;
            margin-top: 30px;
        }

        .vid-txt p {
            text-align: justify;
        }

        .vid-txt h2 {
            font-weight: bold;
        }

        .vid-txt ul {}

        .vid-txt ul li {}
    </style>
@endsection

@section('content')
    @include('layout-en.header')
    <div class="tm-main-content" id="top">
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 style="font-size: 23px;">Journal</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{ route('home') }}">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Journal Publication</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body">
                <div class="list">
                    <div class="main">
                        <div class="container data-cont">
                            <div class="book">
                                <h4>Top Journals with Impact Factors</h4>
                            </div>
                        </div>
                        <div id="content1">
                            <div id="main">
                                <div class="container">
                                    <div id="wrapper">
                                        <div id="main">
                                            <div class="container">
                                                <div class="upcoming">
                                                    <div class="tabset">

                                                        @foreach ($tab_title as $key => $tab)
                                                            <input type="radio" name="tabset" id="tab{{ $key }}"
                                                                aria-controls="marzen{{ $key }}"
                                                                {{ $key == 0 ? 'checked' : '' }}>
                                                            <label for="tab{{ $key }}"
                                                                atab="marzen{{ $key }}">{{ $tab }}</label>
                                                        @endforeach
                                                        <div class="tab-panels">

                                                            @foreach ($whole_data as $key => $value)
                                                                @php
                                                                    $id = 'marzen' . $key;
                                                                @endphp

                                                                <section id="{{ $id }}" class="tab-panel">
                                                                    <div class="scopus">
                                                                        <h3>{{ $tab_title[$key] }}</h3>
                                                                        <div class="row">
                                                                            @foreach ($value as $item)
                                                                                @php
                                                                                    if ($key == 0) {
                                                                                        $href =
                                                                                            'https://www.ardaconference.com/journals/scopus-indexed/paper-submission?jid=' .
                                                                                            $item['id'];
                                                                                    } elseif ($key == 1) {
                                                                                        $href =
                                                                                            'https://www.ardaconference.com/journals/ugc-care-list/paper-submission?jid=' .
                                                                                            $item['id'];
                                                                                    } elseif ($key == 2) {
                                                                                        $href =
                                                                                            'https://www.ardaconference.com/journals/web-of-science/paper-submission?jid=' .
                                                                                            $item['id'];
                                                                                    } elseif ($key == 3) {
                                                                                        $href =
                                                                                            'https://www.ardaconference.com/journals/google-scholar/paper-submission?jid=' .
                                                                                            $item['id'];
                                                                                    }
                                                                                @endphp
                                                                                <div class="card" style="height:200px;">
                                                                                    <div class="row">
                                                                                        @if ($item['q1'] != 'empty')
                                                                                            <div
                                                                                                class="col-lg-3 col-sm-4 col-md-4 col-4">
                                                                                                <div class="card-image"><img
                                                                                                        src="{{ $item['q1'] }}"
                                                                                                        style="border: 2px solid #27a4ba;">
                                                                                                </div>
                                                                                            </div>
                                                                                        @endif
                                                                                        @if ($item['q1'] == 'empty')
                                                                                            <div
                                                                                                class="col-lg-12 col-sm-8 col-md-8 col-8 j-name">
                                                                                                <h5>{{ $item['name'] }}
                                                                                                </h5>
                                                                                                <p><strong
                                                                                                        style="color:#27a4ba;">ISSN
                                                                                                        :</strong>{{ $item['issn'] }}
                                                                                                </p>
                                                                                                <p><strong
                                                                                                        style="color:#27a4ba;">Indexed
                                                                                                        In
                                                                                                        :</strong>{{ $item['indexed'] }}
                                                                                                </p>
                                                                                            </div>
                                                                                        @else
                                                                                            <div
                                                                                                class="col-lg-9 col-sm-8 col-md-8 col-8 j-name">
                                                                                                <h5>{{ $item['name'] }}
                                                                                                </h5>
                                                                                                <p><strong
                                                                                                        style="color:#27a4ba;">ISSN
                                                                                                        :</strong>{{ $item['issn'] }}
                                                                                                </p>
                                                                                                <p><strong
                                                                                                        style="color:#27a4ba;">Indexed
                                                                                                        In
                                                                                                        :</strong>{{ $item['indexed'] }}
                                                                                                </p>
                                                                                            </div>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div>
                                                                                        <a href="{{ $href }}"
                                                                                            target="_blank"
                                                                                            class="journal-btn float-left"
                                                                                            style="font-family:arial;">Submit
                                                                                            Paper</a>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layout-en.footer')
    @endsection


    @section('script')
        <script></script>
    @endsection
