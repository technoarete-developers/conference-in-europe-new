
<footer class="tm-container-outer new-width">
    <section id="footer">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Quick Links</h4>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('add-event') }}">Add Event</a></li>
                                <li><a href="{{ route('video-conferences') }}">Video Conference</a></li>
                                <li><a href="https://www.ardaconference.com/journal.php/">Journals</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Popular Topic’s</h4>
                                <li><a href="{{ route('subtopic-page', ['subtopic' => 'dentistry']) }}" target="_blank">Dentistry</a></li>
                                <li><a href="{{ route('subtopic-page', ['subtopic' => 'pharmacy']) }}" target="_blank">Pharmacy</a></li>
                                <li><a href="{{ route('subtopic-page', ['subtopic' => 'nanotechnology']) }}" target="_blank">Nanotechnology</a></li>
                                <li><a href="{{ route('subtopic-page', ['subtopic' => 'nursing']) }}" target="_blank">Nursing</a></li>
                                <li><a href="{{ route('subtopic-page', ['subtopic' => 'health']) }}" target="_blank">Health</a></li>
                                <li><a href="{{ route('subtopic-page', ['subtopic' => 'oncology']) }}" target="_blank">Oncology</a></li>
                                <li><a href="{{ route('subtopic-page', ['subtopic' => 'earth-sciences']) }}" target="_blank">Earth Sciences</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Popular Countries</h4>
                                <li><a href="{{ route('country-page', ['country' => 'andorra']) }}">Andorra</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'belgium']) }}">Belgium</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'croatia']) }}">Croatia</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'denmark']) }}">Denmark</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'estonia']) }}">Estonia</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'finland']) }}">Finland</a></li>
                                <li> <a href="{{ route('country-page', ['country' => 'germany']) }}">Germany</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Popular Cities</h4>
                                <li> <a href="{{ route('city-page', ['city' => 'yerevan']) }}">Yerevan</a></li>
                                <li> <a href="{{ route('city-page', ['city' => 'vienna']) }}">Vienna</a></li>
                                <li> <a href="{{ route('city-page', ['city' => 'minsk']) }}">Minsk</a></li>
                                <li> <a href="{{ route('city-page', ['city' => 'bruges']) }}">Bruges</a></li>
                                <li><a href="{{ route('city-page', ['city' => 'sofia']) }}">Sofia</a></li>
                                <li><a href="{{ route('city-page', ['city' => 'zagreb']) }}}">Zagreb</a></li>
                                <li> <a href="{{ route('city-page', ['city' => 'nicosia']) }}">Nicosia</a></li>
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

