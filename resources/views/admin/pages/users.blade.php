@extends('admin.layouts.app')
@section('pageTitle', 'Users')
@section('breadCrumb', 'Users')
@section('content')
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Users</h5>

        <!-- Default Table -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">S/N</th>
              <th scope="col">Picture</th>
              <th scope="col">Name</th>
              <th scope="col">Street Address</th>
              <th scope="col">Town/City</th>
              <th scope="col">State</th>
              <th scope="col">Country</th>
              <th scope="col">Date Joined</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $index => $user)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>
                <img src="{{ asset('storage/uploads/mechanic/'. $user->picture) }}" style="width: 40px; height: 40px" alt="">
              </td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->street_address }}</td>
              <td>{{ $user->town_city }}</td>
              <td>{{ $user->state }}</td>
              <td>{{ $user->country }}</td>
              <td>{{ $user->created_at->format('d. M Y') }}</td>
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
