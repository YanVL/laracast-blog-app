@extends('layout')

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>

        <div>
            <p>
                {{ $post->body }}
            </p>
        </div>

        <a href="/">Go Back</a>
    </article>
@endsection
