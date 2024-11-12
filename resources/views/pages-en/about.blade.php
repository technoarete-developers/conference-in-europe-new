@extends('layout-en.master')

@section('meta')
    <title>Conference in Europe About us</title>
    <meta name="keyword" content="" />
    <meta name="description"
        content="Conference in Europe {{ date('Y') }} aims to bring all the information of upcoming events in various fields. It's your top destination for getting the latest alerts on all the updates." />

    <meta property="og:title" content="Conference in Europe About us" />
    <meta property="og:keywords" content="" />
    <meta property="og:description"
        content="Conference in Europe {{ date('Y') }} aims to bring all the information of upcoming events in various fields. It's your top destination for getting the latest alerts on all the updates." />

    <link rel="canonical" href="{{ url(Request::url()) }}" />
@endsection

@section('style')
@endsection

@section('content')
    @include('layout-en.header')
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>About</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tm-page-wrap mx-auto">
        <section class="p-5 tm-container-outer tm-bg-gray">
            <div class="container">
                <div class="">
                    <div class="col-xs-12 mx-auto text-justify">
                        <h6 class="mb-4 tdd-cont">Looking For a Convenient & Reliable Way to Learn About Upcoming
                            Conferences? Look No Further!</h6>
                        <p class="mb-4 abt-cont">Conference in Europe is a one-stop platform for all the latest and reliable
                            information on upcoming high-level discussions. We are glad to assist budding academicians,
                            researchers, and applicants in finding accurate information on upcoming conferences in various
                            parts and countries of Europe. This platform will give you timely information on booking,
                            venues, schedules and much more. We want you to focus on your main goals while we will assist
                            you with upcoming events that can boost you.</p>
                        <p class="mb-4 abt-cont">Moreover, you will get customised alerts based on your preference and
                            location after subscribing. This is the most straightforward way to know about events concerning
                            your field. We would love to simplify your conference journey with the most comprehensive and
                            user-friendly conference notification service. You can explore and participate in these events
                            to gain incredible information about your field. Also, you will get a professional and
                            personality boost with active participation, socialising, and speaking opportunities. Not to
                            mention, you can also present your research, ideas and gain valuable feedback and acclaim.</p>
                        <p class="mb-4 abt-cont">So, subscribe here to experience knowledge, connections, and growth.</p>
                    </div>
                </div>
            </div>
        </section>
        @include('layout-en.footer')
    @endsection
    @section('script')
        <script></script>
    @endsection
