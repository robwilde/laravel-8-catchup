@extends('layout')

@section('content')
    <article>
        <h1>{{$post->title }}</h1>

        <p>
            By <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a>
            in <i><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></i>
        </p>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go Back</a>
@endsection
