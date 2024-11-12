@if ($eventSubscribe['category'] == 'Paper Presentation')

    <p>Dear {{ $eventSubscribe['name'] }},</p>

    <p>Greetings from Conference In Europe Team,</p>

    <p>Thanks for showing your interest to take part in
        {{ $eventSubscribe['conference_name'] }}({{ $eventSubscribe['conference_title'] }}) that will be held at
        {{ $eventSubscribe['conference_city'] }},{{ $eventSubscribe['conference_country'] }} on
        {{ $eventSubscribe['conference_sdead'] }}.</p>

    <p>Conference website link : {{ $eventSubscribe['conference_url'] }}</p>

    <p>If you wish to participate in this conference as a 'Paper Presenter' you have to send the 'Abstract of your
        research
        paper 'by using below link- {{ $eventSubscribe['paper_submission_url'] }}</p>

    <p>The Deadline for submitting your abstract is :{{ $eventSubscribe['conference_sdead'] }}. After Submitting your
        abstract
        Conference team will send you a confirmation email within 24 to 48 hours.</p>

    <p>Kindly enroll your registration on conference participation as per conference guidelines by using link :
        {{ $eventSubscribe['registration_url'] }} on or before :{{ $eventSubscribe['conference_rdead'] }} .once you
        got acceptance letter of your abstract research paper from conference team.</p>

    <p>For more details on Paper submissions (or) registration please contact conference team: Conference Coordinator :(
        {{ $eventSubscribe['contact_person'] }} {{ $eventSubscribe['organization'] }} /
        {{ $eventSubscribe['contact_email'] }}
        / {{ $eventSubscribe['contact_no'] }}). We will be happy to help you.</p>

@elseif($eventSubscribe['category'] == 'Listener')

    <p>Dear {{ $eventSubscribe['name'] }},</p>

    <p>Greetings from Conference In Europe Team,</p>

    <p>Thanks for showing your interest to take part in
        {{ $eventSubscribe['conference_name'] }}({{ $eventSubscribe['conference_title'] }}) that will be held at
        {{ $eventSubscribe['conference_city'] }},{{ $eventSubscribe['conference_country'] }} on
        {{ $eventSubscribe['conference_sdead'] }}.</p>

    <p>Conference website link : {{ $eventSubscribe['conference_url'] }}</p>

    <p>If you wish to participate in this conference as a 'Listener', you have forward your CV as well as complete the
        registration procedure and send it to respective conference team.</p>

    <p>Kindly enroll your registration on conference participation as per conference guidelines by using link :
        {{ $eventSubscribe['registration_url'] }} on or before :{{ $eventSubscribe['conference_rdead'] }} .once you got
        acceptance letter of your abstract research paper from conference team.</p>

    <p>For more details on Paper submissions (or) registration please contact conference team: Conference Coordinator :(
        {{ $eventSubscribe['contact_person'] }} {{ $eventSubscribe['organization'] }} /
        {{ $eventSubscribe['contact_email'] }}
        / {{ $eventSubscribe['contact_no'] }}). We will be happy to help you.</p>

@elseif($eventSubscribe['category'] == 'Others')

    <p>Dear {{ $eventSubscribe['name'] }},</p>

    <p>Greetings from Conference In Europe Team,</p>

    <p>Thanks for subscribe to our conference
        {{ $eventSubscribe['conference_name'] }}({{ $eventSubscribe['conference_title'] }}) that will be held at
        {{ $eventSubscribe['conference_city'] }},{{ $eventSubscribe['conference_country'] }} on
        {{ $eventSubscribe['conference_sdead'] }}.<br><br></p>

    <p>Conference website link: {{ $eventSubscribe['conference_url'] }}</p>

    <p>If you wish to participate in this conference as a 'Listener', you have forward your CV as well as complete the
        registration procedure and send it to the respective conference team.</p>

    <p>Kindly enroll your registration on conference participation as per conference guidelines by using link :
        {{ $eventSubscribe['registration_url'] }} on or before :{{ $eventSubscribe['conference_rdead'] }} .once you got
        acceptance letter of your abstract research paper from conference team.</p>

    <p>If you wish to participate in this conference as a 'Paper Presenter' you have to send the 'Abstract of your
        research
        paper 'by using below link- {{ $eventSubscribe['paper_submission_url'] }}</p>

    <p>The Deadline for submitting your abstract is :{{ $eventSubscribe['conference_sdead'] }}. After Submitting your
        abstract
        Conference team will send you a confirmation email within 24 to 48 hours.</p>

    <p>For more details on Paper submissions (or) registration please contact conference team: Conference Coordinator :(
        {{ $eventSubscribe['contact_person'] }} {{ $eventSubscribe['organization'] }} /
        {{ $eventSubscribe['contact_email'] }}
        / {{ $eventSubscribe['contact_no'] }}). We will be happy to help you.</p>

@endif
