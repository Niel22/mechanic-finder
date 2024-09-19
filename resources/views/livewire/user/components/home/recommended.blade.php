<div class="owl-carousel rental-deal-slider owl-theme">

    @foreach($mechanics as $mechanic)
    <div class="rental-car-item">
        <div class="listing-item mb-0">
            <div class="listing-img">
                <a href="{{ route('mechanic', ['id' => encrypt($mechanic->id)]) }}">
                    <img src="{{ asset('storage/uploads/mechanic/' . $mechanic->logo) }}" class="img-fluid" alt="Mechanic">
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
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <span>(5.0)</span>
                    </div>
                    <h3 class="listing-title">
                        <a href="{{ route('mechanic', ['id' => encrypt($mechanic->id)]) }}">{{ $mechanic->shop_name }}</a>
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
                    <a href="{{ route('mechanic', ['id' => encrypt($mechanic->id)]) }}" class="btn btn-order"><span><i
                                class="feather-phone me-2"></i></span>Contact Now</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
