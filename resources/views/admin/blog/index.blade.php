@extends('layouts.admin')

@section('content')
    <h1>Beheer blog</h1>
    <a href="{{ route('blog.create') }}">Create blog</a>
@endsection
