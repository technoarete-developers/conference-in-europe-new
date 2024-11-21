@extends('layout-en.master')

@section('meta')
    <title>Are you searching for Conferences? Find the latest Europe conferences in 2024</title>
    <meta name="keyword"
        content="conference alert,conference alerts 2023, conferences in Europe, International conferences 2023, Academic conferences 2023, conference alerts in Europe, upcoming conferences in Europe 2023, International conference in europe 2023." />
    <meta name="description"
        content="Are you searching for Conferences?  Find the latest Europe conferences in 2024. Subscribe and get notification of Conference in europe 2024 from our portal." />

    <meta property="og:title" content="Are you searching for Conferences? Find the latest Europe conferences in 2024" />
    <meta property="og:keywords"
        content="conference alert,conference alerts 2023, conferences in Europe, International conferences 2023, Academic conferences 2023, conference alerts in Europe, upcoming conferences in Europe 2023, International conference in europe 2023." />
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
                        <h2>{{ str_replace('-', ' ', request()->keyword) }}</h2>
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
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" style="border: 2px solid;border-radius: 10px;"
                                                    name="search" id="myInput" class="form-control"
                                                    onkeyup="myFunction()"
                                                    placeholder="Search events by keyword or conference details.." />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="p-4 mt-4" style="background-color: #f5f7fd: font-weight: 700">
                                        <h3 class="text-center mb-4 p-2" style="color: #b03031">All Conference List</h3>
                                        <div class="row bg-dark text-white py-2">
                                            <div class="col-2">Date</div>
                                            <div class="col-7">Conference Name</div>
                                            <div class="col-3">Venue</div>
                                        </div>
                                        @include ('components-en.event-listing')
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
                fetchLoadMoreEvents(keyword, page);
            });

            // load more button for mobile
            function fetchLoadMoreEvents(keyword, page) {
                $.ajax({
                    url: "{{ route('advance-search-ajax') }}",
                    type: "GET",
                    data: {
                        keyword: keyword,
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
    </script>
@endsection
