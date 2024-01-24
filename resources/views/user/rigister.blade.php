@extends('layouts.app');
@section('title')
    register
@endsection
@section('content')
<div class="card">
    <h5>
        {{$message}}

    </h5>
</div>


<form method="post" action="{{route('user.rigister')}}">
    @csrf
    <div>
        <input type="text" class="form-controll" placeholder="name" name="name">
    </div>
    <div>
        <input type="email" class="form-controll" placeholder="email" name="email">
    </div>
    <div>
        <input type="password" class="form-controll" placeholder="password" name="password">
    </div>
    <div>
        <input type="password" class="form-controll" placeholder="repassword" name="confirm-password">
    </div>
    <button type="submit" class="btn btn-warning">rigister</button>
</form>
<div class="card">
    <h5>
        already hav an account?
    </h5>
<a href="{{route('user.loginForm')}}" type="button" class="btn btn-success form-controll ">login</a>

</div>
    
@endsection