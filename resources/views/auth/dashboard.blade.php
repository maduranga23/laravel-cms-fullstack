@extends('layouts.auth')

@section('title', 'Dashboard')
@section('content')

    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">

        <div class="row">
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
              <div class="card-body">
                <img src="{{ asset('assets/auth/images/dashboard/circle.png') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Users</h4>
                <h2 class="mb-5">{{ $usersCount }}</h2>

              </div>
            </div>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
              <div class="card-body">
                <img src="{{ asset('assets/auth/images/dashboard/circle.png') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Posts</h4>
                <h2 class="mb-5">{{ $postsCount }}</h2>
              </div>
            </div>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
              <div class="card-body">
                <img src="{{ asset('assets/auth/images/dashboard/circle.png') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Categories</h4>
                <h2 class="mb-5">{{ $categoryCount }}</h2>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- content-wrapper ends -->

@endsection
