<footer class="tm-container-outer new-width">
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
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
                <div class="col-md-8 col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="lin" style="color: #ffd400;font-size: 20px;margin-bottom:20px;">Abonnez-vous à
                                Conférences à venir en Europe</h4>
                            <p>Nous sommes heureux de vous apporter les dernières informations sur toutes les
                                conférences à venir en Europe
                            </p>
                            <form method="post" action="{{ route('footer-subscribe-form-fr') }}" id="subscribe_form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" name="name" required="" type="text"
                                            placeholder="Entrez votre nom">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="email" required="" type="email"
                                            placeholder="Entrez votre e-mail">
                                    </div>

                                    <div class="col-md-3">
                                        <label
                                            style="color: #ffd400; font-size: 13px;margin-top: 13px; margin-bottom: 14px;">Sujet
                                            d'intérêts*</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="Listener" name="interest">
                                        <label
                                            style="color: #fff; font-size: 13px;font-weight:400;margin-top: 13px; margin-bottom: 14px;"
                                            for="Listener">Participant / Auditeur</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="Paper Submission" name="interest">
                                        <label
                                            style="color: #fff; font-size: 13px;font-weight:400;margin-top: 13px; margin-bottom: 14px;"
                                            for="Paper Submission">
                                            Soumission papier</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" id="Journal Publication" name="interest">
                                        <label
                                            style="color: #fff; font-size: 13px;font-weight:400;margin-top: 13px; margin-bottom: 14px;"
                                            for="Journal Publication">Publication de revues</label>
                                    </div>

                                    <span class="error-message" id="interest-error"></span>
                                    <div class="col-md-12">
                                        <input type="checkbox" id="agree" name="agree">
                                        <label style="color: #fff; font-size: 13px;font-weight:400;" for="agree">
                                            je souhaitez recevoir les dernières conférences basées sur des sujets
                                            d'actualité intéressants, lieu et mises à jour de l'heure de
                                            ConferenceinEurope.</label>
                                    </div>

                                    <span class="error-message" id="agree-error"></span>
                                    <input type="hidden" name="captcha" id="captcha">

                                    <div class="col-md-12 form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                                    data-action="{{ route('footer-subscribe-form-fr') }}"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" name="btnSubmit" class="send_button full_button"
                                            style="margin-top: 16px;">
                                            Soumettre</button>
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
                    <h4>Copyright © {{ date('Y') }} Conférence en Europe. Tous droits réservés. | <a
                            href="{{ route('terms-and-condition-fr') }}">Conditions générales</a></h4>
                </div>
                <div class="col-md-4  social text-right">
                </div>
            </div>
        </div>
    </section>
</footer>

<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}">
    < /scri <
    script >
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
                interestError.textContent = "Veuillez sélectionner au moins un sujet d'intérêt.";
                interestError.style.color = "yellow";
                return;
            } else {
                interestError.textContent = "";
            }

            const agreeCheckbox = document.getElementById("agree");
            const agreeError = document.getElementById("agree-error");

            if (!agreeCheckbox.checked) {
                agreeError.textContent = "Vous devez accepter de recevoir des mises à jour.";
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
