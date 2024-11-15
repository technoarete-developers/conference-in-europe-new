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
                        <h2>{{ str_replace('-', ' ', request()->city) }}</h2>
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
                                                class="fld_hed text-capitalize">{{ str_replace('-', ' ', request()->city) }}</span>
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
                                            @include ('components-en.main-filter-city')
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
                                @include('components-en.city-side-banner')
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
                var subtopic = "{{ request()->subtopic }}";
                var month = "{{ request()->month }}";
                fetchLoadMoreEvents(city, subtopic, month, page);
            });

            // load more button for mobile
            function fetchLoadMoreEvents(city, subtopic, month, page) {
                $.ajax({
                    url: "{{ route('city-ajax') }}",
                    type: "GET",
                    data: {
                        city: city,
                        subtopic: subtopic,
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
            var city = '{{ request()->city }}';
            var slectedType = "country_select";
            fetch_country(city, slectedType);
            // passing to main-filter page
        });
    </script>
@endsection
