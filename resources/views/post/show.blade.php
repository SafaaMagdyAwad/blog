@extends('layouts.app')
@section('content')
     <div class="card">
        <div class="container">
            <div class="mb_3">
                <h3>title: {{$post['title']}}</h3>
                <h4>created at: {{$post['created_at']}}</h4>
            </div>
        </div>
     </div>
     <div class="card">
        <div class="container">
            <div class="mb_3">
                <h6>discription: {{$post['discription']}}</h6>
                <p>creator:{{$post['creator']}}</p>
                <p>{{$post['user_id']}}</p>
            </div>
        </div>
     </div>
     <div class="card">
        <p>comment</p>
{{-- {{$user['id']}} --}}

        <form method="post" action="/post/show/{{$post['id']}}/{{$user['id']}}">
            @csrf
            <div>
                <input type="text" class="form-controll" placeholder="write your comment" name="comment">
            </div>
            <div>
                <input type="text" class="form-controll" placeholder="post_id" name="post_id"  value="{{$post['id']}}"   hidden>
            </div>
            <div>
                <input type="text" class="form-controll" placeholder="user_id" name="user_id" value="{{$user['id']}}"  hidden >
            </div>
            <button type="submit" class="btn btn-success ">comment</button>
            <a href="{{route('user.loginForm')}}" type="button" class="btn btn-success">Out</a>
        </form>

        {{-- comments will be here --}}

        <div class="container">
            <div class="card">
                <h5>comments</h5>
                @foreach ($comments as $comment)
                    <div class="card">
                        <h4>
                            {{$comment['user_id']}} : comments : {{$comment['comment']}}
                        </h4>
                        <p>
                            {{$comment['created_at']}}
                        </p>
                        
                    </div>
                @endforeach
            </div>
        </div>







     </div>
{{--  use bootstrab card --}}
@endsection
@section('title')
    show
@endsection


