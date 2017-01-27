@extends('layouts.admin')

@section('content')
    <h1>Blog post: {{ $blog->titel }} </h1>


<p> {{ $blog->body }}</p>


    <a href="{{ route('blog.index') }}">Posts</a>
@endsection
