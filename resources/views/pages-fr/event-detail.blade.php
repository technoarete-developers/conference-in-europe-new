@extends('layout-fr.master')

@section('meta')
    @foreach ($events as $data)
        <title>
            {{ $data->event_name }}</title>
        <meta name="keyword" content="" />
        <meta name="description"
            content="{{ $data->event_name }} {{ $data->event_title }} portal and get lnformation in your inbox." />

        <meta property="og:title" content="{{ $data->event_name }}" />
        <meta property="og:keywords" content="" />
        <meta property="og:description"
            content="{{ $data->event_name }} {{ $data->event_title }} portal and get lnformation in your inbox." />

        <link rel="canonical" href="{{ url()->current() }}" />
    @endforeach
@endsection

@section('style')
    <style>
        body {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            font-size: 15px;
            font-weight: 400;
        }


        .tabs__buttons--container {
            display: flex;
            margin-bottom: 1rem;
        }

        .tabs-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-top: 53px;
        }

        .tabs__tab-btn {
            background: none;
            border: none;
            padding: 1rem 2rem;


            border-bottom: solid 2px blue;
        }

        .tabs__tab-btn--not-selected {
            border-bottom-color: #eeeeee;
        }

        .tabs__tab-btn:hover {
            /*  background-color: #eeeeee;*/
            transition: 0.3s;
        }

        .tabs__tab--hide {
            display: none;
        }

        .tabs__tab--show {
            display: block;
        }

        .tabs__tab {
            animation: tabApear 0.6s;
        }

        @keyframes tabApear {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mycontainer {
            display: flex;
        }

        .mycontainer>div {
            width: 33%;
        }

        * {
            box-sizing: border-box;
        }

        @media (max-width:768px) {
            .tabs__buttons--container {
                display: flex;
            }

            .container-fluid {
                background-color: white !important;
                padding: 0;
            }

            .container-fluid .col-md-8 {
                padding-right: 0px !important;
            }

            .tabs__tab-btn {
                padding: 6px;
                font-size: 13px;
            }
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 33%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        .tm-bg-gray {
            background-color: #F4F4F4 !important;
            margin-top: 15px !important;
        }

        .owl-carousel .owl-item img {
            display: inline !important;
            width: 7% !important;


        }

        .owl-next {
            display: block !important;
        }

        .owl-carousel .owl-next {

            width: 28px;
            height: 22px;
            margin-top: -81px;
            float: right;
            margin-right: -30px;
        }

        .owl-prev {
            display: none !important;
        }

        .card {
            text-align: left;
            height: 170px;

        }

        /* Custom styles for mobile responsiveness */
        @media (max-width: 767px) {
            .card {
                width: 100%;
                /* Adjust the width as needed */
                margin: 0 auto;
                /* Center the cards */
            }

            .card .item h6 {
                font-size: 14px;
                /* Adjust the font size as needed */
            }

            .card .item p {
                font-size: 12px;
                /* Adjust the font size as needed */
            }
        }


        .btn-primary {
            background: #d30824;
            border-radius: 1;

        }

        .tabs__buttons--container {
            display: flex;
        }

        .tabs__tab.active {
            display: block;
        }

        .tabs__tab-btn.active {
            border-bottom: 2px solid blue;
            /* Add border below active tab button */
        }

        .global-page-header {

            background: url(/img/event-banner-new.jpg)
        }

        .image-container {
            position: relative;
            width: 100%;
        }

        .img {
            width: 100%;
            display: block;
        }

        .image-text {
            position: absolute;
            bottom: 76px;
            /* Adjust the vertical position as needed */
            left: 10px;
            /* Adjust the horizontal position as needed */

            padding: 5px 15px;
            /* Adjust padding as needed */
            border-radius: 5px;
            font-size: 22px;
            color: white;
            text-align: center;
        }

        .image-container {
            position: relative;
            width: 100%;
        }

        .img {
            width: 100%;
            display: block;
        }

        .image-button {
            position: absolute;
            /* Positions the buttons relative to the image container */

            color: #fff;
            padding: 5px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .image-button:nth-child(1) {
            background-color: #ed0000;
            top: 70%;
            /* Adjust the positioning of the first button */
            left: 20%;
            /* Adjust the positioning of the first button */
        }

        .image-button:nth-child(2) {
            background-color: #0286FF;
            top: 70%;
            /* Adjust the positioning of the second button */
            left: 50%;
            /* Adjust the positioning of the second button */
        }

        .date-new {
            margin-top: 15px;
        }
    </style>
@endsection

@section('content')
    @include('layout-fr.header')
    <div class="tm-main-content" id="top">
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Détail de l'événement</h2>
                            <ol class="breadcrumb">
                                @foreach ($breadcrumbs as $breadcrumb)
                                    <li class="breadcrumb-item">
                                        <a
                                            href="{{ $breadcrumb['url'] }}">{{ str_replace('-', ' ', $breadcrumb['title']) }}</a>
                                    </li>
                                @endforeach
                                <li class="breadcrumb-item active" aria-current="page">Détail de l'événement</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-2 tm-container-outer tm-bg-gray">
            @if (session()->has('smessage'))
                <div class="alert alert-success" style="color: green; font-size: 25px; text-align: center; padding: 10px">
                    <h2>{{ session()->get('smessage') }} </h2>

                </div>
            @endif

            @foreach ($events as $eventing)
                @if (session()->has('smessage_subscribe'))
                    <div class="alert alert-success"
                        style="color: green; font-size: 25px; text-align: center; padding: 10px">
                        <h2>{{ session()->get('smessage_subscribe') }} ({{ $eventing->event_title }}) Conférence.</h2>
                    </div>
                @endif
            @endforeach

            <div class="container-fluid">

                @foreach ($events as $eventing)
                    <div class="row">

                        <div class="col-md-4">

                            <div class="image-container">
                                <img src="/img/imageicmb.png" alt="" class="img">
                                <div class="image-text">{{ $eventing->event_name }} ({{ $eventing->event_title }})</div>
                                <div class="button-container">
                                    @if (strpos($eventing->event_location, 'outside'))
                                        <a href="{{ $eventing->url }}" target="_blank"
                                            class="image-button outside-event">Participer</a>
                                    @else
                                        <a href="{{ $eventing->url }}{{ $eventing->event_id }}" target="_blank"
                                            class="image-button outside-event">Participer</a>
                                    @endif
                                    <a href="#" target="_blank" class="image-button" data-toggle="modal"
                                        data-target="#myModal">S’inscrire</a>
                                </div>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content moddd">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="event-text">Nous S’inscrire</h3>

                                            <form method="post" id="subscribe-form" name="google-sheet"
                                                class="contact-form e-subscribe-form" data-toggle="validator" novalidate>
                                                @csrf

                                                <input type="text" class="form-control" name="Name" id="name"
                                                    placeholder="Name" required="">

                                                <select id="slct1" name="Category" class="field form-control"
                                                    required="">
                                                    <option value="">--Sélectionner une catégorie--</option>
                                                    <option value="Listener">Auditeur</option>
                                                    <option value="Paper Presentation">Présentation de papier</option>
                                                    <option value="Others">Autres</option>
                                                </select>

                                                <input type="text" class="form-control" name="conference_name"
                                                    id="topic" value="{{ $eventing->event_name }}" readonly="">
                                                <input type="text" class="form-control" name="org" id="topic"
                                                    value="{{ $eventing->org }}" readonly="">
                                                <input type="text" class="form-control" name="ccity" id="topic"
                                                    value="{{ $eventing->city }}" readonly="">
                                                <input type="text" class="form-control" name="s_date" id="topic"
                                                    value="{{ $eventing->sdate }}" readonly="">
                                                <input type="text" name="Email" id="email"
                                                    placeholder="Email Address" class="form-control">
                                                <input type="text" name="Number" id="phone"
                                                    placeholder="Contact No" class="form-control">
                                                <input type="text" class="form-control" name="Country" id="country"
                                                    value="{{ $eventing->country }}" readonly="">

                                                <input type="text" name="university_org" id="university_org"
                                                    placeholder="University/Organisation" class="form-control">

                                                <input type="hidden" name="hide" value="">
                                                <input type="hidden" name="Source" value="Event Subscribe">
                                                <input type="hidden" name="conference_url"
                                                    value="{{ $eventing->url }},{{ $eventing->event_id }}">
                                                <input type="hidden" name="rid" value="{{ $eventing->event_id }}">
                                                <input type="hidden" name="sdeadd" value="{{ $eventing->sdead }}">
                                                <input type="hidden" name="rdeadd" value="{{ $eventing->rdead }}">
                                                <input type="hidden" name="eve_id" value="{{ $eventing->event_id }}">
                                                <input type="hidden" name="con_email"
                                                    value="{{ $eventing->contact_email }}">
                                                <input type="hidden" name="con_no"
                                                    value="{{ $eventing->contact_no }}">
                                                <input type="hidden" name="contact_person"
                                                    value="{{ $eventing->contact_person }}">

                                                <button type="submit" class="btn btn-primary submit mb-4 continue"
                                                    name="btnsubmit">Soumettre</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <p class="date-new"><img src="/img/ccalender.png"> &nbsp;
                                &nbsp;{{ date('dS-M-Y', strtotime($eventing->sdate)) }}<sup></sup> to
                                {{ date('dS-M-Y', strtotime($eventing->edate)) }}<sup></sup>
                            </p>
                            <p class="name"><img src="/img/location.png">&nbsp; &nbsp;
                                {{ $eventing->city }}, {{ $eventing->country }}
                            </p>
                            <hr>
                            <h4 class="org-details"><b>
                                    Détails de l'organisateur</b>
                            </h4>
                            <p class="new-user"><img src="/img/user-clock.png">&nbsp;
                                &nbsp;{{ $eventing->contact_person }}</p>
                            <p><img src="/img/caller.png">&nbsp; &nbsp;
                                {{ $eventing->contact_no }}
                            </p>
                            <p><img src="/img/gmail.png">&nbsp; &nbsp;
                                {{ $eventing->contact_email }}
                            </p>
                            <hr>
                            <h4 class="call-paper" style="color:#150371;"><b>Appel à communication</b>
                            </h4>
                            <ul class="paper-topics" style="line-height: 2;">
                                @if ($eventing->call_for_paper != null)
                                    <div>
                                        @php
                                            $topics = str_replace(
                                                ['<p>', '</p>', '<li>', '</li>', '<ul>', '</ul>', '<br />'],
                                                '',
                                                $eventing->call_for_paper,
                                            );
                                            $topicsSplit = preg_split('/<br>|,/', $topics);
                                        @endphp
                                        @foreach ($topicsSplit as $topic)
                                            @if ($topic != '' && $topic != ' ' && $topic != '0')
                                                <li><img src="/img/check-circle.png">&nbsp;
                                                    &nbsp; {{ $topic }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                @else
                                    <div>
                                        <h5>
                                            Pas d'appel à communication</h5>
                                    </div>
                                @endif
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <div class="description" style=" margin-top: 48px;">
                                <h2 style="color:#150371;"> <b>À propos de la conférence</b>
                                </h2>
                                <p style="text-align:justify;">À propos de la <span>{{ $eventing->event_name }}
                                        ({{ $eventing->event_title }})
                                        .</span>
                                    est un excellent moyen de créer du réseautage en engageant des discussions sur
                                    <span>{{ $eventing->topic }}</span> Sujets. Cette plateforme veut rassembler tous les
                                    étudiants, chercheurs et
                                    professionnels réunis sur une même scène pour discuter de nouvelles opportunités, idées
                                    et développements.
                                    La bioinformatique est un excellent moyen de créer du réseautage
                                </p>
                            </div>
                            <div class="tabs-container" style="height: 652px; overflow-y: auto;">
                                <div class="tabs__buttons--container">
                                    <div class="tabs__tab-btn" data-tab-id="agenda"><b>Ordre du jour</b></div>
                                    <div class="tabs__tab-btn" data-tab-id="registernow"><b>Inscrivez-vous maintenant</b>
                                    </div>
                                    <div class="tabs__tab-btn" data-tab-id="addtocalender"><b>Ajouter au calendrier</b>
                                    </div>
                                </div>

                                <div data-tab="agenda" class="tabs__tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about">
                                                <h4>Jour 1</h4>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr class="row-first">
                                                            <th class="first">Timing</th>
                                                            <th class="last">Session</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="first">9h00 - 9h30</td>
                                                            <td class="last">Inscription</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">9h30 - 10h00</td>
                                                            <td class="last">Présentation de WCASET</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">10h00 - 10h15</td>
                                                            <td class="last">Pause thé</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">10h15 - 13h00</td>
                                                            <td class="last">Séance technique avant le déjeuner</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">13h00 - 13h30</td>
                                                            <td class="last">Déjeuner</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">13h30 - 17h00</td>
                                                            <td class="last">Séance technique après le déjeuner</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about">
                                                <h4>Jour 2</h4>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="first">Timing</th>
                                                            <th class="last">Session</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="first">9h00 - 9h30</td>
                                                            <td class="last">Inscription</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">9h30 - 10h00</td>
                                                            <td class="last">Séance inaugurale</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">10h00 - 10h15</td>
                                                            <td class="last">Pause thé</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">10h15 - 13h00</td>
                                                            <td class="last">Séance technique avant le déjeuner</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">13h00 - 13h30</td>
                                                            <td class="last">Déjeuner</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">13h30 - 16h00</td>
                                                            <td class="last">Séance technique après le déjeuner</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first">16h00 - 17h00</td>
                                                            <td class="last">Distribution de certificats</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-tab="registernow" class="tabs__tab">
                                    <div class="paym">
                                        <h4>Les frais d’inscription des auteurs/co-auteurs comprennent :</h4>
                                        <ul class="list-h">
                                            <li>Participation au programme technique de deux auteurs/co-auteurs maximum
                                            </li>
                                            <li>Réception de bienvenue</li>
                                            <li>Badge</li>
                                            <li>Sac de conférence de la Fondation pour la recherche</li>
                                            <li>Accessoires/Kits de conférence</li>
                                            <li>Certificats pour auteur et co-auteurs</li>
                                            <li>Actes de la conférence de la Fondation pour la recherche</li>
                                            <li>CD des actes de la conférence de la Research Foundation</li>
                                            <li>Pauses café</li>
                                            <li>Déjeuner</li>
                                            <li>Cérémonie de remise des prix</li>
                                        </ul>
                                        <br>
                                        <div class="step">Étape 1</div>
                                        <p>Au moins un auteur de chaque article accepté doit être inscrit au
                                            conférence pour que cet article apparaisse dans les actes et soit programmé pour
                                            présentation. Les membres participants peuvent s'inscrire comme suit
                                            frais.</p>
                                        <div class="table-responsive"> </div>
                                        <p><strong>Votre paiement total :</strong></p>
                                        <p>
                                            @if (isset($_GET['source']))
                                                <a href="{{ !str_contains($eventing->event_location, 'outside')
                                                    ? $eventing->url . $eventing->event_id . '&source=' . $_GET['source']
                                                    : $eventing->url }}"
                                                    target="_blank" class="btn secondary-button text-white "
                                                    id="go" target="_new">Inscrivez-vous en ligne</a>
                                            @else
                                                <a href="{{ !str_contains($eventing->event_location, 'outside') ? $eventing->url . $eventing->event_id : $eventing->url }}"
                                                    target="_blank" class="btn secondary-button text-white "
                                                    id="go" target="_new">Inscrivez-vous en ligne</a>
                                            @endif
                                        </p>
                                        <ul class="list-h">
                                            <li>
                                                Pour les étudiants s'inscrivant tardivement, un montant supplémentaire de 20
                                                USD sera facturé.
                                            </li>
                                            <li>Les membres inscrits sont priés de donner des détails sur l'inscription.
                                                immédiatement</li>
                                            <li>Une fois le processus d'inscription terminé, le participant doit
                                                envoyer la capture d'écran de la preuve de paiement de la transaction ou des
                                                frais d'inscription
                                                à nous <strong>(mail à : info@ardaconference.com)</strong>
                                                au plus tard à la dernière date d’inscription.</li>
                                            <li>Aucune modification du mémoire ne sera acceptée après la finale date de
                                                soumission.</li>
                                            <li>Un maximum de cinq auteurs/coauteurs par article est autorisé pour
                                                participer.</li>
                                            <li>Aucune inscription ne sera prise en compte après la dernière date
                                                d'inscription.
                                            </li>
                                        </ul>
                                        <div class="step">Étape 2</div>
                                        <h5><b>Relevé bancaire par courrier</b></h5>
                                        <p>Une fois que vous avez transféré les frais d'inscription, envoyez la capture
                                            d'écran de l'application en ligne.
                                            transaction à <i>info@info@academicworldresearch.org (avec vos détails
                                                d'inscription complets)</i></p>
                                        <div class="step">Étape 3</div>
                                        <h5><b>Soumission de papier prêt à photographier</b></h5>
                                        <p>Soumettez le papier prêt pour l’appareil photo conformément aux directives.</p>
                                    </div>
                                </div>
                                <div data-tab="addtocalender" class="tabs__tab">
                                    <div class="conn">
                                        <a href="https://www.google.com/calendar/render?action=TEMPLATE&amp;text= {{ $eventing->event_name }}and Recognition &amp;add=foo@bar.baz&amp;location= {{ $eventing->city }} &amp;details=The aim of the Conference is to provide a platform to the researchers and practitioners from both academia as well as industry to meet the share cuttingedge development in the field."
                                            class="goog" style=" background-color: #5e70c5;">Google
                                            Calendrier</a>
                                        <a href="https://calendar.yahoo.com/render?action=template&amp;text={{ $eventing->event_name }}and recognition &amp;add=foo@bar.baz&amp;location={{ $eventing->city }}&amp;details=the aim of the conference is to provide a platform to the researchers and practitioners from both academia as 0well 0as industry to meet the share cuttingedge development in the field."
                                            class="yah" style="background-color: #bbb62c;">
                                            Yahoo Calendrier</a>
                                        <a href="https://office.live.com/start/Calendar.aspx" class="outl"
                                            style=" background-color: #2bc3ae;">Perspectives
                                            Calendrier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        @foreach ($events as $eventing)
            <div class="p-5 tm-container-outer tm-bg-gray">
                <div class="container-fluid">
                    <h4 class="org-details"><b>Conférences similaires en {{ $eventing->country }}</b>
                    </h4>
                    <div class="carousel-wrap">
                        <div class="owl-carousel">
                            @foreach ($similarEventName as $data)
                                <div class="card">
                                    <div class="item">
                                        <a class="similar-conferences" data-name="{{ $data->event_name }}"
                                            data-date="{{ date('dS-M-Y', strtotime($data->sdate)) }}"
                                            style="color: black;" href="/eventdetail/{{ $data->event_id }}">
                                            <h6>{{ $data->event_name }} ({{ $data->event_title }})</h6>
                                            <p class="date-new"><img src="/img/ccalender.png">
                                                &nbsp;{{ date('dS-M-Y', strtotime($data->sdate)) }}<sup></sup> to
                                                {{ date('dS-M-Y', strtotime($data->edate)) }}<sup></sup>
                                            </p>
                                            <p class="name"><img src="/img/location.png">&nbsp;{{ $data->city }},
                                                {{ $data->country }}
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 tm-container-outer tm-bg-gray">
                <div class="container-fluid">
                    <h4 class="org-details">You Might Also be Interested In {{ $eventing->country }}</h4>
                    <div class="carousel-wrap">
                        <div class="owl-carousel">
                            @foreach ($similarCountryEvent as $data)
                                <div class="card">
                                    <div class="item">
                                        <a class="interested-conference" style="color: black;"
                                            href="/eventdetail/{{ $data->event_id }}">
                                            <h6 class="text-black-50">{{ $data->event_name }}
                                                ({{ $data->event_title }})
                                            </h6>
                                            <p class="date-new "><img src="/img/ccalender.png">
                                                &nbsp;{{ date('dS-M-Y', strtotime($data->sdate)) }}<sup></sup> to
                                                {{ date('dS-M-Y', strtotime($data->edate)) }}<sup></sup>
                                            </p>
                                            <p class="name "><img src="/img/location.png">
                                                &nbsp;{{ $data->city }}, {{ $data->country }}</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @include('layout-fr.footer')
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.similar-conferences', function() {
                //alert($(this).attr('href'));
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'Similar Conference',
                    'Target URL': $(this).attr(
                        'href'), //this should be dynamically replaced with an actual search query
                    'Event Date': $(this).attr('data-date'),
                    'Event Name': $(this).attr('data-name'),
                });
            });
        });
    </script>



    <!--Start of Tawk.to Script-->
    <script async type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6151cf7425797d7a89010bc9/1fgjp4p60';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        const tabsBtns = Array.from(document.querySelectorAll("[data-tab-id]"));
        const tabs = Array.from(document.querySelectorAll("[data-tab]"));

        let selectedTab = tabsBtns[0].dataset.tabId;

        const hideTabs = () => {
            tabs
                .filter((tab) => tab.dataset.tab !== selectedTab)
                .forEach((tab) => {
                    tab.classList.add("tabs__tab--hide");
                });

            tabsBtns
                .filter((tab) => tab.dataset.tabId !== selectedTab)
                .forEach((tab) => {
                    tab.classList.add("tabs__tab-btn--not-selected");
                });
        };
        hideTabs();

        const handleSelectTab = (e) => {
            selectedTab = e.target.dataset.tabId;

            tabs.forEach((tab) => {
                tab.classList.remove("tabs__tab--hide");
            });

            tabsBtns.forEach((tab) => {
                tab.classList.remove("tabs__tab-btn--not-selected");
            });

            hideTabs();
        };

        tabsBtns.forEach((btn) => {
            btn.addEventListener("click", handleSelectTab);
        });

        // Get the Contact Us tab element
        const contactUsTab = document.querySelector('[data-tab-id="contactus"]');

        // Add the 'tabs__tab-btn--selected' class to make it appear active
        contactUsTab.classList.add('tabs__tab-btn--selected');
    </script>

    <script>
        // Define the function to be executed after the delay
        function loadScript() {
            // Create a new script element
            var script = document.createElement('script');
            // Set the source of the script
            script.src = 'https://conferenceineurope.net/js/carosalowl.js';
            // Append the script to the document's body
            document.body.appendChild(script);
        }

        // Call the loadScript function after a delay of 3000 milliseconds (3 seconds)
        setTimeout(loadScript, 2000);
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabButtons = document.querySelectorAll(".tabs__tab-btn");
            const tabContents = document.querySelectorAll(".tabs__tab");

            tabButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const tabId = button.getAttribute("data-tab-id");
                    activateTab(tabId);
                });
            });

            tabContents.forEach(content => {
                content.addEventListener("click", () => {
                    const tabId = content.getAttribute("data-tab");
                    activateTab(tabId);
                });
            });

            function activateTab(tabId) {
                // Hide all tab contents
                tabContents.forEach(tab => tab.classList.remove("active"));

                // Show the clicked tab content
                const tabContent = document.querySelector(`[data-tab="${tabId}"]`);
                tabContent.classList.add("active");

                // Update the active tab button
                tabButtons.forEach(button => {
                    if (button.getAttribute("data-tab-id") === tabId) {
                        button.classList.add("active");
                    } else {
                        button.classList.remove("active");
                    }
                });
            }
        });
    </script>
@endsection
