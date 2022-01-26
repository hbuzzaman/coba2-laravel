{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

    <article>
        <h1 class="mb-5">
            {{-- kurung {{ }} =untuk htmlspecialchars <?php echo ?>--}}
            {{ $post->title }}
        </h1>
        {{-- php echo tanpa htmlspecialchars--}}
        {!! $post->body !!}
    </article>

    <a href="/posts">Back</a>
@endsection