@extends('layout.app')

@section('content')

<h1>Edit Post</h1>
<form action="{{route('posts.update', $post)}}" method="POST">

    @method('PUT')
    @csrf

    <input type="text" name="title" value="{{$post->title}}">
    <input type="text" name="body" value="{{$post->body}}">
    <input type="text" name="user_id" value="{{$post->user_id}}">
    <input type="submit" value="Save">
</form>