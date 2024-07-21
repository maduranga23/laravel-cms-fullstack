@extends('layouts.website')

@section('title', 'Laravel CMS Project')

@section('content')
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>Post</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    @foreach ($posts as $post)
                        <div class="post">
                            <div class="post-media post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{ $post->gallery->image }}" alt="" style="width: 300px;">
                                </a>
                            </div>
                            <h3 class="post-title"><a
                                    href="{{ route('website.posts.show', $post->id) }}">{{ $post->title }}</a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <i class="ion-calendar"></i> {{ date('d M Y', strtotime($post->created_at)) }}
                                    </li>
                                    <li>
                                        <i class="ion-pricetags"></i> {{ $post->category->name }}
                                    </li>



                                </ul>
                            </div>
                            <div class="post-content">
                                <p>{!! Str::limit($post->description, 200) !!}</p>



                            </div>

                        </div>
                    @endforeach


                    {{ $posts->links() }}
                </div>
                <div class="col-lg-4">
                    <div class="pl-0 pl-xl-4">
                        <aside class="sidebar pt-5 pt-lg-0 mt-5 mt-lg-0">
                            <!-- Widget Latest Posts -->
                            <div class="widget widget-latest-post">
                                <h4 class="widget-title">Latest Posts</h4>
                                @if (count($latestPosts) > 0)
                                    @foreach ($latestPosts as $latestPost)
                                        <div class="media">
                                            <a class="pull-left" href="">
                                                <img class="media-object" src="{{ $latestPost->gallery->image }}"
                                                    alt="Image">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a
                                                        href="{{ route('website.posts.show', $latestPost->id) }}">{{ $latestPost->title }}</a>
                                                </h4>
                                                <p>{!! Str::limit($latestPost->description, 100) !!}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h4 class="text-center text-danger">No post added yet</h4>
                                @endif

                            </div>
                            <!-- End Latest Posts -->

                            <!-- Widget Category -->
                            <div class="widget widget-category">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="widget-category-list">
                                    @if (count($categories) > 0)
                                        @foreach ($categories as $category)
                                        <li><a href="">{{ $category->name }}</a>
                                        </li>
                                        @endforeach
                                    @else
                                    <h4 class="text-center text-danger">No category added yet</h4>
                                    @endif


                                </ul>
                            </div> <!-- End category  -->









                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
