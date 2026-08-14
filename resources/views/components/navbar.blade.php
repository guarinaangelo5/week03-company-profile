<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">
            TechNova
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ route('about') }}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ route('services') }}">
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>

                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a class="btn btn-primary px-4"
                       href="{{ route('contact') }}">
                        Get Started
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>