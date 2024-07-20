@extends('layouts.auth')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

@endsection
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> All Posts </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Postss</li>
          </ol>
        </nav>
      </div>
      <div class="row">


        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                @if (count($posts) > 0)
              <h4 class="card-title">Posts</h4>


            <table id="posts-table" class="table table-striped">
                <thead>
                  <tr>
                    <th> Image </th>
                    <th> Title </th>
                    <th> Description </th>
                    <th> Category </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td class="py-1">
                      <img src="{{ $post->gallery->image }}" alt="image" />
                    </td>
                    <td> {{ $post->title }} </td>
                    <td>
                      {!! Str::limit($post->description ,15, '...') !!}
                    </td>
                    <td> {{ $post->category->name}}  </td>
                    <td> {{ $post->is_publish == 1 ? 'Publish' : 'Draft'}} </td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">View</a>
                        <a href="" class="btn btn-sm btn-info">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                  </tr>

                @endforeach





                </tbody>
              </table>

              @else
              <h3 class="text-center text-danger">No posts found</h3>

           @endif

            </div>
          </div>
        </div>



      </div>
    </div>
    <!-- content-wrapper ends -->

@endsection

@section('sctripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#posts-table').DataTable();
    });
</script>

@endsection
