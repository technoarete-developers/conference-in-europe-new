
<footer class="tm-container-outer new-width">
    <section id="footer">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Liens rapides</h4>
                                <li><a href="{{ route('about') }}">À propos de nous</a></li>
                                <li><a href="{{ route('blog') }}">Blogue</a></li>
                                <li><a href="{{ route('add-event') }}">Ajouter un événement</a></li>
                                <li><a href="{{ route('video-conferences') }}">Vidéoconférence</a></li>
                                <li><a href="https://www.ardaconference.com/journal.php/">Journaux</a></li>
                                <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
                                <li><a href="{{ route('sitemap') }}">Plan du site</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Sujets populaires</h4>
                                <li><a href="{{ route('topic-page', ['topic' => 'dentistry']) }}" target="_blank">Dentisterie</a></li>
                                <li><a href="{{ route('topic-page', ['topic' => 'pharmacy']) }}" target="_blank">Pharmacie</a></li>
                                <li><a href="{{ route('topic-page', ['topic' => 'nanotechnology']) }}" target="_blank">Nanotechnologie</a></li>
                                <li><a href="{{ route('topic-page', ['topic' => 'nursing']) }}" target="_blank">Allaitement</a></li>
                                <li><a href="{{ route('topic-page', ['topic' => 'health']) }}" target="_blank">Santé</a></li>
                                <li><a href="{{ route('topic-page', ['topic' => 'oncology']) }}" target="_blank">Oncologie</a></li>
                                <li><a href="{{ route('topic-page', ['topic' => 'earth-sciences']) }}" target="_blank">Sciences de la Terre</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Pays populaires</h4>
                                <li><a href="{{ route('country-page', ['country' => 'andorra']) }}">Andorre</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'belgium']) }}">Belgique</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'croatia']) }}">Croatie</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'denmark']) }}">Danemark</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'estonia']) }}">Estonie</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'finland']) }}">Finlande</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'germany']) }}">Allemagne</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Villes populaires</h4>
                                <li> <a href="{{ route('city-page', ['city' => 'yerevan']) }}">Erevan</a></li>
                                <li> <a href="{{ route('city-page', ['city' => 'vienna']) }}">Vienne</a></li>
                                <li> <a href="{{ route('city-page', ['city' => 'minsk']) }}">Minsk</a></li>
                                <li> <a href="{{ route('city-page', ['city' => 'bruges']) }}">Bruges</a></li>
                                <li><a href="{{ route('city-page', ['city' => 'sofia']) }}">Sofia</a></li>
                                <li><a href="{{ route('city-page', ['city' => 'zagreb']) }}}">Zagreb</a></li>
                                <li> <a href="{{ route('city-page', ['city' => 'nicosia']) }}">Nicosie</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-12" style="margin-top: 8px;">
                    <h4>Copyright &copy; {{ date('Y') }} Conference in Europe. All Rights Reserved. | <a href="{{ route('terms-and-condition') }}">Terms &amp; Conditions</a></h4>
                </div>
            </div>
        </div>
    </section>
</footer>



