<footer class="tm-container-outer new-width">
    <section id="footer">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Quick Links</h4>
                                <li><a href="{{ route('about-fr') }}">About Us</a></li>
                                <li><a href="{{ route('blog-fr') }}">Blog</a></li>
                                <li><a href="{{ route('add-event-fr') }}">Add Event</a></li>
                                <li><a href="{{ route('video-conferences-fr') }}">Video Conference</a></li>
                                <li><a href="https://www.ardaconference.com/journal.php/">Journals</a></li>
                                <li><a href="{{ route('contact-fr') }}">Contact Us</a></li>
                                <li><a href="{{ route('sitemap-fr') }}">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Popular Topic’s</h4>
                                <li><a href="{{ route('topic-page-fr', ['topic' => 'dentistry']) }}"
                                        target="_blank">Dentistry</a></li>
                                <li><a href="{{ route('topic-page-fr', ['topic' => 'pharmacy']) }}"
                                        target="_blank">Pharmacy</a></li>
                                <li><a href="{{ route('topic-page-fr', ['topic' => 'nanotechnology']) }}"
                                        target="_blank">Nanotechnology</a></li>
                                <li><a href="{{ route('topic-page-fr', ['topic' => 'nursing']) }}"
                                        target="_blank">Nursing</a></li>
                                <li><a href="{{ route('topic-page-fr', ['topic' => 'health']) }}"
                                        target="_blank">Health</a></li>
                                <li><a href="{{ route('topic-page-fr', ['topic' => 'oncology']) }}"
                                        target="_blank">Oncology</a></li>
                                <li><a href="{{ route('topic-page-fr', ['topic' => 'earth-sciences']) }}"
                                        target="_blank">Earth Sciences</a>
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
                                <li><a href="{{ route('country-page-fr', ['country' => 'andorra']) }}">Andorra</a></li>
                                <li> <a href="{{ route('country-page-fr', ['country' => 'belgium']) }}">Belgium</a>
                                </li>
                                <li> <a href="{{ route('country-page-fr', ['country' => 'croatia']) }}">Croatia</a>
                                </li>
                                <li> <a href="{{ route('country-page-fr', ['country' => 'denmark']) }}">Denmark</a>
                                </li>
                                <li> <a href="{{ route('country-page-fr', ['country' => 'estonia']) }}">Estonia</a>
                                </li>
                                <li> <a href="{{ route('country-page-fr', ['country' => 'finland']) }}">Finland</a>
                                </li>
                                <li> <a href="{{ route('country-page-fr', ['country' => 'germany']) }}">Germany</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="foot-ul">
                                <h4 class="lin">Popular Cities</h4>
                                <li> <a href="{{ route('city-page-fr', ['city' => 'yerevan']) }}">Yerevan</a></li>
                                <li> <a href="{{ route('city-page-fr', ['city' => 'vienna']) }}">Vienna</a></li>
                                <li> <a href="{{ route('city-page-fr', ['city' => 'minsk']) }}">Minsk</a></li>
                                <li> <a href="{{ route('city-page-fr', ['city' => 'bruges']) }}">Bruges</a></li>
                                <li><a href="{{ route('city-page-fr', ['city' => 'sofia']) }}">Sofia</a></li>
                                <li><a href="{{ route('city-page-fr', ['city' => 'zagreb']) }}}">Zagreb</a></li>
                                <li> <a href="{{ route('city-page-fr', ['city' => 'nicosia']) }}">Nicosia</a></li>
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
                    <h4>Copyright &copy; {{ date('Y') }} Conference in Europe. All Rights Reserved. | <a
                            href="{{ route('terms-and-condition') }}">Terms &amp; Conditions</a></h4>
                </div>
            </div>
        </div>
    </section>
</footer>
