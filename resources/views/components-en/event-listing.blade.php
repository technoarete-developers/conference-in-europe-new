<div id="events-container">
    @foreach ($events as $details)
        <a class="text-decoration-none p-2" href="{{ route('event-detail', ['id' => $details->event_id]) }}">
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
</div>
