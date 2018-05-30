@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card" style="margin-bottom: 1rem;">
                <div class="card-body">

                    @if($post->cover_image != 'noimage.jpg')
                    <div class="row">
                        <div class="col-4">
                            <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                        </div>
                        <div class="col-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                    @else
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    @endif
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection