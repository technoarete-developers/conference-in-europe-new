@extends('layout-en.master')

@section('meta')
@endsection

@section('style')
    <style>
        .marqq {
            background: linear-gradient(90deg, rgba(137, 135, 158, 1) 9%, rgba(9, 9, 121, 1) 65%, rgba(41, 66, 71, 1) 100%);
            padding: 10px 10px 6px 10px;
            color: #fff;
            font-size: 16px;

        }


        /* New CSS Start (02-09-2022) */

        @media (max-width: 575.98px) {
            .boxing-tab a {
                width: 47%;
                min-height: 75px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .boxing-tab a {
                min-height: 75px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .boxing-tab a {
                min-height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        .boxing-tab a {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .global-page-header {
            width: 100%;
            background-size: cover;
        }

        .new-width {
            max-width: 100%;
        }

        .titleline {
            position: relative;
            width: 40%;
            border-top: 3px solid #f12424;
            margin-bottom: 15px;
            margin-left: 30%;
        }

        .heading {
            font-weight: 600;
            font-family: open sans-serif;
            font-size: 23px;
        }
    </style>
@endsection

@section('content')
    @include('layout-en.header')
    <div class="tm-main-content" id="top">
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-capitalize py-4">
                            <h2>{{ str_replace('-', ' ', request()->topics) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="marqq">
            <div class="container-fluid">
                <h1 class="heading" style="text-align: center;text-transform: uppercase;"><b>Subtopics of Business</b</h1>
                        <div class="titleline"> </div>
            </div>
        </div>
        <div class="tm-page-wrap mx-auto container">
            <div class="form-bg p-5 tm-container-outer tm-bg-gray">
                <div class="container">
                    <div class="row mainrow">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2 bhoechie-tab-menu">
                                    <div class="list-group">
                                        @foreach ($topicList as $topic => $subtopic)
                                            <a class="list-group-item text-center topic-link {{ $topic }} text-capitalize"
                                                id="{{ $topic }}" data-topic="{{ $topic }}"
                                                data-subtopics="{{ json_encode($subtopic) }}">
                                                {{ str_replace('-', ' ', $topic) }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-10 col-xs-10 bhoechie-tab" id="bhoechie">
                                    <div class="bhoechie-tab-content active">
                                        <div class="selected boxing-tab subtopics-container ">

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
    @include('layout-en.footer')
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var topicList = @json($topicList);

            var firstTopic = $('.topic-link').first().data('topic');
            $('.topic-link').first().addClass('active');
            displaySubtopics(firstTopic);

            $('.topic-link').on('click', function() {
                $('.topic-link').removeClass('active');
                $(this).addClass('active');

                var selectedTopic = $(this).data('topic');

                displaySubtopics(selectedTopic);
            });


            function displaySubtopics(topics) {

                if (topicList[topics]) {
                    var subTopics = topicList[topics];
                    $('.subtopics-container').empty();

                    $.each(subTopics, function(index, subTopic) {
                        var subTopicUrl = "{{ route('topic-page', ['topic' => ':subTopic']) }}";
                        subTopicUrl = subTopicUrl.replace(':subTopic', index.replace(/\s+/g, '-'));

                        var displaySubTopic = subTopic.replace(/-/g, ' ');

                        $('.subtopics-container').append(
                            '<a href="' + subTopicUrl + '">' + displaySubTopic + '</a>'
                        );
                    });
                }
            }

        });
    </script>
@endsection
