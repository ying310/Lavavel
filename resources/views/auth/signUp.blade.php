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
<form method="post" action="/user/auth/sign-up">
  <label>
    暱稱:<input type="text" name="nickname" placeholder="暱稱" id="nickname"/>
  </label>
  <label>
    E-mail:<input type="email" name="email" placeholder="Email"/>
  </label>
  <label>
    密碼:<input type="password" name="password" placeholder="密碼"/>
  </label>
  <label>
    確認密碼:<input type="password" name="password_confirmation" placeholder="確認密碼"/>
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
