<!DOCTYPE html>
<html>

<head>
    <title>New Event</title>
</head>

<body>
    <h1>New Event</h1>
    <table>
        <tr>
            <td>CONFERENCE NAME :{{ $addEvent->event_name }}</td>
        </tr>
        <tr>
            <td> CONFERENCE TITLE :{{ $addEvent->event_title }}</td>
        </tr>
        <tr>
            <td>CONFERENCE TYPE :{{ $addEvent->type }}</td>
        </tr>
        <tr>
            <td>CONFERENCE TOPIC :{{ $addEvent->topic }}</td>
        </tr>
        <tr>
            <td> CONFERENCE SUB-TOPIC :{{ $addEvent->subtopic }}</td>
        </tr>
        <tr>
            <td> CONFERENCE COUNTRY :{{ $addEvent->country }}</td>
        </tr>
        <tr>
            <td> CONFERENCE STATE :{{ $addEvent->state }}</td>
        </tr>
        <tr>
            <td> CONFERENCE CITY :{{ $addEvent->city }}</td>
        </tr>
        <tr>
            <td> CONFERENCE VENUE :{{ $addEvent->venue }}</td>
        </tr>
        <tr>
            <td> ORGANIZING SOCIETY: :{{ $addEvent->org }}</td>
        </tr>
        <tr>
            <td> CONTACT PERSON :{{ $addEvent->contact_person }}</td>
        </tr>
        <tr>
            <td> CONTACT NUMBER :{{ $addEvent->contact_no }}</td>
        </tr>
        <tr>
            <td> CONTACT EMAIL ADDRESS :{{ $addEvent->contact_email }}</td>
        </tr>
        <tr>
            <td> WEBSITE ADDRESS :{{ $addEvent->url }}</td>
        </tr>
        <tr>
            <td> CONFERENCE MONTH :{{ $addEvent->month }}</td>
        </tr>
        <tr>
            <td> CONFERENCE START DATE :{{ $addEvent->sdate }}</td>
        </tr>
        <tr>
            <td> CONFERENCE END DATE :{{ $addEvent->edate }}</td>
        </tr>
        <tr>
            <td> ABSTRACT SUBMISSION DEADLINE :{{ $addEvent->sdead }}</td>
        </tr>
        <tr>
            <td> CONFERENCE REGISTRATION DEADLINE :{{ $addEvent->rdead }}</td>
        </tr>
        <tr>
            <td> DESCRIPTION :{{ $addEvent->des }}</td>
        </tr>
    </table>
</body>

</html>
