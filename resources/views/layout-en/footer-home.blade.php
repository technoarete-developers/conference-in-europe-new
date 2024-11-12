<footer class="tm-container-outer new-width">
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
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
                <div class="col-md-8 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="lin" style="color: #ffd400;font-size: 20px;margin-bottom:20px;">Subscribe To
                                Upcoming Conferences in Europe </h4>
                            <p>We are glad to bring you the latest information on all the upcoming conferences in Europe
                            </p>
                            <form method="post" action="subscribe_form" id="subscribe_form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" name="name" required="" type="text"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="email" required="" type="email"
                                            placeholder="Enter Your Email">
                                    </div>

                                    <div class="col-md-3">
                                        <label
                                            style="color: #ffd400;
font-size: 13px;margin-top: 13px;
margin-bottom: 14px;">Topic
                                            of interests *</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="Listener" name="interest" value="Listener">
                                        <label
                                            style="color: #fff;
font-size: 13px;font-weight:400;margin-top: 13px;
margin-bottom: 14px;"
                                            for="Listener"> Attender/Listener</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="Paper Submission" name="interest"
                                            value="Paper Submission">
                                        <label
                                            style="color: #fff;
font-size: 13px;font-weight:400;margin-top: 13px;
margin-bottom: 14px;"
                                            for="Paper Submission"> Paper Submission</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" id="Journal Publication" name="interest"
                                            value="Journal Publication">
                                        <label
                                            style="color: #fff;
font-size: 13px;font-weight:400;margin-top: 13px;
margin-bottom: 14px;"
                                            for="Journal Publication"> Journal Publication</label>
                                    </div>


                                    <div class="col-md-12">
                                        <input type="checkbox" id="agree" name="agree" value="agree">
                                        <label style="color: #fff;
font-size: 13px;font-weight:400;" for="agree">I
                                            want to receive the latest conferences based on interesting trending topics,
                                            venue, and time updates from ConferenceinEurope.</label>
                                    </div>

                                    <input type="hidden" name="recaptcha" id="recaptcha">
                                    <div class="col-md-12">
                                        <button type="submit" name="btnSubmit" class="send_button full_button"
                                            style="margin-top: 16px;">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class=" col-md-8" style="margin-top: 8px; text-align: left;">
                    <h4>Copyright &copy; {{ date('Y') }} Conference in Europe. All Rights Reserved. | <a
                            href="{{ route('privacy-terms') }}">Terms &amp; Conditions</a></h4>
                </div>
                <div class="col-md-4  social text-right">
                </div>
            </div>
        </div>
    </section>
</footer>
