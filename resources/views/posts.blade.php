@extends('layout')

@section('content')
    @foreach($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <p>
                By <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a>
                in <i><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></i>
            </p>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
