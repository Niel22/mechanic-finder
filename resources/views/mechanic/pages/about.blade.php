@extends('mechanic.layouts.app')
@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">About us</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="section about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-down">
                    <div class="about-img">
                        <div class="about-exp">
                            <span>12+ years of experiences</span>
                        </div>
                        <div class="abt-img">
                            <img src="{{ asset('assets/user/img/about-us.png') }}" class="img-fluid" alt="About us">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-down">
                    <div class="about-content">
                        <h6>ABOUT OUR PLATFORM</h6>
                        <h2>The Ultimate Solution for Finding and Reviewing Local Mechanics</h2>
                        <p>Our platform is designed to help users easily find reliable and skilled mechanics in their local area. Whether you're facing a vehicle breakdown or need routine maintenance, we ensure you connect with the best professionals in the industry. Our comprehensive database provides a list of mechanics based on location, services offered, and customer reviews, allowing users to make informed decisions with ease.</p>
                        <p>We aim to streamline the process of locating trustworthy mechanics by providing detailed profiles, real-time availability, and honest reviews from previous customers. With our system, vehicle owners can rest assured they are choosing qualified professionals who meet their specific needs.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Effortless search for mechanics in your area</li>
                                    <li>Verified customer reviews and ratings</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Comprehensive mechanic profiles with service details</li>
                                    <li>Real-time availability and booking options</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section services bg-light-primary">
        <div class="service-right">
            <img src="{{ asset('assets/user/img/bg/service-right.svg') }}" class="img-fluid" alt="services right">
        </div>
        <div class="container">

            <div class="section-heading" data-aos="fade-down">
                <h2>How It Works</h2>
                <p>Finding and hiring a mechanic is simple and involves the following steps:</p>
            </div>

            <div class="services-work">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="services-group service-search flex-fill">
                            <div class="services-icon border-warning">
                                <img class="icon-img bg-warning" src="{{ asset('assets/user/img/icons/services-icon-02.svg') }}" alt="Search Mechanic">
                            </div>
                            <div class="services-content">
                                <h3>1. Find a Mechanic</h3>
                                <p>Search for local mechanics based on your location, services offered, and ratings. The system will show top mechanics nearby for quick access.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="services-group service-contact flex-fill">
                            <div class="services-icon border-dark">
                                <img class="icon-img bg-dark" src="{{ asset('assets/user/img/icons/services-icon-03.svg') }}" alt="Contact Mechanic">
                            </div>
                            <div class="services-content">
                                <h3>2. Contact the Mechanic</h3>
                                <p>Call or send a WhatsApp message to the mechanic directly to book their services, discuss details, and schedule an appointment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
