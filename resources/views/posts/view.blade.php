@extends('layout.app')

@section('content')
<div>
    <p>Title: {{ $post->title }}</p>
    <p>Body: {{ $post->body }}</p>

    <a href="{{route('posts.edit', $post)}}">Edit</a>
    <a href="{{route('posts.delete', $post)}}">Delete</a>
</div>