@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->content }}</p>

    @if ($news->image)
        <img src="{{ asset('storage/' . $news->image) }}" alt="Image" width="300">
    @endif
</div>
@endsection
