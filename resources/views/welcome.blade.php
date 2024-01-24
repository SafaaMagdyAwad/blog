@extends('layouts.app');
@section('title')
    welcome
@endsection
@section('content')

<div class="container">
    <h1>welcome.</h1>
    <h5>
        main page
    </h5>

</div>

<a href="{{route('user.rigisterForm')}}" type="button" class="btn btn-warning">rigister</a>
<a href="{{route('user.loginForm')}}" type="button" class="btn btn-success">login</a>
{{-- <a href="{{route('post.index')}}" type="button" class="btn btn-dark">all posts</a> --}}

    
@endsection