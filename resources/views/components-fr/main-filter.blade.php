<style>
    body {
        background: #fff;
    }

    .box {
        margin-bottom: 80px;
    }

    .text-center {
        text-align: center;
    }

    section {
        padding: 60px 30px 0px;
    }

    .hero {
        color: #fff;
        border: 1px solid #000;
        border-radius: 30px;
        height: 275px
    }

    .tm-top-bar.active .navbar-expand-lg .navbar-nav .nav-link {
        padding: 3px 19px;
    }

    .is-open img {
        background: #dc3545;
        border-radius: 100px;
        padding: 3px;
    }

    .hero:before {
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
    }

    span.vis {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
    }

    .hero .container {
        position: relative;
        z-index: 2;
    }

    .btn-danger,
    .btn-danger:hover {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .megamenu {
        background: rgb(24 62 131);
        z-index: 15;
        box-shadow: 0 2px 20px 0 rgba(0, 0, 0, .1);
        width: 95%;
        margin: auto;
        position: relative;
        top: 42px;
        border-radius: 30px;
        padding: 5px;
    }

    .megamenu .megamenu-nav {
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
    }

    .megamenu .megamenu-nav .nav-item {
        display: block;
    }

    .megamenu .megamenu-nav .nav-item.is-open>.megamenu-content {
        visibility: visible;
        opacity: 1;
    }

    .megamenu .megamenu-nav .nav-item.is-open>.nav-link {
        background: #fff;
        color: #333;
    }

    .megamenu .megamenu-nav .nav-link {
        color: #fff;
        padding: 17px 9px;
        text-align: center;
        line-height: 32px;
    }

    .megamenu .megamenu-nav .nav-link:hover {
        background: #fff;
        color: #333;
    }

    .megamenu .megamenu-content {
        position: absolute;
        left: 0;
        right: 0;
        top: 95px;
        overflow: hidden;
        visibility: hidden;
        opacity: 0;
        z-index: 14;
        transition: all .3s ease-in-out;
    }

    .megamenu .megamenu-content .container {
        padding: 20px 40px 25px;
        background: #fff;
        border: 1px solid #c2bfbf;
        border-radius: 5px;
    }

    .megamenu .megamenu-content .subnav {
        margin: 0;
        padding: 0;
    }

    .megamenu .megamenu-content .subnav-item {
        /* display: block; */
        line-height: 31px;
        list-style: circle;
    }

    .megamenu .megamenu-content .subnav-item a {
        color: #000;
    }

    .megamenu-content h3 {
        font-weight: 600;
    }

    .megamenu .megamenu-content .subnav-item .subnav-link {
        padding: 10px 0;
        display: block;
    }

    .megamenu-background {
        background-color: #fff;
        position: absolute;
        left: 0;
        top: 82px;
        right: 0;
        margin: auto;
        height: auto !important;
        transition: all .3s ease-in-out;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        z-index: 13;
    }


    body.megamenu-visible .megamenu-dim {
        z-index: 12;
        visibility: visible;
        opacity: 1;
    }

    .selection {
        color: #000;
        font-size: 20px;
        margin-bottom: 5px;
    }

    .top {
        background: #e5efff;
        padding: 7px 10px 6px;
        font-size: 14px;
        border-radius: 10px;
        font-weight: 600;
        margin-right: 4px;
    }

    .top .fa {
        font-size: 13px;
        margin-right: 3px;
        color: #f40f25;
    }

    .sub-top {
        font-size: 16px;
        font-weight: 600;
    }

    /* the code below is for the dropdown menu */
    .wrapper-dropdown {
        position: relative;
        display: inline-block;
        width: 100%;
        padding: 25px 0px 25px 0px;
        border-radius: 15px;
        /* background: #1c2028; */
        text-align: left;
        color: #000;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        margin-bottom: 0;
    }


    .scrollable-menu {
        height: auto;
        max-height: 200px;
        overflow-x: hidden;
    }

    .arrow {
        margin-left: 10px;
        margin-right: 10px;
        float: right;
        rotate: 180deg;
    }

    .selected-display {
        margin-left: 20px;
        font-size: 20px;
    }

    svg {
        transition: all 0.3s;
    }

    .wrapper-dropdown::before {
        position: absolute;
        top: 50%;
        right: 16px;

        margin-top: -2px;

        border-width: 6px 6px 0 6px;
        border-style: solid;
        border-color: #fff transparent;
    }

    .rotated {
        transform: rotate(-180deg);
    }

    .wrapper-dropdown .dropdown {
        transition: 0.3s;
        height: 300px;
        overflow-y: scroll;
        position: absolute;
        top: 108%;
        right: 0;
        left: 0;
        margin: 0;
        padding: 0;
        list-style: none;
        z-index: 99;
        border-radius: 15px;
        box-shadow: inherit;
        background: inherit;
        -webkit-transform-origin: top;
        -moz-transform-origin: top;
        -ms-transform-origin: top;
        transform-origin: top;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        opacity: 0;
        visibility: hidden;
    }

    .wrapper-dropdown .dropdown li {
        padding: 0 15px;
        line-height: 45px;
        overflow: hidden;
        border-bottom: 1px solid #dadada;
    }

    .wrapper-dropdown .dropdown li:last-child {
        border-bottom: none;
    }

    .dropdown {
        padding: 0.5rem !important;
    }

    .wrapper-dropdown .dropdown li:hover {
        background-color: rgb(24 62 131);
        border-radius: 10px;
        color: #fff;
    }

    .wrapper-dropdown.active .dropdown {
        opacity: 1;
        visibility: visible;
        border-radius: 0;
        background: #fff;
        border: 1px solid #00000054;
        margin-top: -14px;
    }

    .drop .col-sm-4 {
        border-right: 1px solid #dadada;
        box-shadow: rgba(0, 0, 0, 0.06) 0 8px 30px;
    }

    div#dropdown .active {
        background: #eee;
    }

    .select2-results__options::-webkit-scrollbar {
        width: 6px;
        height: 6px;
        cursor: pointer !important;
    }

    .select2-results__options::-webkit-scrollbar-thumb {
        box-shadow: inset 0 0 6px rgb(81 88 101);
    }

    button.subnav-item {
        background: #fff;
        border: none;
        padding: 0px;
        list-style: circle !important;
        width: 100%;
        text-align: left;
    }

    button:focus {
        outline: 1px dotted;
        outline: 0px auto -webkit-focus-ring-color;
    }

    button:hover {
        background: #eee;

    }

    .select2-container--classic .select2-selection--single {
        background-color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        outline: 0;
        /* background-image: -webkit-linear-gradient(top, #fff 50%, #eee 100%); */
        background-image: -o-linear-gradient(top, #fff 50%, #eee 100%);
        background-image: linear-gradient(to bottom, #fff 50%, #fff 100%);
        /* background-repeat: repeat-x; */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF', endColorstr='#FFEEEEEE', GradientType=0);
    }

    .select2-container--classic .select2-selection--single:focus {
        border: 1px solid #ffffff;
    }

    .drop {
        padding: 25px 10px 25px 10px;
    }

    .select2-container--classic.select2-container--open .select2-dropdown {
        /* border-color: #5897fb; */
        background: #fff;
        border: 1px solid #00000054;
    }

    .select2-container--classic .select2-selection--single .select2-selection__rendered {
        color: #000;
        line-height: 28px;
        font-size: 19px;
        padding: 0px 11px;
    }

    .select2-container--classic.select2-container--open .select2-selection--single {
        border: 1px solid #b9b9b9;
    }

    .select2-container--classic .select2-results__option--highlighted.select2-results__option--selectable {
        background-color: rgb(24 62 131);
        border-radius: 10px;
        color: #fff;
    }

    @media (max-width: 768px) {
        .hero {
            height: 433px;
        }

        .dots-loader:not(:required) {
            left: 35% !important;
            top: 20% !important;
        }

        .select2-container--classic .select2-selection--single .select2-selection__rendered {
            font-size: 17px !important;
        }

        .megamenu .megamenu-content .subnav {
            columns: 2 !important;
        }

        .megamenu {
            width: 100%;
            padding: 10px;
        }

        .megamenu .megamenu-nav {
            overflow-x: scroll;
            justify-content: flex-start;
        }

        .megamenu .megamenu-nav .nav-link {
            padding: 7px 12px !important;
            text-align: center;
            line-height: 19px !important;
            font-size: 11px !important;
        }

        .drop .col-sm-4 {
            border-right: none;
        }

        .megamenu-content h3 {
            font-size: 20px;
        }

        .vis {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }

        .col-12.pr-5 {
            padding: 0px;
        }

        .megamenu .megamenu-content .subnav-item {
            line-height: 17px;
            list-style: circle;
            margin-bottom: 12px;
            font-size: 13px;
        }
    }

    .loading * {
        display: none;
    }

    .dots-loader:not(:required) {
        opacity: 1;
        overflow: hidden;
        position: relative;
        left: 45%;
        top: 20%;
        margin-left: 0px;
        margin-top: 0px;
        text-indent: -9999px;
        display: inline-block;
        width: 120px;
        height: 120px;
        background: url('/img/loading-f.gif');
        animation: dots-loader 5s infinite ease-in-out;
        transform-origin: 50% 50%;
        transform: scale(1);
        transition: .3s all;
    }

    .loaded .dots-loader {
        opacity: 0;
        z-index: -1;
        background-color: #f00;
        pointer-events: none;
        transform: scale(0);
    }

    .m-top {
        background: linear-gradient(316.24deg, #eeeeff -37.01%, #f9ecec 100%) !important;
        border-left: 3px solid #dc3545 !important;
        padding-left: 11px !important;
        font-weight: 800;
        text-transform: uppercase;
        font-size: 13px;
    }

    @media screen and (max-width: 991px) {
        .text-center {
            font-size: 2.0vw;
        }
    }

    .megamenu-nav .nav-item:hover {
        background-color: #f1f1f1;
    }

    .megamenu-nav .nav-item:hover .megamenu-content {
        display: block;
    }

    .megamenu-nav .megamenu-content {
        display: none;
    }

    .select-list-container {
        display: flex;
        gap: 3px;
        justify-content: left;
        align-items: center;
    }

    .select-item {
        display: flex;
        align-items: center;
    }

    .separator {
        margin: 0 5px;
        color: black;
    }

    .subnav {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .subnav-item {
        cursor: pointer;
        display: block;
        padding: 3px;
        text-decoration: none;
    }

    li.subnav-item {
        list-style-type: disclosure-closed;
    }
</style>
<div class="container">

    <nav class="megamenu">
        <ul class="megamenu-nav d-flex justify-content-center" role="menu">
            @foreach ($topicList as $url => $name)
                <li class="nav-item is-parent text-capitalize">
                    <a class="nav-link flex-col" style="cursor: pointer" id="megamenu-dropdown-{{ $loop->index }}"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="/img/topic/{{ $url }}.png" width="30px">
                        <div>{{ $name }}</div>
                    </a>
                    <div class="megamenu-content" aria-labelledby="megamenu-dropdown-{{ $loop->index }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 pr-5">
                                    <h3 class="text-center"><span
                                            style=" background: linear-gradient(316.24deg,#ae1010 24.99%,#030351 100%); padding: 8px; border-radius: 5px; font-size: 24px;">
                                            <a href="{{ route('topic-page', ['topic' => $url]) }}"
                                                style=" color: #fff;">
                                                {{ $name }}</a></span> Sub Topics</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="subnav" id="{{ $url }}_ul">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="megamenu-background" id="megamenu-background"></div>
    </nav>
    <div class="megamenu-dim" id="megamenu-dim"></div>
    <section class="hero">
        <div class="container pt-4">
            <div class="selection text-capitalize">
                <div class="select-list-container">
                    <div class="select-item" id="city-country-select">
                        @if (request()->country)
                            <span class="sub-top sub_topic text-capitalize">
                                {{ $countryNameFr }}
                            </span>
                            <a onclick="city_country_clear();" class="city_country_clear p-1">
                                <img src="/img/close-button.png" style="width: 18px; cursor: pointer;">
                            </a>
                            <span class="separator"> | </span>
                        @endif
                    </div>
                    <div class="select-item" id="subtopic-select">
                        @if (request()->topic)
                            <span class="sub-top sub_topic text-capitalize">
                                {{ $topicNameFr }}
                            </span>
                            <a onclick="subtopic_clear();" class="subtopic_clear p-1">
                                <img src="/img/close-button.png" style="width: 18px; cursor: pointer;">
                            </a>
                            <span class="separator"> | </span>
                        @endif
                    </div>
                    <div class="select-item" id="month-select">
                        @if (request()->month)
                            <span class="sub-top sub_topic text-capitalize">
                                {{ $monthNameFr }}
                            </span>
                            <a onclick="month_clear();" class="month_clear p-1">
                                <img src="/img/close-button.png" style="width: 18px; cursor: pointer;">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row drop select_row">
                <div class="col-sm-4">
                    <div class="center">
                        <div class="drop">
                            <span style="display: flex;"><i class="fa fa-calendar" aria-hidden="true"
                                    style="color: #000;position: relative;top: 4px; font-size: 19px;"></i>&nbsp;
                                <select class="dropdown select_months" id="selected_month">
                                    <option value="{{ request()->month ? request()->month : '' }}">
                                        {{ request()->month ? $monthNameFr : 'Select Month' }}</option>
                                    @foreach ($monthList as $url => $name)
                                        <option value="{{ $url }}" data-name="{{ $name }}">
                                            {{ $name }} </option>
                                    @endforeach
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="center">
                        <div class="drop">
                            <span style="display: flex;"><i class="fa fa-map-signs" aria-hidden="true"
                                    style="color: #000;position: relative;top: 4px; font-size: 19px;"></i>&nbsp;
                                <select class="dropdown select_countries" id="selected_country">
                                    <option value="{{ request()->country ? request()->country : '' }}">
                                        {{ request()->country ? $countryNameFr : 'Select Country' }}
                                    </option>
                                    @foreach ($topCountry as $url => $name)
                                        <option value="{{ $url }}" data-name="{{ $name }}">
                                            {{ $name }} </option>
                                    @endforeach
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="border: none">
                    <div class="center">
                        <div class="drop">
                            <span style="display: flex;"><i class="fa fa-map-o" aria-hidden="true"
                                    style="color: #000;position: relative;top: 4px; font-size: 19px;"></i>&nbsp;
                                <select class="dropdown select_cities" id="selected_city">
                                    <option value="">
                                        {{ request()->city ? ucfirst(str_replace('-', ' ', request()->city)) : 'Select City' }}
                                    </option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center" style="position: relative;text-align: center;">
                <button type="submit" class="btn btn-danger search_loading"
                    style="font-size: 19px;padding: 9px 36px;
                      border-radius: 10px;text-transform: uppercase;font-weight: 600;letter-spacing: 0.5px;"
                    onclick="search();">Search</button>
            </div>
        </div>
        <div class="dots-loader"></div>
    </section>
</div>

<script>
    $(document).ready(function() {

        localStorage.removeItem('subTopicUrl');

        var selectedCountry = $('#selected_country').val();
        var citySelect = $('#selected_city');
        var countryWithCity = @json($countryWithCity);
        var subTopicUrl = "{{ request()->topic }}";
        localStorage.setItem('subTopicUrl', subTopicUrl);

        // update the cities based on the selected country
        function updateCities() {
            var selectedCountry = $('#selected_country').val();
            citySelect.empty();
            citySelect.append('<option value="">Select City</option>');

            if (countryWithCity[selectedCountry]) {
                $.each(countryWithCity[selectedCountry], function(cityKey, cityName) {
                    citySelect.append(
                        $(`<option value="${cityKey}" data-name="${cityName}">${cityName}</option>`)
                    );
                });
            }
        }

        updateCities();

        $('#selected_country').change(function() {
            updateCities();
        });
    });
</script>
<script>
    // topic container open script
    $(document).ready(function() {
        $('.megamenu-nav .nav-item').hover(
            function() {
                $(this).addClass('is-open');
            },
            function() {
                $(this).removeClass('is-open');
            }
        );
    });

    $('#selected_country').change(function() {
        var country = $(this).val();
        var slectedType = "country_select";
        fetch_country(country, slectedType);
    });

    $('#selected_city').change(function() {
        var city = $(this).val();
        var slectedType = "city_select";
        fetch_country(city, slectedType);
    });

    function fetch_country(data, slectedType) {
        $('.hero').removeClass('loaded')
        $('.hero').addClass('loading');
        const fetch_country_api = async () => {
            const response = await fetch('{{ route('subtopics-fetch-api-fr') }}', {
                method: 'POST',
                body: JSON.stringify({
                    "slectedType": slectedType,
                    "data": data,
                }),
            });
            const myJson = await response.json();
            $('.hero').removeClass('loading')
            $('.hero').addClass('loaded');

            Object.keys(myJson).forEach((topicName) => {
                const subtopicsList = myJson[topicName];
                const topicList = $(`#${topicName}_ul`);

                topicList.empty();

                if (myJson[topicName].length === 0) {
                    topicList.append(
                        $(`<li><button class="subnav-item text-capitalize text-center" 
                                                        value="">
                                                        No Subtopics for ${data.replace(/-/g, ' ')}
                                                    </button></li>`)
                    );
                } else {
                    Object.entries(subtopicsList).forEach(([subTopicUrl, subTopicName]) => {
                        topicList.append(
                            $(`<li style="list-style-type: disclosure-closed;">
                                <div class="subnav-item" data-url="${subTopicUrl}" data-name="${subTopicName}">
                                    ${subTopicName}
                                </div>
                            </li>`)
                        );
                    });
                }
            });
        }
        fetch_country_api();
    }

    // if clicked subtopic
    $(document).on('click', '.subnav-item', function() {
        var subTopicName = $(this).data('name');
        var subTopicUrl = $(this).data('url');

        localStorage.setItem('subTopicUrl', subTopicUrl);

        $('.megamenu-nav .nav-item').removeClass('is-open');
        $("#subtopic-select").empty();
        $("#subtopic-select").append(`
        <span data-subtopicUrl="${subTopicUrl}" class="sub-top sub_topic text-capitalize">
            ${subTopicName}
        </span>
        <a onclick="subtopic_clear();" class="subtopic_clear p-1">
            <img src="/img/close-button.png" style="width: 18px; cursor: pointer;">
        </a>
         <span class="separator"> | </span>
    `);
    });

    //  country and city selected
    $('#selected_country, #selected_city').on('change', function() {
        const country = $('#selected_country option:selected').data('name');
        const city = $('#selected_city option:selected').data('name');
        const cityCountry = city || country;

        $("#city-country-select").empty();

        $("#city-country-select").append(`
            <span class="sub-top sub_topic text-capitalize">
                ${cityCountry.replace(/-/g, ' ')}
            </span>
            <a onclick="country_clear();" class="country_clear p-1">
                <img src="/img/close-button.png" style="width: 18px; cursor: pointer;">
            </a>
             <span class="separator"> | </span>
        `);
    });

    // month selected
    $('#selected_month').on('change', function() {
        const monthName = $('#selected_month option:selected').data('name');

        $("#month-select").empty();

        $("#month-select").append(`
        <span class="sub-top sub_topic text-capitalize">
            ${monthName}
        </span>
        <a onclick="month_clear();" class="month_clear p-1">
            <img src="/img/close-button.png" style="width: 18px; cursor: pointer;">
        </a>
    `);
    });


    // clear city or country without using coutnry and city redirect to other pages
    function city_country_clear() {
        $("#city-country-select").empty();
        var monthUrl = $("#selected_month").val();
        var subtopicUrl = localStorage.getItem('subTopicUrl');

        if (subtopicUrl) {
            if (subtopicUrl && monthUrl) {
                window.location.href =
                    '{{ route('topic-month-page-fr', ['topic' => '__TOPIC__', 'month' => '__MONTH__']) }}'
                    .replace('__TOPIC__', subtopicUrl)
                    .replace('__MONTH__', monthUrl);
            } else {
                window.location.href = '{{ route('topic-page-fr', ['topic' => '__TOPIC__']) }}'
                    .replace('__TOPIC__', subtopicUrl);
            }

        } else if (monthUrl) {
            window.location.href = '{{ route('month-page-fr', ['month' => '__MONTH__']) }}'
                .replace('__MONTH__', monthUrl);
        }

    }

    // clear subtopic without using subtopic redirect to other pages
    function subtopic_clear() {
        $("#subtopic-select").empty();

        var monthUrl = $("#selected_month").val();
        var countryUrl = $("#selected_country").val();
        var cityUrl = $("#selected_city").val();

        if (cityUrl) {
            if (cityUrl && monthUrl) {
                window.location.href =
                    '{{ route('city-month-page-fr', ['city' => '__CITY__', 'month' => '__MONTH__']) }}'
                    .replace('__CITY__', cityUrl)
                    .replace('__MONTH__', monthUrl);
                return;

            } else {
                window.location.href = '{{ route('city-page-fr', ['city' => '__CITY__']) }}'
                    .replace('__CITY__', cityUrl);
                return;
            }

        } else if (countryUrl) {
            if (countryUrl && monthUrl) {
                window.location.href =
                    '{{ route('country-month-page-fr', ['country' => '__COUNTRY__', 'month' => '__MONTH__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__MONTH__', monthUrl);
                return;
            } else {
                window.location.href = '{{ route('country-page-fr', ['country' => '__COUNTRY__']) }}'
                    .replace('__COUNTRY__', countryUrl);
                return;
            }
        } else if (monthUrl) {
            window.location.href = '{{ route('month-page-fr', ['month' => '__MONTH__']) }}'
                .replace('__MONTH__', monthUrl);
            return;
        }

    }

    // clear cmonth without using month redirect to other pages
    function month_clear() {
        $("#month-select").empty();

        var countryUrl = $("#selected_country").val();
        var cityUrl = $("#selected_city").val();
        var subtopicUrl = localStorage.getItem('subTopicUrl');

        if (cityUrl) {

            if (cityUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('city-topic-page-fr', ['city' => '__CITY__', 'topic' => '__TOPIC__']) }}'
                    .replace('__CITY__', cityUrl)
                    .replace('__TOPIC__', subtopicUrl);
                return;
            } else {
                window.location.href = '{{ route('city-page-fr', ['city' => '__CITY__']) }}'
                    .replace('__CITY__', cityUrl);
                return;
            }
        } else if (countryUrl) {

            if (countryUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('country-topic-page-fr', ['country' => '__COUNTRY__', 'topic' => '__TOPIC__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__TOPIC__', subtopicUrl);
                return;
            } else {
                window.location.href = '{{ route('country-page-fr', ['country' => '__COUNTRY__']) }}'
                    .replace('__COUNTRY__', countryUrl);
                return;
            }
        } else if (subtopicUrl) {
            window.location.href = '{{ route('topic-page-fr', ['topic' => '__TOPIC__']) }}'
                .replace('__TOPIC__', subtopicUrl);
            return;
        }

    }

    // search 
    function search() {
        $('.search_loading').text("loading...")
        $('.search_loading').css("background-color", "rgb(24 62 131)");
        $('.search_loading').css("border-color", "blue");

        var monthUrl = $("#selected_month").val();
        var countryUrl = $("#selected_country").val();
        var cityUrl = $("#selected_city").val();
        var subtopicUrl = localStorage.getItem('subTopicUrl');

        if (cityUrl) {
            if (cityUrl && monthUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('city-topic-month-page-fr', ['city' => '__CITY__', 'topic' => '__TOPIC__', 'month' => '__MONTH__']) }}'
                    .replace('__CITY__', cityUrl)
                    .replace('__TOPIC__', subtopicUrl)
                    .replace('__MONTH__', monthUrl);
                return;
            } else if (cityUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('city-topic-page-fr', ['city' => '__CITY__', 'topic' => '__TOPIC__']) }}'
                    .replace('__CITY__', cityUrl)
                    .replace('__TOPIC__', subtopicUrl);
                return;
            } else if (cityUrl && monthUrl) {
                window.location.href =
                    '{{ route('city-month-page-fr', ['city' => '__CITY__', 'month' => '__MONTH__']) }}'
                    .replace('__CITY__', cityUrl)
                    .replace('__MONTH__', monthUrl);
                return;
            } else {
                window.location.href = '{{ route('city-page-fr', ['city' => '__CITY__']) }}'
                    .replace('__CITY__', cityUrl);
                return;
            }

        } else if (countryUrl) {

            if (countryUrl && monthUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('country-topic-month-page-fr', ['country' => '__COUNTRY__', 'topic' => '__TOPIC__', 'month' => '__MONTH__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__TOPIC__', subtopicUrl)
                    .replace('__MONTH__', monthUrl);
                return;
            } else if (countryUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('country-topic-page-fr', ['country' => '__COUNTRY__', 'topic' => '__TOPIC__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__TOPIC__', subtopicUrl);
                return;
            } else if (countryUrl && monthUrl) {
                window.location.href =
                    '{{ route('country-month-page-fr', ['country' => '__COUNTRY__', 'month' => '__MONTH__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__MONTH__', monthUrl);
                return;
            } else {
                window.location.href = '{{ route('country-page-fr', ['country' => '__COUNTRY__']) }}'
                    .replace('__COUNTRY__', countryUrl);
                return;
            }
        } else if (subtopicUrl) {
            if (subtopicUrl && monthUrl) {
                window.location.href =
                    '{{ route('topic-month-page-fr', ['topic' => '__TOPIC__', 'month' => '__MONTH__']) }}'
                    .replace('__TOPIC__', subtopicUrl)
                    .replace('__MONTH__', monthUrl);
                return;
            } else {
                window.location.href = '{{ route('topic-page-fr', ['topic' => '__TOPIC__']) }}'
                    .replace('__TOPIC__', subtopicUrl);

                return;
            }

        } else if (monthUrl) {
            window.location.href = '{{ route('month-page-fr', ['month' => '__MONTH__']) }}'
                .replace('__MONTH__', monthUrl);
            return;
        }
    }
</script>
