@extends('admin.layouts.app')
@section('pageTitle', 'Reviews')
@section('breadCrumb', 'Reviews')
@section('content')
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Reviews</h5>

        <!-- Default Table -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">S/N</th>
              <th scope="col">User</th>
              <th scope="col">Mechanic</th>
              <th scope="col">Review</th>
              <th scope="col">Rating</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($reviews as $index => $review)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $review->user->name }}</td>
              <td>{{ $review->mechanic->shop_name }}</td>
              <td>{{ $review->reviews }}</td>
              <td>{{ $review->rating }}.0</td>
              <td>{{ $review->created_at->format('d, M Y h:i A') }}</td>
              <td>
                <a class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- End Default Table Example -->
      </div>
    </div>

  </div>
@endsection
