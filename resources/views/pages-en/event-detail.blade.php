@extends('layout-en.master')

@section('meta')
    <title>{{ $events->event_name }}</title>
    <meta name="keyword" content="" />
    <meta name="description"
        content="{{ $events->event_name }} {{ $events->event_title }}portal and get lnformation in your inbox." />

    <meta property="og:title" content="{{ $events->event_name }}" />
    <meta property="og:keywords" content="" />
    <meta property="og:description"
        content="{{ $events->event_name }} {{ $events->event_title }}portal and get lnformation in your inbox." />

    <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('style')
    <style>
        body {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            font-size: 15px;
            font-weight: 400;
        }


        .tabs__buttons--container {
            display: flex;
            margin-bottom: 1rem;
        }

        .tabs-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-top: 53px;
        }

        .tabs__tab-btn {
            background: none;
            border: none;
            padding: 1rem 2rem;


            border-bottom: solid 2px blue;
        }

        .tabs__tab-btn--not-selected {
            border-bottom-color: #eeeeee;
        }

        .tabs__tab-btn:hover {
            /*  background-color: #eeeeee;*/
            transition: 0.3s;
        }

        .tabs__tab--hide {
            display: none;
        }

        .tabs__tab--show {
            display: block;
        }

        .tabs__tab {
            animation: tabApear 0.6s;
        }

        @keyframes tabApear {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mycontainer {
            display: flex;
        }

        .mycontainer>div {
            width: 33%;
        }

        * {
            box-sizing: border-box;
        }

        @media (max-width:768px) {
            .tabs__buttons--container {
                display: flex;
            }
            .card {
    text-align: left;
    height: 260px;
            }
            .image-text {
    position: absolute;
    bottom: 55px !important;
    left: 10px;
    padding: 5px 15px;
    border-radius: 5px;
    font-size: 16px !important;
    color: white;
    text-align: center;
}
.image-button:nth-child(1) {
    left: 13% !important;
}

}
.breadcrumb-item+.breadcrumb-item::before{

content="/";
color: #fff !important;
}

            .container-fluid {
                background-color: white !important;
                padding: 0;
            }

            .container-fluid .col-md-8 {
                padding-right: 0px !important;
            }

            .tabs__tab-btn {
                padding: 6px;
                font-size: 13px;
            }
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 33%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        .tm-bg-gray {
            background-color: #F4F4F4 !important;
            margin-top: 15px !important;
        }

        .owl-carousel .owl-item img {
            display: inline !important;
            width: 7% !important;


        }

        .owl-next {
            display: block !important;
        }

        .owl-carousel .owl-next {

            width: 28px;
            height: 22px;
            margin-top: -81px;
            float: right;
            margin-right: -30px;
        }

        .owl-prev {
            display: none !important;
        }

        .card {
            text-align: left;
            height: 170px;

        }

        /* Custom styles for mobile responsiveness */
        @media (max-width: 767px) {
            .card {
                width: 100%;
                /* Adjust the width as needed */
                margin: 0 auto;
                /* Center the cards */
            }

            .card .item h6 {
                font-size: 14px;
                /* Adjust the font size as needed */
            }

            .card .item p {
                font-size: 12px;
                /* Adjust the font size as needed */
            }
        }


        .btn-primary {
            background: #d30824;
            border-radius: 1;

        }

        .tabs__buttons--container {
            display: flex;
        }

        .tabs__tab.active {
            display: block;
        }

        .tabs__tab-btn.active {
            border-bottom: 2px solid blue;
            /* Add border below active tab button */
        }

        .global-page-header {

            background: url('/img/event-banner-new.jpg')
        }

        .image-container {
            position: relative;
            width: 100%;
        }

        .img {
            width: 100%;
            display: block;
        }

        .image-text {
            position: absolute;
            bottom: 76px;
            /* Adjust the vertical position as needed */
            left: 10px;
            /* Adjust the horizontal position as needed */

            padding: 5px 15px;
            /* Adjust padding as needed */
            border-radius: 5px;
            font-size: 22px;
            color: white;
            text-align: center;
        }

        .image-container {
            position: relative;
            width: 100%;
        }

        .img {
            width: 100%;
            display: block;
        }

        .image-button {
            position: absolute;
            /* Positions the buttons relative to the image container */

            color: #fff;
            padding: 5px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .image-button:nth-child(1) {
            background-color: #ed0000;
            top: 70%;
            /* Adjust the positioning of the first button */
            left: 20%;
            /* Adjust the positioning of the first button */
        }

        .image-button:nth-child(2) {
            background-color: #0286FF;
            top: 70%;
            /* Adjust the positioning of the second button */
            left: 50%;
            /* Adjust the positioning of the second button */
        }

        .date-new {
            margin-top: 15px;
        }

        .container-fluid {
            background-color: white !important;
            padding: 18px;
        }

        a {
            text-decoration: none;
        }
        .owl-next>span{
            background: #031e6b;
    font-size: 26px;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    position: absolute;
    right: -12px;
    top: 60px;
    /* border-radius: 50%; */
    padding: 5px 12px !important;
        }
    </style>
@endsection

@section('content')
    @include('layout-en.header')
    <div class="tm-main-content" id="top">
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Event detail</h2>
                            <ol class="breadcrumb">
                                @foreach ($breadcrumbs as $breadcrumb)
                                    <li class="breadcrumb-item">
                                        <a href="{{ $breadcrumb['url'] }}">{{ str_replace('-', ' ', $breadcrumb['title']) }}</a>
                                    </li>
                                @endforeach
                                <li class="breadcrumb-item active" aria-current="page">Event Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-2 tm-container-outer tm-bg-gray">
            @if (session()->has('smessage'))
                <div class="alert alert-success" style="color: green; font-size: 25px; text-align: center; padding: 10px">
                    <h2>{{ session()->get('smessage') }} </h2>

                </div>
            @endif
            @if (session()->has('smessage_subscribe'))
                <div class="alert alert-success" style="color: green; font-size: 25px; text-align: center; padding: 10px">
                    <h2>{{ session()->get('smessage_subscribe') }} ({{ $events->event_title }}) Conference.</h2>
                </div>
            @endif

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-4">

                        <div class="image-container">
                            <img src="/img/imageicmb.png" alt="" class="img">
                            <div class="image-text">{{ $events->event_name }} ({{ $events->event_title }})</div>
                            <div class="button-container">
                                @if (strpos($events->event_location, 'outside'))
                                    <a href="{{ $events->url }}" target="_blank"
                                        class="image-button outside-event">Attend</a>
                                @else
                                    <a href="{{ $events->url }}{{ $events->event_id }}" target="_blank"
                                        class="image-button outside-event">Attend</a>
                                @endif
                                <a href="#" target="_blank" class="image-button" data-toggle="modal"
                                    data-target="#myModal">Subscribe</a>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content moddd">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h3 class="event-text">Subscribe Us</h3>

                                        <form method="post" id="subscribe-form"
                                            action="{{ route('event-subscribe-form') }}"
                                            class="contact-form e-subscribe-form" data-toggle="validator">
                                            @csrf

                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name" required="">

                                            <input type="text" name="email" id="email" placeholder="Email Address"
                                                class="form-control">

                                            <select id="country_code" name="country_code" class="field form-control">
                                                <option value="">-- Select country code --</option>
                                                <option data-countrycode="DZ" value="+213">Algeria (+213)
                                                </option>
                                                <option data-countrycode="AD" value="+376">Andorra (+376)
                                                </option>
                                                <option data-countrycode="AO" value="+244">Angola (+244)</option>
                                                <option data-countrycode="AI" value="+1264">Anguilla (+1264)
                                                </option>
                                                <option data-countrycode="AG" value="+1268">Antigua &amp; Barbuda
                                                    (+1268)
                                                </option>
                                                <option data-countrycode="AR" value="+54">Argentina (+54)
                                                </option>
                                                <option data-countrycode="AM" value="+374">Armenia (+374)
                                                </option>
                                                <option data-countrycode="AW" value="+297">Aruba (+297)</option>
                                                <option data-countrycode="AU" value="+61">Australia (+61)
                                                </option>
                                                <option data-countrycode="AT" value="+43">Austria (+43)</option>
                                                <option data-countrycode="AZ" value="+994">Azerbaijan (+994)
                                                </option>
                                                <option data-countrycode="BS" value="+1242">Bahamas (+1242)
                                                </option>
                                                <option data-countrycode="BH" value="+973">Bahrain (+973)
                                                </option>
                                                <option data-countrycode="BD" value="+880">Bangladesh (+880)
                                                </option>
                                                <option data-countrycode="BB" value="+1246">Barbados (+1246)
                                                </option>
                                                <option data-countrycode="BY" value="+375">Belarus (+375)
                                                </option>
                                                <option data-countrycode="BE" value="+32">Belgium (+32)</option>
                                                <option data-countrycode="BZ" value="+501">Belize (+501)</option>
                                                <option data-countrycode="BJ" value="+229">Benin (+229)</option>
                                                <option data-countrycode="BM" value="+1441">Bermuda (+1441)
                                                </option>
                                                <option data-countrycode="BT" value="+975">Bhutan (+975)</option>
                                                <option data-countrycode="BO" value="+591">Bolivia (+591)
                                                </option>
                                                <option data-countrycode="BA" value="+387">Bosnia Herzegovina
                                                    (+387)</option>
                                                <option data-countrycode="BW" value="+267">Botswana (+267)
                                                </option>
                                                <option data-countrycode="BR" value="+55">Brazil (+55)</option>
                                                <option data-countrycode="BN" value="+673">Brunei (+673)</option>
                                                <option data-countrycode="BG" value="+359">Bulgaria (+359)
                                                </option>
                                                <option data-countrycode="BF" value="+226">Burkina Faso (+226)
                                                </option>
                                                <option data-countrycode="BI" value="+257">Burundi (+257)
                                                </option>
                                                <option data-countrycode="KH" value="+855">Cambodia (+855)
                                                </option>
                                                <option data-countrycode="CM" value="+237">Cameroon (+237)
                                                </option>
                                                <option data-countrycode="CA" value="+1">Canada (+1)</option>
                                                <option data-countrycode="CV" value="+238">Cape Verde Islands
                                                    (+238)</option>
                                                <option data-countrycode="KY" value="+1345">Cayman Islands
                                                    (+1345)</option>
                                                <option data-countrycode="CF" value="+236">Central African
                                                    Republic (+236)</option>
                                                <option data-countrycode="CL" value="+56">Chile (+56)</option>
                                                <option data-countrycode="CN" value="+86">China (+86)</option>
                                                <option data-countrycode="CO" value="+57">Colombia (+57)
                                                </option>
                                                <option data-countrycode="KM" value="+269">Comoros (+269)
                                                </option>
                                                <option data-countrycode="CG" value="+242">Congo (+242)</option>
                                                <option data-countrycode="CK" value="+682">Cook Islands (+682)
                                                </option>
                                                <option data-countrycode="CR" value="+506">Costa Rica (+506)
                                                </option>
                                                <option data-countrycode="HR" value="+385">Croatia (+385)
                                                </option>
                                                <option data-countrycode="CU" value="+53">Cuba (+53)</option>
                                                <option data-countrycode="CY" value="+90392">Cyprus North
                                                    (+90392)</option>
                                                <option data-countrycode="CY" value="+357">Cyprus South (+357)
                                                </option>
                                                <option data-countrycode="CZ" value="+42">Czech Republic (+42)
                                                </option>
                                                <option data-countrycode="DK" value="+45">Denmark (+45)
                                                </option>
                                                <option data-countrycode="DJ" value="+253">Djibouti (+253)
                                                </option>
                                                <option data-countrycode="DM" value="+1809">Dominica (+1809)
                                                </option>
                                                <option data-countrycode="DO" value="+1809">Dominican Republic
                                                    (+1809)</option>
                                                <option data-countrycode="EC" value="+593">Ecuador (+593)
                                                </option>
                                                <option data-countrycode="EG" value="+20">Egypt (+20)</option>
                                                <option data-countrycode="SV" value="+503">El Salvador (+503)
                                                </option>
                                                <option data-countrycode="GQ" value="+240">Equatorial Guinea
                                                    (+240)</option>
                                                <option data-countrycode="ER" value="+291">Eritrea (+291)
                                                </option>
                                                <option data-countrycode="EE" value="+372">Estonia (+372)
                                                </option>
                                                <option data-countrycode="ET" value="+251">Ethiopia (+251)
                                                </option>
                                                <option data-countrycode="FK" value="+500">Falkland Islands
                                                    (+500)</option>
                                                <option data-countrycode="FO" value="+298">Faroe Islands (+298)
                                                </option>
                                                <option data-countrycode="FJ" value="+679">Fiji (+679)</option>
                                                <option data-countrycode="FI" value="+358">Finland (+358)
                                                </option>
                                                <option data-countrycode="FR" value="+33">France (+33)</option>
                                                <option data-countrycode="GF" value="+594">French Guiana (+594)
                                                </option>
                                                <option data-countrycode="PF" value="+689">French Polynesia
                                                    (+689)</option>
                                                <option data-countrycode="GA" value="+241">Gabon (+241)</option>
                                                <option data-countrycode="GM" value="+220">Gambia (+220)
                                                </option>
                                                <option data-countrycode="GE" value="+7880">Georgia (+7880)
                                                </option>
                                                <option data-countrycode="DE" value="+49">Germany (+49)
                                                </option>
                                                <option data-countrycode="GH" value="+233">Ghana (+233)</option>
                                                <option data-countrycode="GI" value="+350">Gibraltar (+350)
                                                </option>
                                                <option data-countrycode="GR" value="+30">Greece (+30)</option>
                                                <option data-countrycode="GL" value="+299">Greenland (+299)
                                                </option>
                                                <option data-countrycode="GD" value="+1473">Grenada (+1473)
                                                </option>
                                                <option data-countrycode="GP" value="+590">Guadeloupe (+590)
                                                </option>
                                                <option data-countrycode="GU" value="+671">Guam (+671)</option>
                                                <option data-countrycode="GT" value="+502">Guatemala (+502)
                                                </option>
                                                <option data-countrycode="GN" value="+224">Guinea (+224)
                                                </option>
                                                <option data-countrycode="GW" value="+245">Guinea - Bissau
                                                    (+245)
                                                </option>
                                                <option data-countrycode="GY" value="+592">Guyana (+592)
                                                </option>
                                                <option data-countrycode="HT" value="+509">Haiti (+509)</option>
                                                <option data-countrycode="HN" value="+504">Honduras (+504)
                                                </option>
                                                <option data-countrycode="HK" value="+852">Hong Kong (+852)
                                                </option>
                                                <option data-countrycode="HU" value="+36">Hungary (+36)
                                                </option>
                                                <option data-countrycode="IS" value="+354">Iceland (+354)
                                                </option>
                                                <option data-countrycode="IN" value="+91">India (+91)</option>
                                                <option data-countrycode="ID" value="+62">Indonesia (+62)
                                                </option>
                                                <option data-countrycode="IR" value="+98">Iran (+98)</option>
                                                <option data-countrycode="IQ" value="+964">Iraq (+964)</option>
                                                <option data-countrycode="IE" value="+353">Ireland (+353)
                                                </option>
                                                <option data-countrycode="IL" value="+972">Israel (+972)
                                                </option>
                                                <option data-countrycode="IT" value="+39">Italy (+39)</option>
                                                <option data-countrycode="JM" value="+1876">Jamaica (+1876)
                                                </option>
                                                <option data-countrycode="JP" value="+81">Japan (+81)</option>
                                                <option data-countrycode="JO" value="+962">Jordan (+962)
                                                </option>
                                                <option data-countrycode="KZ" value="+7">Kazakhstan (+7)
                                                </option>
                                                <option data-countrycode="KE" value="+254">Kenya (+254)</option>
                                                <option data-countrycode="KI" value="+686">Kiribati (+686)
                                                </option>
                                                <option data-countrycode="KP" value="+850">Korea North (+850)
                                                </option>
                                                <option data-countrycode="KR" value="+82">Korea South (+82)
                                                </option>
                                                <option data-countrycode="KW" value="+965">Kuwait (+965)
                                                </option>
                                                <option data-countrycode="KG" value="+996">Kyrgyzstan (+996)
                                                </option>
                                                <option data-countrycode="LA" value="+856">Laos (+856)</option>
                                                <option data-countrycode="LV" value="+371">Latvia (+371)
                                                </option>
                                                <option data-countrycode="LB" value="+961">Lebanon (+961)
                                                </option>
                                                <option data-countrycode="LS" value="+266">Lesotho (+266)
                                                </option>
                                                <option data-countrycode="LR" value="+231">Liberia (+231)
                                                </option>
                                                <option data-countrycode="LY" value="+218">Libya (+218)</option>
                                                <option data-countrycode="LI" value="+417">Liechtenstein (+417)
                                                </option>
                                                <option data-countrycode="LT" value="+370">Lithuania (+370)
                                                </option>
                                                <option data-countrycode="LU" value="+352">Luxembourg (+352)
                                                </option>
                                                <option data-countrycode="MO" value="+853">Macao (+853)</option>
                                                <option data-countrycode="MK" value="+389">Macedonia (+389)
                                                </option>
                                                <option data-countrycode="MG" value="+261">Madagascar (+261)
                                                </option>
                                                <option data-countrycode="MW" value="+265">Malawi (+265)
                                                </option>
                                                <option data-countrycode="MY" value="+60">Malaysia (+60)
                                                </option>
                                                <option data-countrycode="MV" value="+960">Maldives (+960)
                                                </option>
                                                <option data-countrycode="ML" value="+223">Mali (+223)</option>
                                                <option data-countrycode="MT" value="+356">Malta (+356)</option>
                                                <option data-countrycode="MH" value="+692">Marshall Islands
                                                    (+692)</option>
                                                <option data-countrycode="MQ" value="+596">Martinique (+596)
                                                </option>
                                                <option data-countrycode="MR" value="+222">Mauritania (+222)
                                                </option>
                                                <option data-countrycode="YT" value="+269">Mayotte (+269)
                                                </option>
                                                <option data-countrycode="MX" value="+52">Mexico (+52)</option>
                                                <option data-countrycode="FM" value="+691">Micronesia (+691)
                                                </option>
                                                <option data-countrycode="MD" value="+373">Moldova (+373)
                                                </option>
                                                <option data-countrycode="MC" value="+377">Monaco (+377)
                                                </option>
                                                <option data-countrycode="MN" value="+976">Mongolia (+976)
                                                </option>
                                                <option data-countrycode="MS" value="+1664">Montserrat (+1664)
                                                </option>
                                                <option data-countrycode="MA" value="+212">Morocco (+212)
                                                </option>
                                                <option data-countrycode="MZ" value="+258">Mozambique (+258)
                                                </option>
                                                <option data-countrycode="MN" value="+95">Myanmar (+95)
                                                </option>
                                                <option data-countrycode="NA" value="+264">Namibia (+264)
                                                </option>
                                                <option data-countrycode="NR" value="+674">Nauru (+674)</option>
                                                <option data-countrycode="NP" value="+977">Nepal (+977)</option>
                                                <option data-countrycode="NL" value="+31">Netherlands (+31)
                                                </option>
                                                <option data-countrycode="NC" value="+687">New Caledonia (+687)
                                                </option>
                                                <option data-countrycode="NZ" value="+64">New Zealand (+64)
                                                </option>
                                                <option data-countrycode="NI" value="+505">Nicaragua (+505)
                                                </option>
                                                <option data-countrycode="NE" value="+227">Niger (+227)</option>
                                                <option data-countrycode="NG" value="+234">Nigeria (+234)
                                                </option>
                                                <option data-countrycode="NU" value="+683">Niue (+683)</option>
                                                <option data-countrycode="NF" value="+672">Norfolk Islands
                                                    (+672)
                                                </option>
                                                <option data-countrycode="NP" value="+670">Northern Marianas
                                                    (+670)</option>
                                                <option data-countrycode="NO" value="+47">Norway (+47)</option>
                                                <option data-countrycode="OM" value="+968">Oman (+968)</option>
                                                <option data-countrycode="PW" value="+680">Palau (+680)</option>
                                                <option data-countrycode="PA" value="+507">Panama (+507)
                                                </option>
                                                <option data-countrycode="PG" value="+675">Papua New Guinea
                                                    (+675)</option>
                                                <option data-countrycode="PY" value="+595">Paraguay (+595)
                                                </option>
                                                <option data-countrycode="PE" value="+51">Peru (+51)</option>
                                                <option data-countrycode="PH" value="+63">Philippines (+63)
                                                </option>
                                                <option data-countrycode="PL" value="+48">Poland (+48)</option>
                                                <option data-countrycode="PT" value="+351">Portugal (+351)
                                                </option>
                                                <option data-countrycode="PR" value="+1787">Puerto Rico (+1787)
                                                </option>
                                                <option data-countrycode="QA" value="+974">Qatar (+974)</option>
                                                <option data-countrycode="RE" value="+262">Reunion (+262)
                                                </option>
                                                <option data-countrycode="RO" value="+40">Romania (+40)
                                                </option>
                                                <option data-countrycode="RU" value="+7">Russia (+7)</option>
                                                <option data-countrycode="RW" value="+250">Rwanda (+250)
                                                </option>
                                                <option data-countrycode="SM" value="+378">San Marino (+378)
                                                </option>
                                                <option data-countrycode="ST" value="+239">Sao Tome &amp;
                                                    Principe (+239)</option>
                                                <option data-countrycode="SA" value="+966">Saudi Arabia (+966)
                                                </option>
                                                <option data-countrycode="SN" value="+221">Senegal (+221)
                                                </option>
                                                <option data-countrycode="CS" value="+381">Serbia (+381)
                                                </option>
                                                <option data-countrycode="SC" value="+248">Seychelles (+248)
                                                </option>
                                                <option data-countrycode="SL" value="+232">Sierra Leone (+232)
                                                </option>
                                                <option data-countrycode="SG" value="+65">Singapore (+65)
                                                </option>
                                                <option data-countrycode="SK" value="+421">Slovak Republic
                                                    (+421)
                                                </option>
                                                <option data-countrycode="SI" value="+386">Slovenia (+386)
                                                </option>
                                                <option data-countrycode="SB" value="+677">Solomon Islands
                                                    (+677)
                                                </option>
                                                <option data-countrycode="SO" value="+252">Somalia (+252)
                                                </option>
                                                <option data-countrycode="ZA" value="+27">South Africa (+27)
                                                </option>
                                                <option data-countrycode="ES" value="+34">Spain (+34)</option>
                                                <option data-countrycode="LK" value="+94">Sri Lanka (+94)
                                                </option>
                                                <option data-countrycode="SH" value="+290">St. Helena (+290)
                                                </option>
                                                <option data-countrycode="KN" value="+1869">St. Kitts (+1869)
                                                </option>
                                                <option data-countrycode="SC" value="+1758">St. Lucia (+1758)
                                                </option>
                                                <option data-countrycode="SD" value="+249">Sudan (+249)</option>
                                                <option data-countrycode="SR" value="+597">Suriname (+597)
                                                </option>
                                                <option data-countrycode="SZ" value="+268">Swaziland (+268)
                                                </option>
                                                <option data-countrycode="SE" value="+46">Sweden (+46)</option>
                                                <option data-countrycode="CH" value="+41">Switzerland (+41)
                                                </option>
                                                <option data-countrycode="SI" value="+963">Syria (+963)</option>
                                                <option data-countrycode="TW" value="+886">Taiwan (+886)
                                                </option>
                                                <option data-countrycode="TJ" value="+7">Tajikstan (+7)
                                                </option>
                                                <option data-countrycode="TH" value="+66">Thailand (+66)
                                                </option>
                                                <option data-countrycode="TG" value="+228">Togo (+228)</option>
                                                <option data-countrycode="TO" value="+676">Tonga (+676)</option>
                                                <option data-countrycode="TT" value="+1868">Trinidad &amp; Tobago
                                                    (+1868)</option>
                                                <option data-countrycode="TN" value="+216">Tunisia (+216)
                                                </option>
                                                <option data-countrycode="TR" value="+90">Turkey (+90)</option>
                                                <option data-countrycode="TM" value="+7">Turkmenistan (+7)
                                                </option>
                                                <option data-countrycode="TM" value="+993">Turkmenistan (+993)
                                                </option>
                                                <option data-countrycode="TC" value="+1649">Turks &amp; Caicos
                                                    Islands (+1649)</option>
                                                <option data-countrycode="TV" value="+688">Tuvalu (+688)
                                                </option>
                                                <option data-countrycode="UG" value="+256">Uganda (+256)
                                                </option>
                                                <option data-countrycode="UA" value="+380">Ukraine (+380)
                                                </option>
                                                <option data-countrycode="AE" value="+971">United Arab Emirates
                                                    (+971)</option>
                                                <option data-countrycode="UY" value="+598">Uruguay (+598)
                                                </option>
                                                <option data-countrycode="UZ" value="+7">Uzbekistan (+7)
                                                </option>
                                                <option data-countrycode="VU" value="+678">Vanuatu (+678)
                                                </option>
                                                <option data-countrycode="VA" value="+379">Vatican City (+379)
                                                </option>
                                                <option data-countrycode="VE" value="+58">Venezuela (+58)
                                                </option>
                                                <option data-countrycode="VN" value="+84">Vietnam (+84)
                                                </option>
                                                <option data-countrycode="VG" value="+84">Virgin Islands -
                                                    British (+1284)</option>
                                                <option data-countrycode="VI" value="+84">Virgin Islands - US
                                                    (+1340)</option>
                                                <option data-countrycode="WF" value="+681">Wallis &amp; Futuna
                                                    (+681)</option>
                                                <option data-countrycode="YE" value="+969">Yemen (North)(+969)
                                                </option>
                                                <option data-countrycode="YE" value="+967">Yemen (South)(+967)
                                                </option>
                                                <option data-countrycode="ZM" value="+260">Zambia (+260)
                                                </option>
                                                <option data-countrycode="ZW" value="+263">Zimbabwe (+263)
                                                </option>
                                            </select>

                                            <input type="text" name="mobile_number" id="mobile_number"
                                                placeholder="Contact No" class="form-control">

                                            <select id="category" name="category" class="field form-control"
                                                required="">
                                                <option value="">--Select Category--</option>
                                                <option value="Listener">Listener</option>
                                                <option value="Paper Presentation">Paper Presentation</option>
                                                <option value="Others">Others</option>
                                            </select>

                                            <input type="text" name="university_org" id="university_org"
                                                placeholder="University/Organisation" class="form-control">

                                            <input type="text" class="form-control" name="conference_name"
                                                id="topic" value="{{ $events->event_name }}" readonly="">

                                            <input type="text" class="form-control" name="conference_country"
                                                id="conference_country" value="{{ $events->country }}" readonly="">

                                            <input type="text" class="form-control" name="conference_city"
                                                id="conference_city" value="{{ $events->city }}" readonly="">

                                            <input type="text" class="form-control" name="conference_date"
                                                id="conference_date" value="{{ $events->sdate }}" readonly="">

                                            <input type="hidden" name="conference_title"
                                                value="{{ $events->event_title }}" />

                                            <input type="hidden" name="conference_url"
                                                value="{{ $events->url . $events->event_id }}" />

                                            <input type="hidden" name="paper_submission_url"
                                                value="{{ $events->pslink }}" />

                                            <input type="hidden" name="registration_url"
                                                value="{{ $events->reglink }}" />

                                            <input type="hidden" name="event_id" value="{{ $events->event_id }}" />

                                            <input type="hidden" name="conference_rdead" value="{{ $events->rdead }}">

                                            <input type="hidden" name="conference_sdead" value="{{ $events->sdead }}">

                                            <input type="hidden" name="contact_person"
                                                value="{{ $events->contact_person }}">

                                            <input type="hidden" name="organization" value="{{ $events->org }}" />

                                            <input type="hidden" name="contact_no" value="{{ $events->contact_no }}" />

                                            <input type="hidden" name="contact_email"
                                                value="{{ $events->contact_email }}" />

                                            <input type="hidden" name="captcha" id="captcha">

                                            <div class="col-md-12 form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                                            data-action="{{ route('event-subscribe-form') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary submit mb-4 continue"
                                                onclick="onClick(event)">Submit</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <p class="date-new"><img src="/img/ccalender.png"> &nbsp;
                            &nbsp;{{ date('dS-M-Y', strtotime($events->sdate)) }}<sup></sup> to
                            {{ date('dS-M-Y', strtotime($events->edate)) }}<sup></sup>
                        </p>
                        <p class="name"><img src="/img/location.png">&nbsp; &nbsp;
                            {{ $events->city }}, {{ $events->country }}
                        </p>
                        <hr>
                        <h4 class="org-details"><b>Organizer Details</b>
                        </h4>
                        <p class="new-user"><img src="/img/user-clock.png">&nbsp;
                            &nbsp;{{ $events->contact_person }}</p>
                        <p><img src="/img/caller.png">&nbsp; &nbsp;
                            {{ $events->contact_no }}
                        </p>
                        <p><img src="/img/gmail.png">&nbsp; &nbsp;
                            {{ $events->contact_email }}
                        </p>
                        <hr>
                        <h4 class="call-paper" style="color:#150371;"><b>Call For Paper</b>
                        </h4>
                        <ul class="paper-topics" style="line-height: 2;">
                            @if ($events->call_for_paper != null)
                                <div>
                                    @php
                                        $topics = str_replace(
                                            ['<p>', '</p>', '<li>', '</li>', '<ul>', '</ul>', '<br />'],
                                            '',
                                            $events->call_for_paper,
                                        );
                                        $topicsSplit = preg_split('/<br>|,/', $topics);
                                    @endphp
                                    @foreach ($topicsSplit as $topic)
                                        @if ($topic != '' && $topic != ' ' && $topic != '0')
                                            <li><img src="/img/check-circle.png">&nbsp;
                                                &nbsp; {{ $topic }}</li>
                                        @endif
                                    @endforeach
                                </div>
                            @else
                                <div>
                                    <h5>No call for paper</h5>
                                </div>
                            @endif
                        </ul>
                    </div>

                    <div class="col-md-8">
                        <div class="description" style=" margin-top: 48px;">
                            <h2 style="color:#150371;"> <b>About the Conference</b>
                            </h2>
                            <p style="text-align:justify;">About the <span>{{ $events->event_name }}
                                    ({{ $events->event_title }})
                                    .</span>
                                is a great way to build networking by engaging in discussion relating to
                                <span>{{ $events->topic }}</span> Topics. This platform wants to bring all the
                                students, researchers, and
                                professionals to one stage to discuss new opportunities, ideas, and developments.
                                Bioinformatics is a great way to build networking
                            </p>
                        </div>
                        <div class="tabs-container" style="height: 652px; overflow-y: auto;">
                            <div class="tabs__buttons--container">
                                <div class="tabs__tab-btn" data-tab-id="agenda"><b>Agenda</b></div>
                                <div class="tabs__tab-btn" data-tab-id="registernow"><b>Register Now</b></div>
                                <div class="tabs__tab-btn" data-tab-id="addtocalender"><b>Add To Calender</b>
                                </div>
                            </div>

                            <div data-tab="agenda" class="tabs__tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about">
                                            <h4>Day <span>1</span></h4>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="row-first">
                                                        <th class="first">Timing</th>
                                                        <th class="last">Session</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="first">9:00 AM - 9:30 AM</td>
                                                        <td class="last">Registration</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">9:30 AM - 10:00 AM</td>
                                                        <td class="last">Introduction to WCASET</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">10:00 AM- 10:15 AM</td>
                                                        <td class="last">Tea Break</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">10:15 AM - 1:00 PM</td>
                                                        <td class="last">Pre-lunch Technical Session</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">1:00 PM - 1:30 PM</td>
                                                        <td class="last">Lunch</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">1:30 PM - 5.00PM</td>
                                                        <td class="last">Post- lunch Technical Session</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about">
                                            <h4>Day <span>2</span></h4>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="first">Timing</th>
                                                        <th class="last">Session</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="first">9:00 AM - 9:30 AM</td>
                                                        <td class="last">Registration</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">9:30 AM - 10:00 AM</td>
                                                        <td class="last">Inaugural Session</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">10:00 AM- 10:15 AM</td>
                                                        <td class="last">Tea Break</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">10:15 AM - 1:00 PM</td>
                                                        <td class="last">Pre-lunch Technical Session</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">1:00 PM - 1:30 PM</td>
                                                        <td class="last">Lunch</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">1:30 PM - 4:00PM</td>
                                                        <td class="last">Post- lunch Technical Session</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first">4:00 PM - 5.00PM</td>
                                                        <td class="last">Certificate Distribution</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-tab="registernow" class="tabs__tab">
                                <div class="paym">
                                    <h4>Author/Co-Author Registration Fee Includes:</h4>
                                    <ul class="list-h">
                                        <li>Participation in the technical program of upto two author/co-authors
                                        </li>
                                        <li>Welcome reception</li>
                                        <li>Badge</li>
                                        <li>Research Foundation Conference Bag</li>
                                        <li>Conference Accessories/Kits</li>
                                        <li>Certificates for author and co-authors</li>
                                        <li>Research Foundation Conference Proceeding</li>
                                        <li>Research Foundation Conference Proceeding CD</li>
                                        <li>Coffee breaks</li>
                                        <li>Lunch</li>
                                        <li>Awards Ceremony</li>
                                    </ul>
                                    <br>
                                    <div class="step">Step 1</div>
                                    <p>At least one author of each accepted paper must be registered for the
                                        conference for that paper to appear in the proceedings and be scheduled for
                                        presentation. Participating members may register as per the following
                                        charges.</p>
                                    <div class="table-responsive"> </div>
                                    <p><strong>Your Total Payment:</strong></p>
                                    <p> <a href="" class="btn btn-info" id="go" target="_new">
                                            Register Online</a></p>
                                    <ul class="list-h">
                                        <li>For students registering late an extra amount of USD 20 will be charged.
                                        </li>
                                        <li>Registered members are asked to intimate about the registration
                                            immediately</li>
                                        <li>After completion of registration process, participant are required to
                                            send the Screen shot of transaction or registration fees payment proof
                                            to us <strong>(mail to : info@ardaconference.com)</strong>
                                            on or before the last date of registration.</li>
                                        <li>Any modification in the paper will not be accepted after the final
                                            submission date.</li>
                                        <li>Maximum up to five authors/ co authors per paper is allowed for
                                            participate.</li>
                                        <li>No registration will be entertained after last date of registration.
                                        </li>
                                    </ul>
                                    <div class="step">Step 2</div>
                                    <h5><b>Mail Bank Statement</b></h5>
                                    <p>Once you have transfered the registration fees mail the screen shot of online
                                        transaction to <i>info@info@academicworldresearch.org(With your complete
                                            registration details)</i></p>
                                    <div class="step">Step 3</div>
                                    <h5><b>Camera Ready Paper Submission</b></h5>
                                    <p>Submit Camera ready paper as per the guidelines.</p>
                                </div>
                            </div>
                            <div data-tab="addtocalender" class="tabs__tab">
                                <div class="conn">
                                    <a href="https://www.google.com/calendar/render?action=TEMPLATE&amp;text= {{ $events->event_name }}and Recognition &amp;add=foo@bar.baz&amp;location= {{ $events->city }} &amp;details=The aim of the Conference is to provide a platform to the researchers and practitioners from both academia as well as industry to meet the share cuttingedge development in the field."
                                        class="goog" style=" background-color: #5e70c5;">Google
                                        Calendar</a>
                                    <a href="https://calendar.yahoo.com/render?action=template&amp;text={{ $events->event_name }}and recognition &amp;add=foo@bar.baz&amp;location={{ $events->city }}&amp;details=the aim of the conference is to provide a platform to the researchers and practitioners from both academia as 0well 0as industry to meet the share cuttingedge development in the field."
                                        class="yah" style="background-color: #bbb62c;">Yahoo
                                        Calendar</a>
                                    <a href="https://office.live.com/start/Calendar.aspx" class="outl"
                                        style=" background-color: #2bc3ae;">Outlook
                                        Calendar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if ($similarEventName->isNotEmpty())
            <div class="p-0 p-md-5 tm-container-outer tm-bg-gray">
                <div class="container-fluid">
                    <h4 class="org-details"><b>Similar Conferences in {{ $events->country }}</b>
                    </h4>
                    <div class="carousel-wrap">
                        <div class="owl-carousel">
                            @foreach ($similarEventName as $data)
                                <div class="card">
                                    <div class="item">
                                        <a class="similar-conferences" data-name="{{ $data->event_name }}"
                                            data-date="{{ date('dS-M-Y', strtotime($data->sdate)) }}"
                                            style="color: black;" href="/eventdetail/{{ $data->event_id }}">
                                            <h6>{{ $data->event_name }} ({{ $data->event_title }})</h6>
                                            <p class="date-new"><img src="/img/ccalender.png">
                                                &nbsp;{{ date('dS-M-Y', strtotime($data->sdate)) }}<sup></sup> to
                                                {{ date('dS-M-Y', strtotime($data->edate)) }}<sup></sup>
                                            </p>
                                            <p class="name"><img src="/img/location.png">&nbsp;{{ $data->city }},
                                                {{ $data->country }}
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($similarEventName->isNotEmpty())
            <div class="p-0 p-md-5 tm-container-outer tm-bg-gray">
                <div class="container-fluid">
                    <h4 class="org-details">You Might Also be Interested In {{ $events->country }}</h4>
                    <div class="carousel-wrap">
                        <div class="owl-carousel">
                            @foreach ($similarCountryEvent as $data)
                                <div class="card">
                                    <div class="item">
                                        <a class="interested-conference" style="color: black;"
                                            href="/eventdetail/{{ $data->event_id }}">
                                            <h6 class="text-black-50">{{ $data->event_name }}
                                                ({{ $data->event_title }})
                                            </h6>
                                            <p class="date-new "><img src="/img/ccalender.png">
                                                &nbsp;{{ date('dS-M-Y', strtotime($data->sdate)) }}<sup></sup> to
                                                {{ date('dS-M-Y', strtotime($data->edate)) }}<sup></sup>
                                            </p>
                                            <p class="name "><img src="/img/location.png">
                                                &nbsp;{{ $data->city }}, {{ $data->country }}</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    @include('layout-en.footer')
@endsection
@section('script')
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script>
        $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,   // Enable looping
        margin: 10,   // Space between items
        nav: true,    // Navigation arrows
        responsive: {
            0: {
                items: 1   // Show only 1 item on mobile
            },
            600: {
                items: 2   // Show 2 items on small devices like tablets
            },
            1000: {
                items: 3   // Show 3 items on large screens
            }
        }
    });
});

        </script>
    <script>
        function onClick(e) {
            e.preventDefault();

            // this code used for validation
            const form = document.getElementById("subscribe-form");

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // captcha v3
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    document.getElementById('captcha').value = token;
                    document.getElementById('subscribe-form').submit();
                });
            });
        }

        $(document).ready(function() {
            $(document).on('click', '.similar-conferences', function() {
                //alert($(this).attr('href'));
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'Similar Conference',
                    'Target URL': $(this).attr(
                        'href'), //this should be dynamically replaced with an actual search query
                    'Event Date': $(this).attr('data-date'),
                    'Event Name': $(this).attr('data-name'),
                });
            });
        });
    </script>



    <!--Start of Tawk.to Script-->
    <script async type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6151cf7425797d7a89010bc9/1fgjp4p60';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        const tabsBtns = Array.from(document.querySelectorAll("[data-tab-id]"));
        const tabs = Array.from(document.querySelectorAll("[data-tab]"));

        let selectedTab = tabsBtns[0].dataset.tabId;

        const hideTabs = () => {
            tabs
                .filter((tab) => tab.dataset.tab !== selectedTab)
                .forEach((tab) => {
                    tab.classList.add("tabs__tab--hide");
                });

            tabsBtns
                .filter((tab) => tab.dataset.tabId !== selectedTab)
                .forEach((tab) => {
                    tab.classList.add("tabs__tab-btn--not-selected");
                });
        };
        hideTabs();

        const handleSelectTab = (e) => {
            selectedTab = e.target.dataset.tabId;

            tabs.forEach((tab) => {
                tab.classList.remove("tabs__tab--hide");
            });

            tabsBtns.forEach((tab) => {
                tab.classList.remove("tabs__tab-btn--not-selected");
            });

            hideTabs();
        };

        tabsBtns.forEach((btn) => {
            btn.addEventListener("click", handleSelectTab);
        });

        // Get the Contact Us tab element
        const contactUsTab = document.querySelector('[data-tab-id="contactus"]');
    </script>

    <script>
        // Define the function to be executed after the delay
        function loadScript() {
            // Create a new script element
            var script = document.createElement('script');
            // Set the source of the script
            script.src = 'https://conferenceineurope.net/js/carosalowl.js';
            // Append the script to the document's body
            document.body.appendChild(script);
        }

        // Call the loadScript function after a delay of 3000 milliseconds (3 seconds)
        setTimeout(loadScript, 2000);
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabButtons = document.querySelectorAll(".tabs__tab-btn");
            const tabContents = document.querySelectorAll(".tabs__tab");

            tabButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const tabId = button.getAttribute("data-tab-id");
                    activateTab(tabId);
                });
            });

            tabContents.forEach(content => {
                content.addEventListener("click", () => {
                    const tabId = content.getAttribute("data-tab");
                    activateTab(tabId);
                });
            });

            function activateTab(tabId) {
                // Hide all tab contents
                tabContents.forEach(tab => tab.classList.remove("active"));

                // Show the clicked tab content
                const tabContent = document.querySelector(`[data-tab="${tabId}"]`);
                tabContent.classList.add("active");

                // Update the active tab button
                tabButtons.forEach(button => {
                    if (button.getAttribute("data-tab-id") === tabId) {
                        button.classList.add("active");
                    } else {
                        button.classList.remove("active");
                    }
                });
            }
        });
    </script>
@endsection
