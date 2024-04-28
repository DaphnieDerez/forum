@extends('layout.app')

@section('content')
<form action="{{route('posts.store')}}" method="POST">

    @csrf
    <input type="text" name="title" id="" placeholder="Title">
    <input type="text" name="body" id="" placeholder="Body">
    <input type="number" name="user_id" placeholder="User ID">
    <input type="submit" value="Create Post">
</form>