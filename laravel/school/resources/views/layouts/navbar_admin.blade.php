<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ADMIN</a>
        <button
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#site_navbar"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="site_navbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/admin/students">Students</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/admin/subjects">Subjects</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/admin/classes">Classes</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/admin/faculties">Faculties</a>
            </li>
            @if (Session::get('user_id'))
            <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
            </li>
            @else
            <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
            </li>
            @endif
        </div>
    </div>
</nav>