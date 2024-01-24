@extends('layouts.app');
@section('title')
    login
@endsection
@section('content')
<div class="container">
    <h5>
        login
    </h5>
</div>
<form method="post" action="{{route('user.login')}}">
    @csrf
    
    <div>
        <input type="email" class="form-controll" placeholder="email" name="email">
    </div>
    <div>
        <input type="password" class="form-controll" placeholder="password" name="password">
    </div>
    <button type="submit" class="btn btn-success">login</button>
</form>
<div class="card">
    <h5>
        dont have an account?
    </h5>
<a href="{{route('user.rigisterForm')}}" type="button" class="btn btn-warning form-controll ">rigister</a>

</div>
    
@endsection