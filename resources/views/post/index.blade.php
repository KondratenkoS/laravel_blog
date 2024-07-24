@extends('layouts.main')

@section('content')

    <main class="blog">
        <div class="container">
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ asset('storage/' . $post->preview_image) }}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{ $post->categories->title }}</p>
                            <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="mx-auto" style="margin-top: -80px; margin-bottom: +80px">
                        {{ $posts->links() }}
                    </div>
                </div>
            </section>
            <div class="row mx-auto mt-2 mt-lg-0">
                <h1>Випадкові пости</h1>
            </div>
            <div class="row mt-4">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $randomPost)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{ asset('storage/' . $randomPost->preview_image) }}" alt="blog post">
                                    </div>
                                    <p class="blog-post-category">{{ $randomPost->categories->title }}</p>
                                    <a href="{{ route('post.show', $randomPost->id) }}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{ $randomPost->title }}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Популярні пости</h5>
                        <ul class="post-list">
                            @foreach($likedPosts as $likedPost)
                                <li class="post">
                                    <a href="{{ route('post.show', $likedPost->id) }}" class="post-permalink media">
                                        <img src="{{ asset('storage/' . $likedPost->preview_image) }}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">{{ $likedPost->title }}</h6>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
