@extends('layout-fr.master')

@section('meta')
    <title>Conference in Europe | European conference 2022 | Conference Alerts</title>
    <meta name="keyword" content="" />
    <meta name="description" content="" />

    <meta property="og:title" content="Conference in Europe | European conference 2022 | Conference Alerts" />
    <meta property="og:keywords" content="" />
    <meta property="og:description" content="" />

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
                        <h2>FAQ</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tm-page-wrap mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <h4>FAQ pour les planificateurs/organisateurs de conference</h4>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Quelles sont les formalites pour ajouter un evenement sur le site
                                        Conferenceineurope.net ?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>Vous desirez ajouter un evenement,qu'il s'agisse d'un seminaire, d'un congres,
                                        d'uneconference, d'un symposium ou de tout autre genre d'evenement academique? Il
                                        vous
                                        suffit de vous rendre sur la page d'accueil du site Conferenceineurope.net et de
                                        cliquer
                                        sur Ajouter un evenement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Quelles informations faut-il fournir lors de l'ajout d'un evenement?</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <p>Au moment dajouter votre evenement a la liste des evenements disponibles sur
                                    Conferenceineurope.net, vous pouvez indiquer certaines informations supplementaires,
                                    asavoir</p>
                                <p>Dates et heures auxquelles l'evenement aura lieu,</p>
                                <p>Lieu, ville et autres informations sur l'adresse;</p>
                                <p>Liens vers votre prochain evenement;</p>
                                <p>Renseignements sur les delais de soumission des documents d'inscription;</p>
                                <p>Sujets/thematiques abordes lors de l'evenement;</p>
                                <p>Planning du programme;</p>
                                <p>Informations pour s'inscrire a l'evenement;</p>
                                <p>Coordonnees de l'organisateur</p>
                                <p>Toutes les informations necessaires et pertinentes.</p>
                                <div class="panel-body">
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Le rajout d'un evenement sur Conferenceineurope.net est-il payant?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>Non, l'ajout d'un evenement sur ce site Web est totalement gratuit. Vous n'aurez a
                                        debourseraucun centime!</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        Apres l'avoir ajoute, combien de temps faut-il attendre pour que mon evenement
                                        apparaisse sur le site Web Conferenceineurope.net?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>Vous aurez a patienter au maximum 12 heures avant que votre evenement soit
                                        officiellement repertorie sur le site Conferenceineurope.net apres son ajout.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Est-il possible de modifier, d'ajouter ou de changer les details d'un evenement
                                        apres l'avoir inscrit sur le site Web?</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <p>Oui, vous pouvez modifier toutes les informations relatives a l'evenement que vous
                                        avez
                                        ajoute sur le site Web Conferenceineurope.net. Vous pouvez le faire a tout instant,
                                        en
                                        vous connectant simplement sur le site et en cliquant sur l'evenement. Vous pourrez
                                        alors y apporter les modifications requises.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Plus tard, serait-ce possible de promouvoir mes evenements sur le site
                                        WebConferenceineurope.net?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <p>Bien sûr! Tout ce que vous avez a faire pour que vos evenements a venir soient encore
                                        pluspromus sur ce site Web est d'envoyer un e-mail sur vos intentions a l'adresse
                                        e-mailsuivante: info@conferenceineurope.net.
                                        Notre equipe reviendra par la suite vers vous avec des details pertinents comme:</p>
                                    <p>Les plans de publicite que vous pouvez selectionner,</p>
                                    <p>La periode de promotion, etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Quel est le nombre maximal d'evenements que je peux ajouter a la liste de
                                        conferenceineurope.net depuis un seul compte d'organisateur?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <p>Tous les ans, un organisateur est autorise a ajouter un maximum de 50 evenements a
                                        laliste des evenements sur ce site Web a partir de son compte.</p>
                                </div>
                            </div>
                        </div>

                        <h4>FAQ pour les abonnes</h4>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Quelle est la procedure a suivre pour s'abonner sur ConferenceInEurope.net?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <p>La procedure pour s'abonner sur conferenceineurope.net est tout a fait simple! Tout
                                        ce
                                        que vous avez a faire est de vous rendre sur la page d'accueil du site et de cliquer
                                        sur
                                        l'option Abonnez-vous.
                                        Vous aurez ensuite a fournir certaines informations de base telles que votre:</p>
                                    <p>Nom,</p>
                                    <p>Adresse e-mail,</p>
                                    <p>Numero de telephone,</p>
                                    <p>Theme/sujet d'etude et d'interêt, et</p>
                                    <p>Pays.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Comment conferenceineurope.net peut-il m'aider a trouver les meilleures conferences?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingNine">
                                <div class="panel-body">
                                    <p>Ce site Web recherche les conferences internationales et regionales les plus
                                        appropriees
                                        et les plus pertinentes pour vous, en se referant a vos exigences exactes telles
                                        que:</p>
                                    <p>Votre emplacement prefere,</p>
                                    <p>Date/heure preferee,</p>
                                    <p>Sujet/champ/domaine prefere d'etudes et interêts,</p>
                                    <p>Delai d'inscription et plus encore!</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTen">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Combien cela coûte-t-il de s'abonner a conferenceineurope.net?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTen">
                                <div class="panel-body">
                                    <p>Pas un seul centime! L'abonnement a ce site Web est totalement gratuit! </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEleven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        Est-il possible pour un utilisateur de posseder un compte d'abonne et un
                                        compteorganisateur en même temps?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingEleven">
                                <div class="panel-body">
                                    <p>Bien sûr! a tout moment, une personne peut avoir a la fois un compte d'organisateur
                                        ainsi qu'un compte d'abonne sur le site conferenceineurope.net!</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwelve">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTen">
                                        Quel est l'interêt pour les chercheurs experimentes et novices, les scientifiques,
                                        les universitaires, les academiciens et autres, d'assister a des conferences
                                        internationales et regionales dans leur domaine d'etudes respectif?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwelve">
                                <div class="panel-body">
                                    <p>Les conferences offrent plusieurs avantages. Elles sont aux participants et aux
                                        acteurs
                                        l'occasion de:</p>
                                    <p>Decouvrir les progres les plus recents, </p>
                                    <p>Interagir avec les personnes qu'ils admirent,</p>
                                    <p>Puiser de l'inspiration,</p>
                                    <p>Se connecter avec d'autres personnes,</p>
                                    <p>Acquerir des opportunites de collaboration,</p>
                                    <p>Progresser dans leur carriere,</p>
                                    <p>Sensibiliser les autres a leurs travaux de recherche revolutionnaires,</p>
                                    <p>Faire connaître les derniers outils et strategies utilises dans leurs domaines,
                                        etplus
                                        encore!</p>
                                </div>
                            </div>
                        </div>
                        <h4>FAQ generales<h4>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThirteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseThirteen" aria-expanded="false"
                                                aria-controls="collapseTen">
                                                Quelle est l'importance des alertes de conference?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingThirteen">
                                        <div class="panel-body">
                                            <p>La plupart des participants aux conferences sont des chercheurs, des
                                                scientifiques, des academiciens, des boursiers, des entrepreneurs ou des
                                                hommes d'affaires. Les personnes impliquees dans de telles professions ont
                                                peu ou pas de temps libre pour s'adonner aux choses qu'ils aiment, comme
                                                passer du temps avec leurs familles, vaquer a leurs occupations et
                                                responsabilites quotidiennes, etc. Ils n'ont guere le temps de rechercher
                                                des informations sur des conferences auxquelles ils voudraient assister.
                                                C'est dans cette optique que vous aurez besoin des alertes de conferences
                                                proposees sur, conferenceineurope.net. Si vous desirez prendre part aux
                                                prochaines conferences, il vous suffit de vous abonner a nos alertes. Vous
                                                serez alors certain de recevoir des notifications sur les prochaines
                                                conferences sans devoir:</p>
                                            <p>beaucoup de temps a rechercher sur Internet,</p>
                                            <p>Rechercher des sources de confiance, et surtout,</p>
                                            <p>Depenser de l'argent!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfourteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapsefourteen" aria-expanded="false"
                                                aria-controls="collapseTen">
                                                Pourquoi des millions de personnes a travers l'Europe et le monde font-ils
                                                confiance a conferenceineurope.net?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsefourteen" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingfourteen">
                                        <div class="panel-body">
                                            <p>Sur conferenceineurope.net, nous prenons nos abonnes tres au serieux!
                                                C'est pourquoi, nous avons une equipe de professionnels dediee, dont la
                                                seule
                                                tâche est de verifier tous les details/informations publiees sur ce site et
                                                de
                                                s'assurer de leur:</p>
                                            <p>Precision,</p>
                                            <p>Fiabilite,</p>
                                            <p>Pertinence,</p>
                                            <p>Pour cette raison, des millions de chercheurs europeens, scientifiques,
                                                universitaires, academiciens et autres ont la certitude que
                                                conferenceineurope.net est la source d'information la plus fiable sur les
                                                prochaines conferences venir prevues dans tout le continent.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingsixteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapsesixteen" aria-expanded="false"
                                                aria-controls="collapseTen">
                                                Quels champs/domaines/sujets le site conferentineurope.net aborde-t-il?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsesixteen" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingsixteen">
                                        <div class="panel-body">
                                            <p>Conferenceineurope.net offre des informations sur tous les
                                                domaines/thematiques/sujets d'etude qui existent! Du droit a l'ingenierie,
                                                en passant par la technologie, les sciences appliquees et la medecine, les
                                                affaires et l'economie, les mathematiques et les sciences de la vie, vous
                                                trouverez probablement toutes les informations sur les conferences a venir
                                                dans tous les domaines existants a ce jour!</p>
                                            <a href="{{ route('topic-list-page', ['topic' => 'engineering']) }}">
                                                Conference en ingenierie et technologie</a><br>
                                            <a href="{{ route('topic-page', ['topic' => 'medical']) }}">Conference en
                                                sciences et medecine</a><br>
                                            <a href="{{ route('topic-page', ['topic' => 'mathematics']) }}">Conference
                                                en mathematiques et statistiques</a><br>
                                            <a href="{{ route('topic-page', ['topic' => 'life-science']) }}">Conference
                                                en sciences de la vie
                                            </a><br>
                                            <a href="{{ route('topic-page', ['topic' => 'business']) }}">Conference en
                                                affaires et en economie</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingseveenteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseseveenteen" aria-expanded="false"
                                                aria-controls="collapseseveenteen">
                                                Quels pays sont inclus sur Conferenceineurope.net?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseseveenteen" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingseveenteen">
                                        <div class="panel-body">
                                            <p>Conferenceineurope.net fournit des informations sur les conferences a venir
                                                organisees dans tout le continent europeen! Que vous viviez en Suisse, en
                                                France, en Italie, en Belgique, en Suede et en Allemagne, ce site Web vous
                                                offrira des renseignements sur les evenements a venir dans tous les pays du
                                                continent europeen!</p>
                                            <a href="{{ route('country-page', ['country' => 'france']) }}">Conference en
                                                France
                                            </a><br>
                                            <a href="{{ route('country-page', ['country' => 'italy']) }}">Conference en
                                                Italie
                                            </a><br>
                                            <a href="{{ route('country-page', ['country' => 'switzerland']) }}">Conference
                                                en Suisse</a><br>
                                            <a href="{{ route('country-page', ['country' => 'sweden']) }}">Conference en
                                                Suede
                                            </a><br>
                                            <a href="{{ route('country-page', ['country' => 'germany']) }}">Conference en
                                                Allemagne</a><br>
                                            <a href="{{ route('country-page', ['country' => 'belgium']) }}">Conference en
                                                Belgique</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingnineteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapsenineteen" aria-expanded="false"
                                                aria-controls="collapseTen">
                                                Comment puis-je trouver des conferences pertinentes pour mon domaine/sujet
                                                d'etude et mes centres d'interêt sur conferenceInEurope.net?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsenineteen" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingnineteen">
                                        <div class="panel-body">
                                            <p>de trouver des conferences pertinentes et relatives a votre domaine/champs
                                                d'interêt specifiques, tout ce que vous avez a faire est de vous rendre sur
                                                ConferenceInEurope.net et de taper le nom de votre domaine dans la barre de
                                                recherche, que vous pouvez trouver sur la page d'accueil du site Web! Si
                                                vous
                                                recherchez des conferences a venir en fonction du mois et de la date, tout
                                                ce
                                                quevous devez faire est de cliquer sur l'option Calendrier de conference»
                                                sur la
                                                page d'accueil du site. Vous y decouvrirez une liste complete des
                                                conferences.
                                                Vous pouvez ensuite cliquersur le mois qui vous convient: janvier», mars»,
                                                decembre» ou autre. Cela vous permettra d'en savoir davantage sur les
                                                conferences qui devraient avoir lieu au cours de ce mois particulier de
                                                l'annee.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingtwenty">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapsetwenty" aria-expanded="false"
                                                aria-controls="collapseTen">
                                                Pourquoi est-il crucial de s'abonner aux alertes de conference sur une
                                                source fiable d'informations telle que ConferenceInEurope.net?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsetwenty" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingtwenty">
                                        <div class="panel-body">
                                            <p>Bien qu'il existe de nombreuses sources d'informations sur les conferences et
                                                les organisateurs/planificateurs de conferences, vous devez miser sur la
                                                source
                                                la plus fiable et la plus credible. Si vous cherchez sur un site peu fiable,
                                                vous risquez de:</p>
                                            <p>Perdre du temps precieux,</p>
                                            <p>Perdre de l'argent,</p>
                                            <p>Vous faire arnaquer par de faux organisateurs/planificateurs de conference,
                                            </p>
                                            <p>Vous faire voler votre identite,</p>
                                            <p>Divulguer vos informations personnelles, etc.</p>
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
    <script></script>
@endsection
