@php
    $cityName = ucfirst(str_replace('-', ' ', request()->city));
    $topicName = ucfirst(str_replace('-', ' ', request()->topic));
@endphp

@extends('layout-en.master')

@section('meta')
    <title>{{ str_replace(['@city', '@topic'], [$cityName, $topicName], $content['title']) }}</title>
    <meta name="keyword" content="{{ str_replace(['@city', '@topic'], [$cityName, $topicName], $content['metaKey']) }}" />
    <meta name="description" content="{{ str_replace(['@city', '@topic'], [$cityName, $topicName], $content['metaDes']) }}" />

    <meta property="og:title" content="{{ str_replace(['@city', '@topic'], [$cityName, $topicName], $content['title']) }}" />
    <meta property="og:keywords"
        content="{{ str_replace(['@city', '@topic'], [$cityName, $topicName], $content['metaKey']) }}" />
    <meta property="og:description"
        content="{{ str_replace(['@city', '@topic'], [$cityName, $topicName], $content['metaDes']) }}" />

    <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('style')
@endsection

@section('content')
    @include('layout-en.header')
    <div class="tm-main-content" id="top">
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ $cityName }} / {{ $topicName }}</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="tm-page-wrap mx-auto">
            <div class="form-bg  tm-bg-gray">
                <div class="row">
                    <div class="col-md-12">
                        <div class="toppage">
                            <div class="row">
                                <div class="col-sm-12 topic-midule-grid">
                                    <div class="topic-date-cnfr">
                                        <legend> <span class="fld_hed text-capitalize">{{ $cityName }}</span>
                                        </legend>
                                        <div class="county-conference">
                                            <div class="col-md-12">
                                                <h1 style=" font-size: 18px;font-family:Gill Sans;">
                                                    {{ str_replace(['@city', '@topic'], [$cityName, $topicName], $content['h1']) }}
                                                </h1>
                                                <p>{{ str_replace(['@city', '@topic'], [$cityName, $topicName], $content['contentOne']) }}
                                                </p>
                                                <p>{{ str_replace(['@city', '@topic'], [$cityName, $topicName], $content['contentTwo']) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="eve-prom">
                                        <div class="col-xs-12 text-justify">
                                            @include ('components-en.main-filter-city')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 topic-midule-grid">
                                    <div class="p-4 mt-4" style="background-color: #f5f7fd: font-weight: 700">
                                        <h3 class="text-center mb-4 p-2 list-head" style="color: #b03031">All Conference List</h3>
                                        <div class="row bg-dark text-white py-2">
                                            <div class="col-2">Date</div>
                                            <div class="col-7">Conference Name</div>
                                            <div class="col-3">Venue</div>
                                        </div>
                                        @include ('components-en.event-listing')
                                    </div>
                                    @include ('components-en.load-more')
                                </div>
                                @include('components-en.side-banner')
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('layout-en.footer')
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            // load more button for mobile
            $('#load-more-btn').on('click', function(event) {
                event.preventDefault();
                var currentPage = $(this).data('current-page');
                var page = currentPage + 1;
                var city = "{{ request()->city }}";
                var topic = "{{ request()->topic }}";
                fetchLoadMoreEvents(city, topic, page);
            });

            // load more button for mobile
            function fetchLoadMoreEvents(city, topic, page) {
                $.ajax({
                    url: "{{ route('city-ajax') }}",
                    type: "GET",
                    data: {
                        city: city,
                        subtopic: topic,
                        page: page
                    },
                    beforeSend: function() {
                        $(".load-more").hide();
                        $(".loading-button").show();
                    },
                    success: function(data) {
                        $('#events-container').append(data.eventsAjax);

                        // here page number passeed to pagination mobile page
                        var newPage = page;
                        $("#load-more-btn").data('current-page', newPage);

                        $(".load-more").show();
                        $(".loading-button").hide();
                    },
                });
            }
        });


        $(document).ready(function() {

            $(".select_sub_topics").select2({
                width: '100%',
                theme: "classic"
            });
            $(".select_months").select2({
                width: '100%',
                theme: "classic"
            });
            $(".select_countries").select2({
                width: '100%',
                theme: "classic"
            });
            $(".select_cities").select2({
                width: '100%',
                theme: "classic"
            });

            var city = '{{ request()->city }}';
            var slectedType = "city";
            fetch_country(city, slectedType);
            // passing to main-filter page
        });
    </script>
@endsection
