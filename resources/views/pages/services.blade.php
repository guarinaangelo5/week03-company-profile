@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- Page Header -->
<section class="bg-dark text-white py-5">
    <div class="container py-4 text-center">
        <h1 class="display-4 fw-bold">Our Services</h1>

        <p class="lead mb-0">
            Technology solutions designed to help your business grow.
        </p>
    </div>
</section>


<!-- Services -->
<section class="py-5">

    <div class="container py-4">

        <div class="row g-4">

            <!-- Service 1 -->
            <div class="col-md-6 col-lg-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body p-4">

                        <div class="display-5 mb-3">
                            🌐
                        </div>

                        <h3 class="fw-bold">
                            Web Development
                        </h3>

                        <p class="text-muted">
                            We create responsive, modern, and user-friendly
                            websites designed around your business needs.
                        </p>

                        <a href="{{ route('contact') }}"
                           class="btn btn-outline-primary">
                            Learn More
                        </a>

                    </div>

                </div>

            </div>


            <!-- Service 2 -->
            <div class="col-md-6 col-lg-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body p-4">

                        <div class="display-5 mb-3">
                            📱
                        </div>

                        <h3 class="fw-bold">
                            Mobile App Development
                        </h3>

                        <p class="text-muted">
                            We develop mobile applications that provide
                            smooth and engaging experiences for users.
                        </p>

                        <a href="{{ route('contact') }}"
                           class="btn btn-outline-primary">
                            Learn More
                        </a>

                    </div>

                </div>

            </div>


            <!-- Service 3 -->
            <div class="col-md-6 col-lg-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body p-4">

                        <div class="display-5 mb-3">
                            ☁️
                        </div>

                        <h3 class="fw-bold">
                            Cloud Solutions
                        </h3>

                        <p class="text-muted">
                            Scalable cloud solutions that help organizations
                            improve accessibility, flexibility, and efficiency.
                        </p>

                        <a href="{{ route('contact') }}"
                           class="btn btn-outline-primary">
                            Learn More
                        </a>

                    </div>

                </div>

            </div>


            <!-- Service 4 -->
            <div class="col-md-6 col-lg-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body p-4">

                        <div class="display-5 mb-3">
                            🔐
                        </div>

                        <h3 class="fw-bold">
                            Cybersecurity
                        </h3>

                        <p class="text-muted">
                            We help protect business systems and data through
                            security-focused technology solutions.
                        </p>

                        <a href="{{ route('contact') }}"
                           class="btn btn-outline-primary">
                            Learn More
                        </a>

                    </div>

                </div>

            </div>


            <!-- Service 5 -->
            <div class="col-md-6 col-lg-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body p-4">

                        <div class="display-5 mb-3">
                            📊
                        </div>

                        <h3 class="fw-bold">
                            Data & Analytics
                        </h3>

                        <p class="text-muted">
                            Turn business data into useful insights that
                            support smarter decisions and better performance.
                        </p>

                        <a href="{{ route('contact') }}"
                           class="btn btn-outline-primary">
                            Learn More
                        </a>

                    </div>

                </div>

            </div>


            <!-- Service 6 -->
            <div class="col-md-6 col-lg-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body p-4">

                        <div class="display-5 mb-3">
                            🛠️
                        </div>

                        <h3 class="fw-bold">
                            IT Consulting
                        </h3>

                        <p class="text-muted">
                            Get expert guidance to choose and implement the
                            right technology strategy for your organization.
                        </p>

                        <a href="{{ route('contact') }}"
                           class="btn btn-outline-primary">
                            Learn More
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Why Choose Us -->
<section class="bg-light py-5">

    <div class="container py-4">

        <div class="text-center mb-5">

            <span class="text-primary fw-bold">
                WHY TECHNOVA
            </span>

            <h2 class="display-6 fw-bold mt-2">
                Why Choose Our Services?
            </h2>

        </div>

        <div class="row g-4 text-center">

            <div class="col-md-4">

                <div class="p-4">
                    <div class="fs-1">⚡</div>

                    <h4 class="fw-bold mt-3">
                        Fast & Reliable
                    </h4>

                    <p class="text-muted">
                        We focus on delivering dependable solutions
                        efficiently.
                    </p>
                </div>

            </div>


            <div class="col-md-4">

                <div class="p-4">
                    <div class="fs-1">🎯</div>

                    <h4 class="fw-bold mt-3">
                        Business-Focused
                    </h4>

                    <p class="text-muted">
                        Our solutions are designed around real business
                        objectives and user needs.
                    </p>
                </div>

            </div>


            <div class="col-md-4">

                <div class="p-4">
                    <div class="fs-1">🤝</div>

                    <h4 class="fw-bold mt-3">
                        Dedicated Support
                    </h4>

                    <p class="text-muted">
                        We work closely with our clients throughout
                        every stage of the project.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="py-5">

    <div class="container">

        <div class="bg-primary text-white rounded-4 p-5 text-center">

            <h2 class="fw-bold">
                Have a Project in Mind?
            </h2>

            <p class="lead mt-3">
                Let's discuss how we can help turn your idea into reality.
            </p>

            <a href="{{ route('contact') }}"
               class="btn btn-light btn-lg mt-3">
                Start a Conversation
            </a>

        </div>

    </div>

</section>

@endsection