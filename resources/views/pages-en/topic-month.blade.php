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
                        <h2>{{ str_replace('-', ' ', request()->topic) }}</h2>
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
                                                class="fld_hed text-capitalize">{{ str_replace('-', ' ', request()->topic) }}</span>
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
                                            @include ('components-en.main-filter-topic')
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
                var country = "{{ request()->country }}";
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
