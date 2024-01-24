@extends('layouts.app')

@section('content')


<div class="container">
  <div class="card">
    <div class="mb_5">
      <div class="bg_light">
        <div class="card">
          <a href="{{route('post.create',$user['id'])}}" type="button" class="btn btn-danger">create post</a>
        </div>
        <div class="card">
          <a href="{{route('user.show',$user['id'])}}" type="button" class="btn btn-dark">my profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">discription</th>
      <th scope="col">created at</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    
   
    
    @foreach ($posts as $post)
    <tr>
        
      <td >{{$post['id']}}</td>
      <td >{{$post['title']}}</td>
      <td>{{$post['discription']}}</td>
      <td>{{$post['created_at']}}</td>
      <td>
        
        <a href="post/show/{{$post['id']}}/{{$user['id']}}" type="button" class="btn btn-success">view</a>
        
       
      </td>
     
    </tr>
      @endforeach
   
  </tbody>
</table>

  @endsection
  @section('title')
    posts
@endsection