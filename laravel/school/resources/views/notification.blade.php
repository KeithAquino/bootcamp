<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Notifications</title>
    <script>
        $(document).ready(function() {
            $(".notification").click(function() {
                window.location.href = "/notifications/" + $(this).prop("id");
            })
        })
    </script>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/messages')
    <h1>Notification Centre</h1>
    <table class="table table-hover">
        @foreach ($notifications as $n)
        @if ($n -> marked_seen == '0')
        <tr class="notification table-info" id="{{$n -> notif_id}}">
            @else
        <tr class="notification" id="{{$n -> notif_id}}">
            @endif
            <td>{{$n -> content}}</td>
            <td>{{$n -> date_sent}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>