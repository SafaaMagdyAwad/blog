@extends('layouts.app')

@section('title')
    edit post
@endsection

@section('content')
{{-- {{dd($post)}} --}}
    <form method="post" action="{{Route('post.update',$post['id'],)}}">
        @csrf
        <div>
            <input type="text" class="form-controll" placeholder="{{$post['title']}}" name="title">
        </div>
    
    
        <div>
            <input type="text" class="form-controll" placeholder="{{$post['discription']}}" name="discription" >
        </div>
        
        <button type="submit" class="btn btn-success">edit</button>
    </form>
@endsection