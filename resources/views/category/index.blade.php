@extends('layouts.main')

@section('content')

    <main class="blog">
        <div class="container">
            <section class="featured-posts-section">
                <div class="row">
                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>

    </main>

@endsection
