@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    
    {!! Form::open(['action' => ['PostController@update', $post->id ], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
    
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}

        <div class="form-group">
            
                {{Form::file('cover_image')}}
    
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection