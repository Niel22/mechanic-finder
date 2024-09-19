<div class="owl-carousel rental-deal-slider owl-theme">

    @foreach($mechanics as $mechanic)
    <div class="rental-car-item">
        <div class="listing-item mb-0">
            <div class="listing-img">
                <a href="mechanic-details.html">
                    <img src="assets/user/img/cars/rental-car-01.jpg" class="img-fluid" alt="Mechanic">
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
                        <a href="mechanic-details.html">John's Auto Repair</a>
                    </h3>
                </div>
                <div class="listing-details-group">
                    <ul class="text-nowrap d-flex justify-content-between">
                        <li>
                            <i class="bx bx-time-two"></i>
                            <p>10 Years Experience</p>
                        </li>
                        <li>
                            <i class="bx bx-calendar"></i>
                            <p>Open: 9 AM - 6 PM</p>
                        </li>
                    </ul>
                    <ul class="text-nowrap d-flex justify-content-between">
                        <li>
                            <i class="bx bx-certification"></i>
                            <p>Certified</p>
                        </li>
                        <li>
                            <i class="bx bx-check-circle"></i>
                            <p>Available</p>
                        </li>
                    </ul>
                </div>
                <div class="listing-location-details">
                    <div class="listing-location">
                        <span><i class="bi bi-geo-alt"></i></span> Springfield
                    </div>
                </div>x

                <div class="listing-button">
                    <a href="mechanic-details.html" class="btn btn-order"><span><i
                                class="feather-phone me-2"></i></span>Contact Now</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
