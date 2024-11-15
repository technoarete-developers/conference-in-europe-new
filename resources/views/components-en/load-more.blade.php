@if ($events->total() > 50)
    @if ($events->currentPage() < $events->lastPage())
        <div class="text pt-3" style="text-align:center;">
            <h5 class="text-center">
                <button class="btn load-more" id="load-more-btn" data-current-page="{{ $events->currentPage() }}"
                    style="background-color: darkblue;color: white;">
                    <span class="btn-txt">More Conference</span>
                </button>
                <button class="btn loading-button" id="load-more-btn" data-current-page="{{ $events->currentPage() }}"
                    style="background-color: darkblue;color: white; display:none;">
                    <i class="fa fa-spinner fa-spin"></i>
                    <span class="btn-txt">Loading...</span>
                </button>
            </h5>
        </div>
    @endif
@endif
