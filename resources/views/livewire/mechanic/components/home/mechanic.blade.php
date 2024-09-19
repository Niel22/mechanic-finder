<div class="row">

    @if($mechnics->count() > 0)
    @foreach($mechanics as $mechanic)
    <div class="col-lg-4 col-md-6 col-12 aos-init aos-animate" data-aos="fade-down">
        <div class="listing-item mb-0">
            <div class="listing-img">
                <a href="{{ route('mechanic.show', ['id' => encrypt($mechanic->id)]) }}">
                    <img src="{{ asset('storage/uploads/mechanic/' . $mechanic->logo) }}" style="height: 300px" class="img-fluid" alt="Mechanic">
                </a>
                <div class="fav-item justify-content-end">
                    <a href="javascript:void(0)" class="fav-icon">
                        <i class="feather-heart"></i>
                    </a>
                </div>
            </div>
            <div class="listing-content">
                <div class="listing-features">
                    <div class="list-rating">
                        @php
                            $totalReviews = $mechanic->review->count(); // Count total reviews
                            $averageRating = $totalReviews > 0 ? round($mechanic->review->avg('rating'), 0) : 0; // Calculate average rating and round to nearest whole number
                        @endphp

                        {{-- Display filled and empty stars based on the average rating --}}
                        @if($averageRating == 5)
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
                            <i class="fas fa-star"></i>
                        @elseif($averageRating == 3)
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        @elseif($averageRating == 2)
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        @elseif($averageRating == 1)
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        @else
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        @endif

                        {{-- Display the average rating in numbers --}}
                        <span>({{ $averageRating }}.0)</span>
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
    @else
    <div class="alert alert-warning text-sm text-center">No Mechanics found in your area</div>

</div>
