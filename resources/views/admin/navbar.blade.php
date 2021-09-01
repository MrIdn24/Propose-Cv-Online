<nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" style="color:#5A61D7;" href="{{route('home')}}">Propose</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold">
                @yield('active')
                <li class="nav-item">
                    <a class="nav-link me-5" href="{{ route('home').'#aboutme' }}">Apa itu Propose</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-5" href="{{ route('home').'#howto' }}">Cara buat CV</a>
                </li>
                @yield('about')
            </ul>
            <div class="d-flex">
                @yield('create')
            </div>
        </div>
    </div>
</nav>
