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
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{ $post->categories->title }}</p>
                                <section>
                                    @auth()
                                        <form action="{{ route('post.likes.store', $post->id) }}" method="POST">
                                            @csrf
                                            <span>{{ $post->liked_users_count }}</span>
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fa{{ auth()->user()->likedPosts->contains($post->id) ? 's' : 'r'}} fa-heart"></i>
                                            </button>
                                        </form>
                                    @endauth
                                    @guest()
                                        <div>
                                            <span class="border-0 bg-transparent">
                                                <span>{{ $post->liked_users_count }}</span>
                                                <i class="far fa-heart"></i>
                                            </span>
                                        </div>
                                    @endguest
                                </section>
                            </div>
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
        </div>

    </main>

@endsection
