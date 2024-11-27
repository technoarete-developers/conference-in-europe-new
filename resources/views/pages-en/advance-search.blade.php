@extends('layout-en.master')

@section('meta')
    <title>Are you searching for Conferences? Find the latest Europe conferences in {{ date('Y') }}</title>
    <meta name="keyword"
        content="conference alert,conference alerts {{ date('Y') }}, conferences in Europe, International conferences {{ date('Y') }}, Academic conferences {{ date('Y') }}, conference alerts in Europe, upcoming conferences in Europe {{ date('Y') }}, International conference in europe {{ date('Y') }}." />
    <meta name="description"
        content="Are you searching for Conferences?  Find the latest Europe conferences in 2024. Subscribe and get notification of Conference in europe 2024 from our portal." />

    <meta property="og:title" content="Are you searching for Conferences? Find the latest Europe conferences in 2024" />
    <meta property="og:keywords"
        content="conference alert,conference alerts {{ date('Y') }}, conferences in Europe, International conferences {{ date('Y') }}, Academic conferences {{ date('Y') }}, conference alerts in Europe, upcoming conferences in Europe {{ date('Y') }}, International conference in europe {{ date('Y') }}." />
    <meta property="og:description"
        content="Are you searching for Conferences?  Find the latest Europe conferences in 2024. Subscribe and get notification of Conference in europe 2024 from our portal." />

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
                        <h2> {{ str_replace('-', ' ', request()->keyword) }}
                            {{ request()->country ? '/ ' . str_replace('-', ' ', request()->country) : '' }}
                            {{ request()->city ? '/ ' . str_replace('-', ' ', request()->city) : '' }}
                            {{ request()->topic ? '/ ' . str_replace('-', ' ', request()->topic) : '' }}
                            {{ request()->month ? '/ ' . str_replace('-', ' ', request()->month) : '' }}</h2>
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
                                        <div class="county-conference">
                                            <div class="col-md-12">
                                                <h1 style=" font-size: 18px;font-family:Gill Sans;">Upcoming
                                                    {{ request()->keyword }} in europe {{ date('Y') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="eve-prom">
                                        <div class="col-xs-12 text-justify">
                                            @include ('components-en.main-filter-search')
                                        </div>
                                    </div>
                                    <div class="p-4 mt-4" style="background-color: #f5f7fd: font-weight: 700">
                                        @if ($events->isNotEmpty())
                                            <h3 class="text-center mb-4 p-2" style="color: #b03031">All Conference List</h3>
                                            <div class="row bg-dark text-white py-2">
                                                <div class="col-2">Date</div>
                                                <div class="col-7">Conference Name</div>
                                                <div class="col-3">Venue</div>
                                            </div>
                                            @include ('components-en.event-listing')
                                        @else
                                            <h2 class="text-capitalize fs-3">No results for {{ request()->keyword }}
                                                {{ request()->country ? '/ ' . str_replace('-', ' ', request()->country) : '' }}
                                                {{ request()->city ? '/ ' . str_replace('-', ' ', request()->city) : '' }}
                                                {{ request()->topic ? '/ ' . str_replace('-', ' ', request()->topic) : '' }}
                                                {{ request()->month ? '/ ' . str_replace('-', ' ', request()->month) : '' }}.
                                            </h2>
                                            <p>Check your spelling or use more general terms</p>
                                        @endif
                                    </div>
                                    @include ('components-en.load-more')
                                </div>
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
                var keyword = "{{ request()->keyword }}";
                var city = "{{ request()->city }}";
                var country = "{{ request()->country }}";
                var topic = "{{ request()->topic }}";
                var month = "{{ request()->month }}";
                fetchLoadMoreEvents(keyword, country, city, topic, month, page);
            });

            // load more button for mobile
            function fetchLoadMoreEvents(keyword, country, city, topic, month, page) {
                $.ajax({
                    url: "{{ route('advance-search-ajax') }}",
                    type: "GET",
                    data: {
                        keyword: keyword,
                        country: country,
                        city: city,
                        topic: topic,
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
        });
    </script>
@endsection
