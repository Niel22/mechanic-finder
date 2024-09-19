@extends('user.layouts.app')
@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">All Reviews</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Reviews</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 d-flex">
                    <div class="card book-card flex-fill mb-0">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <h4>All Reviews <span>{{ Auth::guard('web')->user()->reviews->count() }}</span></h4>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive dashboard-table">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6"></div>
                                        <div class="col-sm-12 col-md-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table datatable dataTable no-footer" id="DataTables_Table_0"
                                                role="grid">
                                                <thead class="thead-light">
                                                    <tr role="row">
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 34.0469px;">
                                                            S/N
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 235.438px;">Mechanic Shop Name</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 472.891px;">My Review</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 147.531px;">My Ratings</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 51.3125px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(Auth::guard('web')->user()->reviews->count() > 0)
                                                    @foreach (Auth::guard('web')->user()->reviews as $review)
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                <div class="table-avatar">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#view_mechanic"
                                                                        class="avatar avatar-lg flex-shrink-0">
                                                                        <img class="avatar-img"
                                                                            src="{{ asset('storage/uploads/mechanic/' . $review->mechanic->logo) }}"
                                                                            alt="Mechanic">
                                                                    </a>
                                                                    <div class="table-head-name flex-grow-1">
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#view_mechanic">{{ $review->mechanic->shop_name }}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>{{ $review->reviews }}.</p>
                                                            </td>
                                                            <td>
                                                                @if ($review->rating == 5)
                                                                    <div class="review-rating">
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <span>(5.0)</span>
                                                                    </div>
                                                                @elseif($review->rating == 4)
                                                                    <div class="review-rating">
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <span>(4.0)</span>
                                                                    </div>
                                                                @elseif($review->rating == 3)
                                                                    <div class="review-rating">
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <span>(3.0)</span>
                                                                    </div>
                                                                @elseif($review->rating == 2)
                                                                    <div class="review-rating">
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <span>(2.0)</span>
                                                                    </div>
                                                                @elseif($review->rating == 1)
                                                                    <div class="review-rating">
                                                                        <i class="fas fa-star filled"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <span>(1.0)</span>
                                                                    </div>
                                                                @else
                                                                    <div class="review-rating">
                                                                        <p>No rating given</p>
                                                                    </div>
                                                                @endif

                                                            </td>
                                                            <td class="text-end">
                                                                <div class="dropdown dropdown-action">
                                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <i class="feather-eye"></i> View
                                                                        </a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#delete_modal">
                                                                            <i class="feather-trash-2"></i> Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <span class="alert alert-danget text-center text-sm">You havent reviewd any mechanic yet.</span>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5"></div>
                                        <div class="col-sm-12 col-md-7"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
