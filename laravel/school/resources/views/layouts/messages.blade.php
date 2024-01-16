@if (Session::has('success'))
<p id="notif" class="bg bg-success text-light">{{Session::get('success')}}</p>
@elseif (Session::has('fail'))
<p id="notif" class="bg bg-danger text-light">{{Session::get('fail')}}</p>
@endif