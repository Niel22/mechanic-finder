@extends('user.layouts.app')
@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">{{ $mechanic->shop_name }}</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $mechanic->shop_name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="product-detail-head">
        <div class="container">
            <div class="detail-page-head">
                <div class="detail-headings">
                    <div class="star-rated">
                        <ul class="list-rating">
                            <li>
                                <span class="year">Approved</span>
                            </li>
                            <li class="ratings">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-list-rating">(4.0)</span>
                            </li>
                        </ul>
                        <div class="camaro-info">
                            <h3>{{ $mechanic->shop_name }}</h3>
                            <div class="camaro-location">
                                <div class="camaro-location-inner">
                                    <i class="bx bx-map"></i>
                                    <span>Location : {{ $mechanic->street_address }}, {{ $mechanic->town_city }},
                                        {{ $mechanic->state }}, {{ $mechanic->country }}</span>
                                </div>
                                <div class="camaro-location-inner">
                                    <i class="bx bx-calendar"></i>
                                    <span>Listed on: {{ $mechanic->created_at->format('d M, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="detail-product">
                        <div class="pro-info">
                            <div class="pro-badge">
                                <span class="badge-km"><i class="fa-solid fa-person-walking"></i>5.0 Km Away</span>
                            </div>
                        </div>
                        <div class="detail-bigimg">
                            <div class="product-img">
                                <img src="{{ asset('storage/uploads/mechanic/' . $mechanic->logo) }}" style="width: 100%"
                                    class="img-fluid" alt="Slider">
                            </div>
                        </div>
                    </div>
                    <div class="review-sec mb-0">
                        <div class="review-header">
                            <h4>About Me</h4>
                        </div>
                        <div class="description-list">
                            <p>{{ $mechanic->about }}.</p>
                        </div>
                    </div>
                    <div class="review-sec mb-0">
                        <div class="review-header">
                            <h4>Service Offered</h4>
                        </div>
                        <div class="description-list">
                            <p>{{ $mechanic->services_offered }}.</p>
                        </div>
                    </div>



                    <livewire:user.components.mechanic.rating :id="$mechanic->id" />

                </div>
                <div class="col-lg-4 theiaStickySidebar">

                    <div class="review-sec extra-service mt-0">
                        <div class="review-header">
                            <h4>Listing Owner Details</h4>
                        </div>
                        <div class="owner-detail">
                            <div class="owner-img">
                                <a href="#"><img src="{{ asset('storage/uploads/mechanic/' . $mechanic->logo) }}"
                                        alt="User"></a>
                            </div>
                            <div class="reviewbox-list-rating">
                                <h5><a>{{ $mechanic->username }}</a></h5>

                                <p>
                                    @php
                                        $totalReviews = $mechanic->review->count(); // Count total reviews
                                        $averageRating =
                                            $totalReviews > 0 ? round($mechanic->review->avg('rating'), 0) : 0; // Calculate average rating and round to nearest whole number
                                    @endphp

                                    {{-- Display filled and empty stars based on the average rating --}}
                                    @if ($averageRating == 5)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    @elseif($averageRating == 4)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="far fa-star"></i>
                                    @elseif($averageRating == 3)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    @elseif($averageRating == 2)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    @elseif($averageRating == 1)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    @endif

                                    {{-- Display the average rating in numbers --}}
                                    <span>({{ $averageRating }}.0)</span>
                                </p>
                            </div>
                        </div>
                        <ul class="booking-list">
                            <li>
                                Email
                                <span><a href="{{ $mechanic->email }}" class="__cf_email__"
                                        data-cfemail="{{ $mechanic->email }}">{{ $mechanic->email }}</a></span>
                            </li>
                            <li>
                                Phone Number
                                <span>{{ $mechanic->phone_number }}</span>
                            </li>
                            <li>
                                Location
                                <span>{{ $mechanic->street_address }}, {{ $mechanic->town_city }},
                                    {{ $mechanic->state }}, {{ $mechanic->country }}</span>
                            </li>
                        </ul>
                        <div class="message-btn">
                            <a href="tel:{{ $mechanic->phone_number }}" class="btn btn-order">Call Now</a>
                            <a href="wa.me/{{ $mechanic->phone_number }}" class="chat-link"><i
                                    class="fa-brands fa-whatsapp"></i>Chat Via Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
            <div class="col-md-12">
                <div class="details-car-grid">
                    <div class="details-slider-heading">
                        <h3>Other Mechanics Around This Area</h3>
                    </div>
                    <livewire:mechanic.components.mechanic.related-mechanics :id="$mechanic->id"/>
                </div>
            </div>
        </div> --}}
        </div>
    </section>
@endsection
