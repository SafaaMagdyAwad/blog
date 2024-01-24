@extends('layouts.app')

@section('title')
    create post
@endsection

@section('content')
<div class="container">
    <div class="m_5">
        <h1>
            create your post :)
        </h1>
    </div>
</div>


    <form method="post" action="{{route('post.store',$user['id'])}}">
        @csrf
        <div>
            <input type="text" class="form-controll" placeholder="title" name="title">
        </div>
        <div>
            <input  class="form-controll" placeholder="title" name="user_id" value="{{$user['id']}}" hidden >
        </div>
        <div>
            <input type="text" class="form-controll" placeholder="discription" name="discription">
        </div>
        <div>
            <input type="text" class="form-controll" placeholder="creator" name="creator" value="{{$user['name']}}" hidden >
        </div>
        <button type="submit" class="btn btn-success">send</button>
    </form>
@endsection