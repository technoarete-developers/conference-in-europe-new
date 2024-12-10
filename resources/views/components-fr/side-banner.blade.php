<div class="col-sm-3 topic-left-grid">
    <div style="margin-bottom: 2rem;  margin-top: 3rem;">
        <a href="https://conferenceineurope.net/blog/conference-in-europe-with-invitation-letter" id="invitation-letter"
            target="_blank"> <img alt="conference in europe with invitation letter" src="/img/invitation-letter.png"
                width="100%" /> </a>
    </div>

    <div class="event-promtion">
        <h3 style="color: #b03031;">Ajoutez votre événement</h3>
        <div class="col-sm-12 e-card">
            <p>Conférence en Europe constitue la plateforme idéale si vous désirez promouvoir efficacement votre événement et lui faire connaître un énorme succès. Le site compte plusieurs milliers de followers et d’abonnés. Et tous les mois, les visiteurs sont nombreux à visiter notre site Web ! Ainsi, en ajoutant votre événement sur notre site Web, vous et votre entreprise atteindrez un public plus large qui trouvera votre conférence très bénéfique.</p>
            <p>Que vous envisagiez d’organiser une conférence en ligne ou un événement hors ligne, Conférence en Europe est la plateforme qu’il vous faut. Elle est entièrement à votre disposition.</p>
            <p>Que vous envisagiez d’organiser une conférence en ligne ou un événement hors ligne, Conférence en Europe est la plateforme qu’il vous faut. Elle est entièrement à votre disposition.</p>
            <ul>
                <li>Obtenir plus de clients potentiels :</li>
                <li>Augmenter le nombre de personnes inscrites:</li>
                <li>Faciliter la création de partenariats importants:</li>
            </ul>
            <div class="text-center" style="margin-top: 12%;margin-left: -54%;">
                <a href="{{ route('add-event') }}"
                    style="background: linear-gradient(316.24deg,#ae1010 24.99%,#030351 100%);color: #fff;padding: 8px;border-radius: 5px;margin-top: 9%;margin-left: 11%;">Ajouter un événement</a>
            </div>
            <div class="text-center">
                <img src="/img/book.png" width="80%" style="margin-bottom: 12px;margin-top: 3%;">
            </div>
        </div>
    </div>

    <div class="event-promtion">
        <h4 class="event-title">Promotion d’événements</h4>
        <div class="promot-heading">
            <div class="dte">
                <div class="event-info">
                    <a href="http://ardaconference.com" class="outside-event"><img src="/img/4.jpg" alt="uk"
                            class="img-responsive bannr"></a>
                </div>
            </div>
            <div class="dte">
                <div class="event-info">
                    <a href="https://www.iirst.com" class="outside-event"><img src="/img/banners-2.jpg" alt="uk"
                            class="img-responsive bannr"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="event-promtion dskview">
        <h4 class="event-title">Promotion d'événements mondiaux</h4>
        <div class="promot-heading">
            @foreach ($upcomingEvent as $detail)
                <div class="dte">
                    <h4>{{ $detail->event_name }}</h4>
                    <div class="place-sec">
                        <strong>{{ date('tS-M', strtotime($detail->sdate)) }},{{ $detail->city }},{{ $detail->country }}</strong>
                    </div>
                    <div class="event-info">
                        {{ $detail->event_name }} ({{ $detail->event_title }})
                        prestigious event organized with a motivation to provide an excellent international platform for the academicians, researchers, engineers, industrial participants and budding students around the world to SHARE their research findings with the global experts.
                    </div>
                    <a href="{{ route('event-detail-fr', ['event_id' => $detail->event_id]) }}" class="prom_submit"
                        target="_blank">Voir plus</a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mobileview">
        <p class="event-title">
            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                aria-controls="collapseExample" style="color: #fff;">
                Promotion d'événements mondiaux<i class="fa fa-angle-double-down iconn" aria-hidden="true"></i>
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="promot-heading">
                @foreach ($upcomingEvent as $detail)
                    <div class="dte">
                        <h4>{{ $detail->event_name }}</h4>
                        <div class="place-sec">
                            <strong>{{ date('tS-M', strtotime($detail->sdate)) }},{{ $detail->city }},{{ $detail->country }}</strong>
                        </div>
                        <div class="event-info">
                            {{ $detail->event_name }}
                            ({{ $detail->event_title }})
                            prestigious event organized with a motivation to provide an excellent international platform for the academicians, researchers, engineers, industrial participants and budding students around the world to SHARE their research findings with the global experts.
                        </div>
                        <a href="{{ route('event-detail-fr', ['event_id' => $detail->event_id]) }}" class="prom_submit"
                            target="_blank">Voir plus</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
