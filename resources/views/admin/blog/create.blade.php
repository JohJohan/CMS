@extends('layouts.admin')

@section('content')
    <h1>Create blog</h1>

    <form class="" action="{{ route('blog.store') }}" method="post">
        {{ csrf_field() }}
        <label for="titel">Titel:</label>
        <input type="text" name="titel" value="" class="form-control">

        <label for="body">Content:</label>
        <textarea type="text" name="body" value="" class="form-control"></textarea>

        <button type="submit" name="button" class="btn btn-success">Submit</button>

    </form>

    <a href="{{ route('blog.index') }}">Posts</a>
@endsection
