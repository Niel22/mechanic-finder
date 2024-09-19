@extends('user.layouts.app')
@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Mechanics In {{ $location }}</h2>
                    <nav class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mechanics</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section-search page-search">
        <div class="container">
            <div class="search-box-banner">
                <form action="{{ route('mechanic.search') }}" method="post">
                    @csrf
                    <ul class="align-items-center justify-content-center">
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Find Mechanics by Location</label>
                                <div class="group-img">
                                    <input type="text" value="{{ $search }}" name="mechanic_city" class="form-control" placeholder="Enter City or Town Name">
                                    <span><i class="feather-map-pin"></i></span>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-last">
                            <div class="input-block">
                                <div class="search-btn">
                                    <button class="btn search-button" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>Search
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>


    <section class="section car-listing pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if($mechanics->count() > 0)
                    <div class="row">
                        @foreach($mechanics as $mechanic)
                        <div class="col-lg-4 col-md-6 col-12 aos-init aos-animate" data-aos="fade-down">
                            <div class="listing-item mb-0">
                                <div class="listing-img">
                                    <a href="{{ route('user.show', ['id' => encrypt($mechanic->id)]) }}">
                                        <img src="{{ asset('storage/uploads/mechanic/' . $mechanic->logo) }}" style="height: 300px" class="img-fluid" alt="Mechanic">
                                    </a>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>
                                        <h3 class="listing-title">
                                            <a href="{{ route('mechanic.show', ['id' => encrypt($mechanic->id)]) }}">{{ $mechanic->shop_name }}</a>
                                        </h3>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul class="text-nowrap d-flex justify-content-between">
                                            <li>
                                                <i class="bx bx-time-two"></i>
                                                <p class="text-capitalize">{{ $mechanic->years_of_experience }} Experience</p>
                                            </li>

                                        </ul>
                                        <ul class="text-nowrap d-flex justify-content-between">
                                            <li>
                                                <i class="bx bx-calendar"></i>
                                                <p>Open: {{ \Carbon\Carbon::parse($mechanic->working_hours_from)->format('h A') }} - {{ \Carbon\Carbon::parse($mechanic->working_hours_to)->format('h A') }}</p>
                                            </li>
                                            <li>
                                                <i class="bx bx-check-circle"></i>
                                                <p>Available</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-location">
                                            <span><i class="bi bi-geo-alt"></i></span> {{ $mechanic->street_address. ', '. $mechanic->town_city.', '. $mechanic->state.'' }}
                                        </div>
                                    </div>

                                    <div class="listing-button">
                                        <a href="{{ route('mechanic.show', ['id' => encrypt($mechanic->id)]) }}" class="btn btn-order"><span><i
                                                    class="feather-phone me-2"></i></span>Contact Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @else
                    <div class="alert alert-warning">No Mechanic found in this area</div>
                    @endif


                </div>
            </div>
        </div>
    </section>
@endsection
