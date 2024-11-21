@extends('layout-fr.master')

@section('meta')
    <title>{{ str_replace(['@city', '@month'], [$cityNameFr, $monthNameFr], $content['title']) }}</title>
    <meta name="keyword" content="{{ str_replace(['@city', '@month'], [$cityNameFr, $monthNameFr], $content['metaKey']) }}" />
    <meta name="description" content="{{ str_replace(['@city', '@month'], [$cityNameFr, $monthNameFr], $content['metaDes']) }}" />

    <meta property="og:title" content="{{ str_replace(['@city', '@month'], [$cityNameFr, $monthNameFr], $content['title']) }}" />
    <meta property="og:keywords"
        content="{{ str_replace(['@city', '@month'], [$cityNameFr, $monthNameFr], $content['metaKey']) }}" />
    <meta property="og:description"
        content="{{ str_replace(['@city', '@month'], [$cityNameFr, $monthNameFr], $content['metaDes']) }}" />

    <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('style')
@endsection

@section('content')
    @include('layout-fr.header')
    <div class="tm-main-content" id="top">
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ $cityNameFr }} / {{ $monthNameFr }}</h2>
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
                                        <legend> <span class="fld_hed text-capitalize">{{ $cityNameFr }}</span>
                                        </legend>
                                        <div class="county-conference">
                                            <div class="col-md-12">
                                                <h1 style=" font-size: 18px;font-family:Gill Sans;">
                                                    {{ str_replace(['@city', '@month'], [$cityNameFr, $monthNameFr], $content['h1']) }}
                                                </h1>
                                                <p>{{ str_replace(['@city', '@month'], [$cityNameFr, $monthNameFr], $content['contentOne']) }}
                                                </p>
                                                <p>{{ str_replace(['@city', '@month'], [$cityNameFr, $monthNameFr], $content['contentTwo']) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="eve-prom">
                                        <div class="col-xs-12 text-justify">
                                            @include ('components-fr.main-filter-city')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">                                  
                                    <div class="p-4 mt-4" style="background-color: #f5f7fd: font-weight: 700">
                                        <h3 class="text-center mb-4 p-2" style="color: #b03031">Liste de toutes les
                                            conférences</h3>
                                        <div class="row bg-dark text-white py-2">
                                            <div class="col-2">Date</div>
                                            <div class="col-7">Nom de la conférence</div>
                                            <div class="col-3">Lieu</div>
                                        </div>
                                        @include ('components-fr.event-listing')
                                    </div>
                                    @include ('components-fr.load-more')
                                </div>
                                @include('components-fr.city-side-banner')
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('layout-fr.footer')
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
                var month = "{{ request()->month }}";
                fetchLoadMoreEvents(city, month, page);
            });

            // load more button for mobile
            function fetchLoadMoreEvents(city, month, page) {
                $.ajax({
                    url: "{{ route('city-month-ajax') }}",
                    type: "GET",
                    data: {
                        city: city,
                        month: month,
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
            var slectedType = "city_select";
            fetch_country(city, slectedType);
            // passing to main-filter page
        });
    </script>
@endsection
