@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- Page Header -->
<section class="bg-dark text-white py-5">
    <div class="container py-4 text-center">
        <h1 class="display-4 fw-bold">Contact Us</h1>

        <p class="lead mb-0">
            Have a question or a project in mind? We'd love to hear from you.
        </p>
    </div>
</section>


<!-- Contact Section -->
<section class="py-5">

    <div class="container py-4">

        <div class="row g-5">

            <!-- Contact Information -->
            <div class="col-lg-5">

                <span class="text-primary fw-bold">
                    GET IN TOUCH
                </span>

                <h2 class="display-6 fw-bold mt-2">
                    Let's Start a Conversation
                </h2>

                <p class="text-muted mt-4">
                    Whether you need a new website, mobile application,
                    cloud solution, or technology consultation, our team
                    is ready to help.
                </p>


                <div class="mt-4">

                    <div class="d-flex mb-4">

                        <div class="fs-3 me-3">
                            📍
                        </div>

                        <div>
                            <h5 class="fw-bold mb-1">
                                Address
                            </h5>

                            <p class="text-muted mb-0">
                                Manila, Philippines
                            </p>
                        </div>

                    </div>


                    <div class="d-flex mb-4">

                        <div class="fs-3 me-3">
                            📧
                        </div>

                        <div>
                            <h5 class="fw-bold mb-1">
                                Email
                            </h5>

                            <p class="text-muted mb-0">
                                info@technova.com
                            </p>
                        </div>

                    </div>


                    <div class="d-flex mb-4">

                        <div class="fs-3 me-3">
                            📞
                        </div>

                        <div>
                            <h5 class="fw-bold mb-1">
                                Phone
                            </h5>

                            <p class="text-muted mb-0">
                                +63 912 345 6789
                            </p>
                        </div>

                    </div>

                </div>


                <h5 class="fw-bold mt-5">
                    Follow Us
                </h5>

                <div class="mt-3">

                    <a href="#" class="btn btn-dark me-2">
                        Facebook
                    </a>

                    <a href="#" class="btn btn-dark me-2">
                        LinkedIn
                    </a>

                    <a href="#" class="btn btn-dark">
                        Instagram
                    </a>

                </div>

            </div>


            <!-- Contact Form -->
            <div class="col-lg-7">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4 p-lg-5">

                        <h3 class="fw-bold mb-4">
                            Send Us a Message
                        </h3>

                        <form>

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Full Name
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Enter your name"
                                    >

                                </div>


                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Email Address
                                    </label>

                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Enter your email"
                                    >

                                </div>

                            </div>


                            <div class="mb-3">

                                <label class="form-label">
                                    Subject
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="What is your message about?"
                                >

                            </div>


                            <div class="mb-3">

                                <label class="form-label">
                                    Message
                                </label>

                                <textarea
                                    class="form-control"
                                    rows="6"
                                    placeholder="Write your message here..."
                                ></textarea>

                            </div>


                            <button
                                type="submit"
                                class="btn btn-primary btn-lg">
                                Send Message
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- FAQ / CTA -->
<section class="bg-light py-5">

    <div class="container py-4 text-center">

        <h2 class="fw-bold">
            Need More Information?
        </h2>

        <p class="text-muted mt-3">
            Our team is available to answer your questions and discuss
            your technology needs.
        </p>

        <a href="{{ route('services') }}"
           class="btn btn-primary btn-lg mt-2">
            Explore Our Services
        </a>

    </div>

</section>

@endsection