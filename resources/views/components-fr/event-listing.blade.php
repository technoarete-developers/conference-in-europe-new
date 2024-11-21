<div id="events-container">
    @if ($events->total() > 0)
        @foreach ($events as $details)
            <a class="text-decoration-none p-2" href="{{ route('event-detail-fr', ['event_id' => $details->event_id]) }}">
                <div class="row border-bottom py-2" style="color: #000;">
                    <div class="col-2">{{ date('dS-M', strtotime($details->sdate)) }}</div>
                    <div class="col-7 " style="color: #031e6b;">
                        {{ $details->event_name }}
                    </div>
                    <div class="col-3"> {{ $details->city }},
                        {{ $details->country }}</div>
                </div>
            </a>
        @endforeach
    @else
        <div>
            <h3>Aucun événement trouvé</h3>
        </div>
    @endif
</div>
