<div class="col-sm-3 topic-left-grid">
    <div class="conn-liss">
        <h3>Popular Country</h3>
        <div class="city-cont">
            <ul>
                @foreach ($topCountry as $url => $name)
                    <li><a href="{{ route('country-page', ['country' => $url]) }}">{{ $name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div style="margin-bottom: 2rem;">
        <a href="https://conferenceineurope.net/blog/conference-in-europe-with-invitation-letter" id="invitation-letter"
            target="_blank"> <img alt="conference in europe with invitation letter" src="/img/invitation-letter.png"
                width="100%" /> </a>
    </div>
    <div class="event-promtion dskview">
        <h4 class="event-title">Global Event Promotion</h4>
        <div class="promot-heading">
            @foreach ($upcomingEvent as $detail)
                <div class="dte">
                    <h4>{{ $detail->event_name }}</h4>
                    <div class="place-sec">
                        <strong>{{ date('tS-M', strtotime($detail->sdate)) }},{{ $detail->city }},{{ $detail->country }}</strong>
                    </div>
                    <div class="event-info">
                        {{ $detail->event_name }} ({{ $detail->event_title }})
                        is a prestigious event organized with a motivation to
                        provide an excellent international platform for the
                        academicians, researchers, engineers, industrial
                        participants and budding students around the world to SHARE
                        their research findings with the global experts. <a
                            href="{{ route('event-detail', ['id' => $detail->event_id]) }}" class="prom_submit"
                            target="_blank">View
                            More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mobileview">
        <p class="event-title">
            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                aria-controls="collapseExample" style="color: #fff;">
                Global Event Promotion <i class="fa fa-angle-double-down iconn" aria-hidden="true"></i>
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
                            is a prestigious event
                            organized with a motivation to provide an excellent
                            international platform for the academicians,
                            researchers, engineers, industrial participants and
                            budding students around the world to SHARE their
                            research findings with the global experts. <a
                                href="{{ route('event-detail', ['id' => $detail->event_id]) }}" class="prom_submit"
                                target="_blank">View More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
