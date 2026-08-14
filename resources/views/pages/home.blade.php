@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="bg-dark text-white py-5">
    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col-lg-7">

                <span class="badge bg-primary mb-3">
                    INNOVATION • TECHNOLOGY • GROWTH
                </span>

                <h1 class="display-3 fw-bold">
                    Building Digital Solutions for Tomorrow
                </h1>

                <p class="lead mt-4">
                    TechNova Solutions helps businesses transform their ideas
                    into reliable, modern, and innovative digital solutions.
                </p>

                <div class="mt-4">
                    <a href="{{ route('services') }}"
                       class="btn btn-primary btn-lg me-2">
                        Explore Our Services
                    </a>

                    <a href="{{ route('contact') }}"
                       class="btn btn-outline-light btn-lg">
                        Contact Us
                    </a>
                </div>

            </div>

            <div class="col-lg-5 text-center mt-5 mt-lg-0">

                <div class="p-5 border border-secondary rounded-4">
                    <h2 class="display-1">💻</h2>

                    <h4 class="mt-3">
                        Technology That Moves Business Forward
                    </h4>

                    <p class="text-secondary mb-0">
                        Smart. Scalable. Secure.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- Company Introduction -->
<section class="py-5">
    <div class="container py-4">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="text-primary fw-bold">
                    WHO WE ARE
                </span>

                <h2 class="display-6 fw-bold mt-2">
                    Your Partner in Digital Transformation
                </h2>

                <p class="mt-4 text-muted">
                    TechNova Solutions is a technology company focused on
                    delivering practical and innovative digital solutions
                    for organizations of different sizes.
                </p>

                <p class="text-muted">
                    From web and mobile applications to cloud solutions and
                    cybersecurity, our goal is to help businesses improve
                    their operations through technology.
                </p>

                <a href="{{ route('about') }}"
                   class="btn btn-dark mt-2">
                    Learn More About Us
                </a>

            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">

                <div class="bg-light rounded-4 p-5">

                    <div class="row text-center">

                        <div class="col-6 mb-4">
                            <h3 class="fw-bold text-primary">50+</h3>
                            <p class="mb-0 text-muted">
                                Projects
                            </p>
                        </div>

                        <div class="col-6 mb-4">
                            <h3 class="fw-bold text-primary">30+</h3>
                            <p class="mb-0 text-muted">
                                Clients
                            </p>
                        </div>

                        <div class="col-6">
                            <h3 class="fw-bold text-primary">5+</h3>
                            <p class="mb-0 text-muted">
                                Years Experience
                            </p>
                        </div>

                        <div class="col-6">
                            <h3 class="fw-bold text-primary">24/7</h3>
                            <p class="mb-0 text-muted">
                                Support
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- Featured Services -->
<section class="bg-light py-5">

    <div class="container py-4">

        <div class="text-center mb-5">

            <span class="text-primary fw-bold">
                WHAT WE DO
            </span>

            <h2 class="display-6 fw-bold mt-2">
                Our Featured Services
            </h2>

            <p class="text-muted">
                Technology solutions designed to help your business grow.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-md-4">

                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">

                        <div class="fs-1 mb-3">
                            🌐
                        </div>

                        <h4 class="fw-bold">
                            Web Development
                        </h4>

                        <p class="text-muted">
                            Modern and responsive websites designed for
                            businesses and organizations.
                        </p>

                    </div>
                </div>

            </div>


            <div class="col-md-4">

                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">

                        <div class="fs-1 mb-3">
                            📱
                        </div>

                        <h4 class="fw-bold">
                            Mobile Development
                        </h4>

                        <p class="text-muted">
                            User-friendly mobile applications for Android
                            and other modern platforms.
                        </p>

                    </div>
                </div>

            </div>


            <div class="col-md-4">

                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">

                        <div class="fs-1 mb-3">
                            ☁️
                        </div>

                        <h4 class="fw-bold">
                            Cloud Solutions
                        </h4>

                        <p class="text-muted">
                            Scalable cloud solutions that help organizations
                            manage their digital infrastructure.
                        </p>

                    </div>
                </div>

            </div>

        </div>


        <div class="text-center mt-5">

            <a href="{{ route('services') }}"
               class="btn btn-primary btn-lg">
                View All Services
            </a>

        </div>

    </div>

</section>


<!-- Call To Action -->
<section class="py-5">

    <div class="container">

        <div class="bg-primary text-white rounded-4 p-5 text-center">

            <h2 class="fw-bold">
                Ready to Transform Your Business?
            </h2>

            <p class="lead mt-3">
                Let's build something innovative together.
            </p>

            <a href="{{ route('contact') }}"
               class="btn btn-light btn-lg mt-3">
                Get Started
            </a>

        </div>

    </div>

</section>

@endsection