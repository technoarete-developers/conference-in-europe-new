<div class="col-sm-3 topic-left-grid">
    <div style="margin-bottom: 2rem;">
        <a href="https://conferenceineurope.net/blog/conference-in-europe-with-invitation-letter" id="invitation-letter"
            target="_blank"> <img alt="conference in europe with invitation letter" src="/img/invitation-letter.png"
                width="100%" /> </a>
    </div>

    <div class="event-promtion">
        <h3 style="color: #b03031;">Add Your Event</h3>
        <div class="col-sm-12 e-card">
            <p>Conference in Europe are an excellent platform to promote your event and make it a huge success. We have
                garnered thousands of followers, subscribers, and monthly more than one lakh visitors to our website!
                So, by adding your event to our website, you and your business will reach a wider audience that will
                find your conference very beneficial.</p>
            <p>Whether you are planning to organize an online conference or an offline event, Conference in Europe is
                here for you.</p>
            <p>Here is how adding your event to Conference in Europe can help your business:</p>
            <ul>
                <li>Get More Potential Audiences:</li>
                <li>Increases The Number of People Engage your event:</li>
                <li>Make it Easier to Form Important Partnerships:</li>
            </ul>
            <div class="text-center" style="margin-top: 12%;margin-left: -54%;">
                <a href="{{ route('add-event') }}"
                    style="background: linear-gradient(316.24deg,#ae1010 24.99%,#030351 100%);color: #fff;padding: 8px;border-radius: 5px;margin-top: 9%;margin-left: 11%;">Add
                    Event</a>
            </div>
            <div class="text-center">
                <img src="/img/book.png" width="80%" style="margin-bottom: 12px;margin-top: 3%;">
            </div>
        </div>
    </div>

    <div class="event-promtion">
        <h4 class="event-title">Event Promotion</h4>
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
                        their research findings with the global experts.
                    </div>
                    <a href="{{ route('event-detail', ['id' => $detail->event_id]) }}" class="prom_submit"
                        target="_blank">View
                        More</a>
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
                            research findings with the global experts.
                        </div>
                        <a href="{{ route('event-detail', ['id' => $detail->event_id]) }}" class="prom_submit"
                            target="_blank">View More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
