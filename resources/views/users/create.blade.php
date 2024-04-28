@extends('layout.app')

@section('content')
<h1>Create Account</h1>
<form action="{{route('users.store')}}" method="POST">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="password_confirmation" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" value="Create Account" class="btn btn-success"></td>
        </tr>
    </table>
</form>