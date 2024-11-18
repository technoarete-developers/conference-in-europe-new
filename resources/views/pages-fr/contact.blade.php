@extends('layout-fr.master')

@section('meta')
    <title>Contact | Conference in Europe | International Conference</title>
    <meta name="keyword" content="" />
    <meta name="description"
        content="Contact us to know about the latest international conferences from conference in europe" />

    <meta property="og:title" content="Contact | Conference in Europe | International Conference" />
    <meta property="og:keywords" content="" />
    <meta property="og:description"
        content="Contact us to know about the latest international conferences from conference in europe" />

       <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('style')
@endsection

@section('content')
    @include('layout-fr.header')
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tm-page-wrap mx-auto">
        <div class="form-bg p-5 tm-container-outer tm-bg-gray">
            <div class="container">
                <div class="row mainrow">
                    <div class="col-md-6">
                        @if (session()->has('smessage'))
                            <div class="alert alert-success"> {{ session()->get('smessage') }} </div>
                        @endif
                        <form method="POST" id="contact-form" class="well form-horizontal"
                            action="{{ route('contact-form') }}">
                            @csrf
                            <div class="form-group">
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <input name="name" placeholder="Enter Name" class="form-control" type="text"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"
                                                aria-hidden="true"></i></span>
                                        <input name="email" placeholder="Enter E-Mail Address" class="form-control"
                                            type="text" required>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"
                                                aria-hidden="true"></i></span>
                                        <input name="mobile_no" placeholder="Enter Mobile Number" class="form-control"
                                            type="text" required>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i></span>
                                        <input name="country" placeholder="Enter Place" class="form-control" type="text"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"
                                                aria-hidden="true"></i></span>
                                        <select id="topic" name="topic" class="field form-control text-capitalize" required>
                                            <option value="">Select Topic</option>
                                            @foreach ($topicList as $topic => $subtopic)
                                                <option value="{{ str_replace('-', ' ', $topic) }}">
                                                    {{ str_replace('-', ' ', $topic) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="captcha" id="captcha">

                            <div class="col-md-12 form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                            data-action="{{ route('subscribe-form') }}"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-danger" name="btnsubmit"  onclick="onClick(event)"
                                        style="background-color:#b00000;border-color: #b00000; color: #fff;">Submit
                                        <span class="glyphicon glyphicon-send"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="subsc">
                            <div class="main-heading" style="text-align:center;">
                                <h3 style="color:#000;font-weight:bold">CONFERENCE IN EUROPE</h3>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> info@conferenceineurope.net</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> 91-8925031783</p>
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
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script>
        function onClick(e) {
            e.preventDefault();

            const form = document.getElementById("contact-form");

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // captcha v3
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    document.getElementById('captcha').value = token;
                    document.getElementById('contact-form').submit();
                });
            });
        }

    </script>
@endsection
