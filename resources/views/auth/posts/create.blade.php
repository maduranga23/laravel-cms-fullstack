@extends('layouts.auth')

@section('title', 'Create Post')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Posts </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Posts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
            <div class="row">


                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Posts</h4>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="post" action="{{ route('posts.store') }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" id=""
                                        placeholder="Title" value="{{ old('title') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control" required>
                                        <option >Choose Option</option>
                                        @if (count($category) > 0)
                                            @foreach ($category as $category1)
                                                <option value="{{ $category1->id }}"
                                                    {{ old('category') == $category1->id ? 'selected' : '' }}>{{ $category1->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Published</label>
                                    <select name="is_publish" class="form-control" required>
                                        <option >Choose Option</option>
                                        <option value="1" {{ old('is_publish') == 1 ? 'selected' : '' }}>Publish</option>
                                        <option value="0" {{ old('is_publish') == 0 ? 'selected' : '' }}>Draft</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="file" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="summernote" class="form-control" cols="30" rows="50" required>{{ old('description') }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>






            </div>
        </div>
        <!-- content-wrapper ends -->
    @endsection

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
    @endsection
