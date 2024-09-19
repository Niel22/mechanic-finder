<div>
    <div class="review-sec listing-review">
        <div class="review-header">
            <h4>Reviews</h4>
        </div>
        <div class="rating-wrapper">
            <div class="rating-wraps">
                <h2>4.8<span>/5</span></h2>
                <p>Highly Recommended</p>
                <h6>Based on 320 Reviews</h6>
            </div>
        </div>

        <div class="review-card">
            <div class="review-head">
                <h6>Showing {{ $reviews->count() }} guest reviews</h6>
            </div>
            <ul>
                @forelse ($reviews as $review)
                <li>
                    <div class="review-wraps">
                        <div class="review-header-group">
                            <div class="review-widget-header">
                                <span class="review-widget-img">
                                    <img src="{{ asset('storage/uploads/user/' . $review->user->picture) }}" class="img-fluid" alt="User">
                                </span>
                                <div class="review-design">
                                    <h6>{{ $review->user->name  }}</h6>
                                    <p>{{ $review->created_at->format('d, M Y') }}</p>
                                </div>
                            </div>
                            <div class="reviewbox-list-rating">
                                <p class="list-rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span> (5.0)</span>
                                </p>
                            </div>
                        </div>
                        <p>{{ $review->reviews }}.</p>
                    </div>
                </li>
                @empty
                <li>
                    <div class="alert alert-warning text-sm">No Reviews Yet</div>
                </li>
                @endforelse
            </ul>
        </div>

    </div>
</div>
