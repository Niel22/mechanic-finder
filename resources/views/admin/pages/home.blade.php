@extends('admin.layouts.app')
@section('pageTitle', 'Dashboard')
@section('breadCrumb', 'Dashboard')
@section('content')
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Mechanics Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card mechanic-card">
                            <div class="card-body">
                                <h5 class="card-title">Mechanics</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                        style="background-color: #ff9f43;"> <!-- Add custom color -->
                                        <i class="bi bi-wrench"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $mechanics }}</h6>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Mechanics Card -->

                    <!-- Users Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card users-card">
                            <div class="card-body">
                                <h5 class="card-title">Users</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                        style="background-color: #4CAF50;"> <!-- Add custom color -->
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $users }}</h6>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Users Card -->

                    <!-- Reviews Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card reviews-card">
                            <div class="card-body">
                                <h5 class="card-title">Reviews</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                        style="background-color: #ff4757;"> <!-- Add custom color -->
                                        <i class="bi bi-chat-square-text"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $users }}</h6>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Reviews Card -->




                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

@endsection
