<div>
    @php
        $totalReviews = $reviews->count();
        $totalRating = $reviews->sum('rating');
        $averageRating = $totalReviews > 0 ? $totalRating / $totalReviews : 0;

        // Recommendation based on average rating
        $recommendation = '';
        if ($averageRating >= 4.5) {
            $recommendation = 'Highly Recommended';
        } elseif ($averageRating >= 3.5) {
            $recommendation = 'Recommended';
        } elseif ($averageRating >= 2.5) {
            $recommendation = 'Moderately Recommended';
        } else {
            $recommendation = 'Not Recommended';
        }
    @endphp
    <div class="review-sec listing-review">
        <div class="review-header">
            <h4>Reviews</h4>
        </div>
        <div class="rating-wrapper">
            <div class="rating-wraps">
                <h2>{{ number_format($averageRating, 1) }}<span>/5</span></h2>
                <p>{{ $recommendation }}</p>
                <h6>Based on {{ $totalReviews }} Reviews</h6>
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
                                        <img src="{{ asset('storage/uploads/user/' . $review->user->picture) }}"
                                            class="img-fluid" alt="User">
                                    </span>
                                    <div class="review-design">
                                        <h6>{{ $review->user->name }}</h6>
                                        <p>{{ $review->created_at->format('d, M Y') }}</p>
                                    </div>
                                </div>
                                <div class="reviewbox-list-rating">
                                    @if ($review->rating == 5)
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span> (5.0)</span>
                                        </p>
                                    @elseif ($review->rating == 4)
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="far fa-star"></i>
                                            <span> (4.0)</span>
                                        </p>
                                    @elseif ($review->rating == 3)
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span> (3.0)</span>
                                        </p>
                                    @elseif ($review->rating == 2)
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span> (2.0)</span>
                                        </p>
                                    @elseif ($review->rating == 1)
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span> (1.0)</span>
                                        </p>
                                    @else
                                        <p>No rating given</p>
                                    @endif
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

    <div class="review-sec leave-reply-form mb-0">
        <div class="review-header">
            <h4>Leave a Reply</h4>
        </div>
        <div class="review-list-rating">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="set-rating">
                        <p>Rate Mechanic</p>
                        <div class="rating-selection">
                            @for ($i = 5; $i >= 1; $i--)
                                <input type="checkbox" wire:click="addrate('{{ $i }}')"
                                    id="work{{ $i }}" value="{{ $i }}">
                                <label for="work{{ $i }}"></label>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="review-list">
                <ul>
                    <li class="review-box feedbackbox mb-0">
                        <div class="review-details">
                            <form class="#" wire:submit="addreview({{ $rate }})">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-block">
                                            <label>Comments </label>
                                            <textarea rows="4" wire:model="review" class="form-control"></textarea>
                                            @error('review')
                                                <span class="text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn text-end">
                                    <button class="btn btn-primary submit-review" type="submit">
                                        Submit Review</button>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
