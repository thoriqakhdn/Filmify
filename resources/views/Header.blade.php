<nav class="navbar navbar-expand-lg navbar-dark" aria-label="Eighth navbar example">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="Images/Logo.png" width="100">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Filmify") ? 'active' : ''}}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Tentang") ? 'active' : ''}}" href="{{url('Tentang')}}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "FAQ") ? 'active' : ''}}" href="{{url('FAQ')}}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Masuk</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">ID</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">EN</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
