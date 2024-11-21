@extends('layout-fr.master')

@section('meta')
    <title>Conference in Europe About us</title>
    <meta name="keyword" content="" />
    <meta name="description"
        content="Conference in Europe {{ date('Y') }} aims to bring all the information of upcoming events in various fields. It's your top destination for getting the latest alerts on all the updates." />

    <meta property="og:title" content="Conference in Europe About us" />
    <meta property="og:keywords" content="" />
    <meta property="og:description"
        content="Conference in Europe {{ date('Y') }} aims to bring all the information of upcoming events in various fields. It's your top destination for getting the latest alerts on all the updates." />

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
                        <h2>a propos</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tm-page-wrap mx-auto">
        <section class="p-5 tm-container-outer tm-bg-gray">
            <div class="container">
                <div class="">
                    <div class="col-xs-12 mx-auto text-justify">
                        <h6 class="mb-4 tdd-cont">Looking For a Convenient & Reliable Way to Learn About Upcoming
                            Conferences? Look No Further!</h6>
                        <p class="mb-4 abt-cont">Conference en Europe est une plateforme qui met a votre disposition tous
                            les renseignements necessaires afin de prendre part a une conference en Europe en 2024. Que vous
                            soyez un chercheur, un etudiant, ou un professionnel en particulier, les conferences en Europe
                            seront pour vous l'occasion d'enrichir vos connaissances et de faire la rencontre d'acteurs
                            majeurs dans le secteur des affaires.</p>
                        <p class="mb-4 abt-cont">Sur cette plateforme, vous obtiendrez toutes les informations concernant
                            les dates,les horaires et les lieux où seront organisees les conferences en Europe en
                            2024.Assistez donc a ces evenements professionnels et donnez un elan a votre
                            carriereprofessionnelle.</p>
                        <p class="mb-4 abt-cont">En consultant notre site Internet, vous pourrez egalement recevoir des
                            alertessuivant vos preferences. Vous connaîtrez tout sur les prochains seminaires qui
                            setiendront dans differents pays europeens, allant de la France a l'Allemagne, en passant par
                            l'Autriche, la Bulgarie et bien d'autres encore. Abonnez-vous desmaintenant sur notre site. Si
                            vous avez des questions, n'hesitez pas a nous contacterpar mail ou par telephone.</p>
                    </div>
                </div>
            </div>
        </section>
        @include('layout-fr.footer')
    @endsection
    @section('script')
        <script></script>
    @endsection
