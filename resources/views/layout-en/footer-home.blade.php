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
                            <form method="post" action="{{ route('footer-subscribe-form') }}" id="subscribe_form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" name="name" required type="text"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="email" required type="email"
                                            placeholder="Enter Your Email">
                                    </div>

                                    <div class="col-md-3">
                                        <label
                                            style="color: #ffd400; font-size: 13px;margin-top: 13px; margin-bottom: 14px;">Topic
                                            of interests *</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="listener" name="interest">
                                        <label
                                            style="color: #fff; font-size: 13px;font-weight:400;margin-top: 13px; margin-bottom: 14px;"
                                            for="Listener"> Attender/Listener</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="paper-submission" name="interest">
                                        <label
                                            style="color: #fff; font-size: 13px;font-weight:400;margin-top: 13px; margin-bottom: 14px;"
                                            for="Paper Submission"> Paper Submission</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" id="journal-publication" name="interest">
                                        <label
                                            style="color: #fff; font-size: 13px;font-weight:400;margin-top: 13px; margin-bottom: 14px;"
                                            for="Journal Publication"> Journal Publication</label>
                                    </div>
                                    <span class="error-message" id="interest-error"></span>
                                    <div class="col-md-12 footer-checkbox">
                                        <input type="checkbox" id="agree" name="agree">
                                        <label style="color: #fff; font-size: 13px;font-weight:400;" for="agree">I
                                            want to receive the latest conferences based on interesting trending topics,
                                            venue, and time updates from ConferenceinEurope.</label>
                                    </div>
                                    <span class="error-message" id="agree-error"></span>
                                    <input type="hidden" name="captcha" id="captcha">

                                    <div class="col-md-12 form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                                    data-action="{{ route('footer-subscribe-form') }}"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" onclick="onClick(event)" class="send_button full_button"
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
                    <h4>Copyright © {{ date('Y') }} Conference in Europe. All Rights Reserved. | <a
                            href="{{ route('terms-and-condition') }}">Terms & Conditions</a></h4>
                </div>
                <div class="col-md-4  social text-right">
                </div>
            </div>
        </div>
    </section>
</footer>


<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>

<script>
    function onClick(e) {
        e.preventDefault();

        // this code used for validation
        const form = document.getElementById("subscribe_form");

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }



        document.querySelectorAll("input[name='interest']").forEach(checkbox => {
            checkbox.addEventListener("change", () => {
                const isAnyChecked = Array.from(document.querySelectorAll("input[name='interest']"))
                    .some(checkbox => checkbox.checked);

                if (isAnyChecked) {
                    document.getElementById("interest-error").textContent = "";
                }
            });
        });

        document.getElementById("agree").addEventListener("change", () => {
            if (document.getElementById("agree").checked) {
                document.getElementById("agree-error").textContent = "";
            }
        });

        const interests = document.querySelectorAll("input[name='interest']");
        const interestError = document.getElementById("interest-error");
        let isInterestChecked = false;

        interests.forEach(checkbox => {
            if (checkbox.checked) {
                isInterestChecked = true;
            }
        });

        if (!isInterestChecked) {
            interestError.textContent = "Please select at least one topic of interest.";
            interestError.style.color = "yellow";
            return;
        } else {
            interestError.textContent = "";
        }

        const agreeCheckbox = document.getElementById("agree");
        const agreeError = document.getElementById("agree-error");

        if (!agreeCheckbox.checked) {
            agreeError.textContent = "You must agree to receive updates.";
            agreeError.style.color = "yellow";
            return;
        } else {
            agreeError.textContent = "";
        }

        // captcha v3
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {
                action: 'submit'
            }).then(function(token) {
                document.getElementById('captcha').value = token;
                document.getElementById('subscribe_form').submit();
            });
        });
    }
</script>
