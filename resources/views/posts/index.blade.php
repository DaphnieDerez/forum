@extends('layout.app')

@section('content')
 <div>
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">New Post</a>
    <table>
        <thead>
            <th>Title</th>
            <th>Body</th>
            <th>Action</th>
        </thead>
        <tbody>
            
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                        <a href="{{route('posts.show', $post)}}">View</a>
                    </td>
                </tr>
                @endforeach
            
            
        </tbody>
    </table>



 </div>