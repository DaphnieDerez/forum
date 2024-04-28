
@extends('layout.app')

@section('content')

<h1>Login</h1>
<form action="" method="POST">
    @csrf
    Email:<input type="email" name="email" id="">
    Password:<input type="password" name="password" id="">
    <input type="submit" value="Login">
</form>
<a href="{{route('users.create')}}">Create an account</a>