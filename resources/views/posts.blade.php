{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
<h1>ini halaman Post</h1>

@foreach ($posts as $post)
<article class="mb-5">
<h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
{{-- <h5>By : {{ $post->author }}</h5> --}}
<p>{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection
