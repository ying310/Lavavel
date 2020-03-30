@extends('layouts.master')

@section('title', $title)
<script>
  window.onload = function(){
    document.getElementById('nickname').focus();
  };
</script>

@section('content')
<div class="container">
<h1>{{$title}}</h1>
@include('components.ValidationErrorMessage')
<form method="post" action="/user/auth/sign-up">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
  <label>
    暱稱:<input type="text" name="nickname" placeholder="暱稱" id="nickname" value="{{ old('nickname' )}}"/>
  </label>
  <label>
    E-mail:<input type="email" name="email" placeholder="Email" value="{{ old('email' )}}"/>
  </label>
  <label>
    密碼:<input type="password" name="password" placeholder="密碼" value="{{ old('password' )}}"/>
  </label>
  <label>
    確認密碼:<input type="password" name="password_confirmation" placeholder="確認密碼" value="{{ old('password_confirmation' )}}"/>
  </label>
  <label>
    帳號類型:
    <select name="type">
      <option value="G">一般會員</option>
      <option value="A">管理員</option>
    </select>

    <button type='submit'>註冊</button>
  </label>
</form>
</div>
@endsection
