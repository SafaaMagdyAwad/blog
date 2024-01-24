@extends('layouts.app')

@section('title')


welcome 
{{$user['name']}}
 to your home  
@endsection
@section('content')

<div class="container">
    <div class="card text_success">
        {{$user['name']}}
    </div>
    @foreach ($posts as $post)
        <div class="card">
        <div class="h1"> {{$post['title']}}</div>
        <p>{{$post['discription']}} </p>
        <a href="/post/{{$post['id']}}/edit/{{$user['id']}}" type="button" class="btn btn-warning">edit</a>
        <a href="{{route('post.delete',$post['id'])}}" type="button" class="btn btn-danger form_control">delete</a>
    </div>
    @endforeach
    

</div>




@endsection