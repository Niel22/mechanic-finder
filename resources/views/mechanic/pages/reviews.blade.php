@extends('mechanic.layouts.app')
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
                                    <h4>All Reviews <span>40</span></h4>
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
                                            <table class="table datatable dataTable no-footer" id="DataTables_Table_0" role="grid">
                                                <thead class="thead-light">
                                                    <tr role="row">
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 34.0469px;">
                                                        S/N
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 235.438px;">Customer Name</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 472.891px;">Customer Review</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 147.531px;">Ratings</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 51.3125px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            <div class="table-avatar">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#view_mechanic" class="avatar avatar-lg flex-shrink-0">
                                                                    <img class="avatar-img" src="{{ asset('assets/user/img/cars/car-01.jpg') }}" alt="Mechanic">
                                                                </a>
                                                                <div class="table-head-name flex-grow-1">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#view_mechanic">John Doe</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>Very professional, fixed the issue quickly, and gave helpful advice on maintenance.</p>
                                                        </td>
                                                        <td>
                                                            <div class="review-rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star-half-stroke filled"></i>
                                                                <span>(4.5)</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                                        <i class="feather-eye"></i> View
                                                                    </a>
                                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                                        <i class="feather-trash-2"></i> Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
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
