@extends('admin.layouts.app')
@section('pageTitle', 'Mechanics')
@section('breadCrumb', 'Mechanics')
@section('content')
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Mechanics</h5>

        <!-- Default Table -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">S/N</th>
              <th scope="col">Logo</th>
              <th scope="col">Shop Name</th>
              <th scope="col">Username</th>
              <th scope="col">Street Address</th>
              <th scope="col">Town/City</th>
              <th scope="col">State</th>
              <th scope="col">Country</th>
              <th scope="col">Date Joined</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($mechanics as $index => $mechanic)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>
                <div>
                    <img src="{{ asset('storage/uploads/mechanic/'. $mechanic->logo) }}" style="width: 40px; height: 40px" alt="">
                </div>
              </td>
              <td>{{ $mechanic->shop_name }}</td>
              <td>{{ $mechanic->username }}</td>
              <td>{{ $mechanic->street_address }}</td>
              <td>{{ $mechanic->town_city }}</td>
              <td>{{ $mechanic->state }}</td>
              <td>{{ $mechanic->country }}</td>
              <td>{{ $mechanic->created_at->format('d, M Y') }}</td>
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
