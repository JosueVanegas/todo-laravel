<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TODO::APP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('note.index') }}">my notes</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.index') }}">users</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        profile
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item bg-red" href="#">log out</a></li>
                    </ul>
                </li>

            </ul>
            <a class="btn btn-outline-primary" href="">log in</a>

        </div>
    </div>
</nav>
