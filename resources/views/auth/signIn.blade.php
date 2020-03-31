@extends('layout.master')

@section('title', $title)

@section('content')
<div class="container">
<h1>{{$title}}</h1>
@include('components.socialBotton')
<form action='/user/auth/sign-in' method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
  <label>
  E-mail:
  <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"/>
  </label>
  <label>
  密碼:
  <input type="password" name="password" placeholder="密碼" value="{{ old('password') }}"/>
  </label>
  <button type="submit">登入</button>
</form>
</div>
@endsection
