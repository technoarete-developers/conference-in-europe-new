
<div class="container">
    <nav class="megamenu">
        <ul class="megamenu-nav d-flex justify-content-between px-3" role="menu">
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
                                                {{ $name }}</a></span> Sous-thèmes</h3>
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
                        @if (request()->city || request()->country)
                            <span class="sub-top sub_topic text-capitalize">
                                {{ request()->city ? str_replace('-', ' ', request()->city) : str_replace('-', ' ', request()->country) }}
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
                                        {{ request()->month ? $monthNameFr : 'Sélectionnez le mois' }}</option>
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
                                        {{ request()->country ? $countryNameFr : 'Sélectionnez un pays' }}
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
                                        {{ request()->city ? ucfirst(str_replace('-', ' ', request()->city)) : 'Sélectionnez la ville' }}
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
                    onclick="search();">Recherche</button>
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
            citySelect.append('<option value="">Sélectionnez la ville</option>');

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


    $(document).ready(function() {
        var topicJson = @json($topicStopicList);
        $('.hero').removeClass('loading')
        $('.hero').addClass('loaded');
        Object.keys(topicJson).forEach((topicName) => {
            const topicList = $(`#${topicName}_ul`);
            topicList.empty();

            Object.entries(topicJson[topicName]).forEach(([subTopicUrl, subTopicName]) => {

                topicList.append(
                    $(`<li style="list-style-type: disclosure-closed;">
                        <div class="subnav-item" data-url="${subTopicUrl}" data-name="${subTopicName}">
                            ${subTopicName}
                        </div>
                    </li>`)
                );
            });
        });
    });


    $('#selected_country').change(function() {
        var country = $(this).val();
        var slectedType = "country";
        fetch_country(country, slectedType);
    });

    $('#selected_city').change(function() {
        var city = $(this).val();
        var slectedType = "city";
        fetch_country(city, slectedType);
    });


    function fetch_country(data, slectedType) {
        $('.hero').removeClass('loaded');
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
            $('.hero').removeClass('loading');
            $('.hero').addClass('loaded');

            Object.keys(myJson).forEach((topicName) => {
                const subtopicsList = myJson[topicName];
                const topicList = $(`#${topicName}_ul`);
                const country = $('#selected_country option:selected').data('name');
                const city = $('#selected_city option:selected').data('name');
                const cityCountry = city || country;

                topicList.empty();

                if (myJson[topicName].length === 0) {
                    topicList.append(
                        $(`<li><button class="subnav-item text-capitalize text-center" 
                                                        value="">
                                                        Aucun sous-thème pour ${cityCountry}
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
               
            } else {
                window.location.href = '{{ route('city-page-fr', ['city' => '__CITY__']) }}'
                    .replace('__CITY__', cityUrl);
                           }

        } else if (countryUrl) {
            if (countryUrl && monthUrl) {
                window.location.href =
                    '{{ route('country-month-page-fr', ['country' => '__COUNTRY__', 'month' => '__MONTH__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__MONTH__', monthUrl);
                           } else {
                window.location.href = '{{ route('country-page-fr', ['country' => '__COUNTRY__']) }}'
                    .replace('__COUNTRY__', countryUrl);
                           }
        } else if (monthUrl) {
            window.location.href = '{{ route('month-page-fr', ['month' => '__MONTH__']) }}'
                .replace('__MONTH__', monthUrl);
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
                           } else {
                window.location.href = '{{ route('city-page-fr', ['city' => '__CITY__']) }}'
                    .replace('__CITY__', cityUrl);
                           }
        } else if (countryUrl) {

            if (countryUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('country-topic-page-fr', ['country' => '__COUNTRY__', 'topic' => '__TOPIC__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__TOPIC__', subtopicUrl);
                           } else {
                window.location.href = '{{ route('country-page-fr', ['country' => '__COUNTRY__']) }}'
                    .replace('__COUNTRY__', countryUrl);
                           }
        } else if (subtopicUrl) {
            window.location.href = '{{ route('topic-page-fr', ['topic' => '__TOPIC__']) }}'
                .replace('__TOPIC__', subtopicUrl);
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
                           } else if (cityUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('city-topic-page-fr', ['city' => '__CITY__', 'topic' => '__TOPIC__']) }}'
                    .replace('__CITY__', cityUrl)
                    .replace('__TOPIC__', subtopicUrl);
                           } else if (cityUrl && monthUrl) {
                window.location.href =
                    '{{ route('city-month-page-fr', ['city' => '__CITY__', 'month' => '__MONTH__']) }}'
                    .replace('__CITY__', cityUrl)
                    .replace('__MONTH__', monthUrl);
                           } else {
                window.location.href = '{{ route('city-page-fr', ['city' => '__CITY__']) }}'
                    .replace('__CITY__', cityUrl);
                           }

        } else if (countryUrl) {

            if (countryUrl && monthUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('country-topic-month-page-fr', ['country' => '__COUNTRY__', 'topic' => '__TOPIC__', 'month' => '__MONTH__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__TOPIC__', subtopicUrl)
                    .replace('__MONTH__', monthUrl);
                           } else if (countryUrl && subtopicUrl) {
                window.location.href =
                    '{{ route('country-topic-page-fr', ['country' => '__COUNTRY__', 'topic' => '__TOPIC__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__TOPIC__', subtopicUrl);
                           } else if (countryUrl && monthUrl) {
                window.location.href =
                    '{{ route('country-month-page-fr', ['country' => '__COUNTRY__', 'month' => '__MONTH__']) }}'
                    .replace('__COUNTRY__', countryUrl)
                    .replace('__MONTH__', monthUrl);
                           } else {
                window.location.href = '{{ route('country-page-fr', ['country' => '__COUNTRY__']) }}'
                    .replace('__COUNTRY__', countryUrl);
                           }
        } else if (subtopicUrl) {
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
</script>
