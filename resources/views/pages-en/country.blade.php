@extends('layout-en.master')

@section('meta')
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
                        <h2>{{ str_replace('-', ' ', request()->country) }}</h2>
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
                                <div class="col-sm-9 topic-midule-grid">
                                    <div class="topic-date-cnfr">
                                        <legend> <span
                                                class="fld_hed text-capitalize">{{ str_replace('-', ' ', request()->country) }}</span>
                                        </legend>
                                        <div class="county-conference">
                                            <div class="col-md-12">
                                                {{-- <h1 style=" font-size: 18px;font-family:Gill Sans;"><b>
                                                            <?php echo $line; ?></b> </h1>
                                                    <p><?php echo $para; ?></p>
                                                    <p><?php echo $para1; ?></p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="eve-prom">
                                        <div class="col-xs-12 text-justify">
                                            @include ('components-en.main-filter')
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
                                @include('components-en.country-side-banner')
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
                var country = "<?php echo request()->country; ?>";
                fetchLoadMoreEvents(country, page);
            });

            // load more button for mobile
            function fetchLoadMoreEvents(country, page) {
                $.ajax({
                    url: "{{ route('country-ajax') }}",
                    type: "GET",
                    data: {
                        country: country,
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
            setTimeout(function() {
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
            }, 3000);
            country = '{{ request()->country }}';
            fetch_country(country);
        });

        function search() {
            $('.search_loading').text("loading...")
            $('.search_loading').css("background-color", "rgb(24 62 131)");
            $('.search_loading').css("border-color", "blue");
        }

        function fetch_country(country) {
            $('.hero').removeClass('loaded')
            $('.hero').addClass('loading');
            const fetch_country_api = async () => {
                const response = await fetch('{{ route('subtopics-fetch-api') }}', {
                    method: 'POST',
                    body: JSON.stringify({
                        "country": country,
                    }),
                });
                const myJson = await response.json();
                $('.hero').removeClass('loading')
                $('.hero').addClass('loaded');

                Object.keys(myJson).forEach(function(topicName) {

                    const subtopics = myJson[topicName];

                    if (Object.entries(subtopics).length === 0) {

                        $('#' + topicName + '_ul').append(
                            $(`<li><button class="subnav-item" 
                            value="No Subtopics for ${topicName}">
                            No Subtopics for ${topicName}
                        </button></li>`)
                        );
                    } else {
                        Object.entries(subtopics).forEach(([subTopicUrl, subTopicName]) => {
                            $('#' + topicName + '_ul').append(
                                $(`<li style="list-style-type: disclosure-closed;"><button class="subnav-item" 
                            onclick="subtopic_click('${subTopicName}');" 
                            value="${subTopicUrl}">
                        ${subTopicName}
                    </button></li>`)
                            );
                        });
                    }
                });
            }
            fetch_country_api();
        }
    </script>   
@endsection
