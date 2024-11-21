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
                            <form method="post" action="subscribe_form" id="subscribe_form">
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
                                        <input type="checkbox" id="Listener" name="interest" value="Listener">
                                        <label
                                            style="color: #fff; font-size: 13px;font-weight:400;margin-top: 13px; margin-bottom: 14px;"
                                            for="Listener">Participant / Auditeur</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" id="Paper Submission" name="interest"
                                            value="Paper Submission">
                                        <label
                                            style="color: #fff; font-size: 13px;font-weight:400;margin-top: 13px; margin-bottom: 14px;"
                                            for="Paper Submission"> 
                                            Soumission papier</label>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="checkbox" id="Journal Publication" name="interest"
                                            value="Journal Publication">
                                        <label
                                            style="color: #fff; font-size: 13px;font-weight:400;margin-top: 13px; margin-bottom: 14px;"
                                            for="Journal Publication">Publication de revues</label>
                                    </div>


                                    <div class="col-md-12">
                                        <input type="checkbox" id="agree" name="agree" value="agree">
                                        <label style="color: #fff; font-size: 13px;font-weight:400;" for="agree">
                                            je souhaitez recevoir les dernières conférences basées sur des sujets d'actualité intéressants, lieu et mises à jour de l'heure de ConferenceinEurope.</label>
                                    </div>

                                    <input type="hidden" name="recaptcha" id="recaptcha">
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
