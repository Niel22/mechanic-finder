@extends('mechanic.layouts.app')
@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Contact us</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-section">
        <div class="container">
            <div class="contact-info-area">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-down"
                        data-aos-duration="1200" data-aos-delay="0.1">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-phone-call"></i></span>
                            <h3>Phone Number</h3>
                            <a href="tel:(888)888-8888">(234) 8109414647</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-down"
                        data-aos-duration="1200" data-aos-delay="0.2">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-mail"></i></span>
                            <h3>Email Address</h3>
                            <a href="mailto:johnsmith@example.com">mechanicfinder@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-down"
                        data-aos-duration="1200" data-aos-delay="0.3">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-map-pin"></i></span>
                            <h3>Location</h3>
                            <a href="javascript:void(0);">Nigeria</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-down"
                        data-aos-duration="1200" data-aos-delay="0.4">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-clock"></i></span>
                            <h3>Opening Hours</h3>
                            <a href="javascript:void(0);">Opened Always</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-info-area aos-init aos-animate" data-aos="fade-down" data-aos-duration="1200"
                data-aos-delay="0.5">
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <img src="{{ asset('assets/user/img/contact-info.jpg') }}" class="img-fluid" alt="Contact">
                    </div>
                    <div class="col-lg-6">
                        <form action="#">
                            <div class="row">
                                <h1>Get in touch!</h1>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>Email Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>Phone number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>Comments <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4" cols="50" placeholder="">											</textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn contact-btn">Send Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
