<html>

<body>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <table>
        <tr>
            <td colspan="2">
                <p>I am willing to attend the conference given below</p>
            </td>
        </tr>
        <tr>
            <td>Name :</td>
            <td>{{ $eventSubscribe['name'] }}</td>
        </tr>
        <tr>
            <td>Mail Id :</td>
            <td>{{ $eventSubscribe['email'] }}</td>
        </tr>
        <tr>
            <td>Phone Number :</td>
            <td>{{ $eventSubscribe['mobile_number'] }}</td>
        </tr>
        <tr>
            <td>Category :</td>
            <td>{{ $eventSubscribe['category'] }}</td>
        </tr>
        <tr>
            <td>Conference Name :</td>
            <td>
                <h3>{{ $eventSubscribe['conference_name'] }}</h3>
            </td>
        </tr>
        <tr>
            <td>Conference City :</td>
            <td>{{ $eventSubscribe['conference_city'] }}</td>
        </tr>
        <tr>
            <td>Conference Date :</td>
            <td>{{ $eventSubscribe['conference_date'] }}</td>
        </tr>
        <tr>
            <td>Topics :</td>
            <td>{{ $eventSubscribe['topic'] }}</td>
        </tr>
        <tr>
            <td>Url :</td>
            <td>{{ $eventSubscribe['conference_url'] }}</td>
        </tr>
    </table>
</body>

</html>
