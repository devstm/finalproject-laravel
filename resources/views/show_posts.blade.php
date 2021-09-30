@extends('layouts.welcome')
@section('content')
<center>
    <section id="main" class="wrapper">
    @foreach($posts as $post)
        <div class="inner">
            <div class="content">
                <header>
                    <h2 style="color: black;">{{ $post->getCraftsmanName() }}</h2>
                </header>
                @if($post->cover_image != 'noimage.jpg')
                    <img src="{{ asset('/storage/cover_images/' . $post->cover_image) }}" style="height:100% ; width:100%;">
                @endif
                <h4 class="mt-4" style="color: black;">{{ $post->title }}</h4>
                <p style="color: black; font-size: 22px; margin: 15px">{{ $post->body }}</p>
            </div>
        </div>
    @endforeach
    </section>
</center>
@endsection