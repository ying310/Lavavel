<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <title>@yield('title') - Laravel</title>
</head>
<body>
  <header>
    <ul>
      @if(session()->has('user_id'))
        <li><a href="/user/auth/sign-out">登出</a></li>
        <li><a href="/merchandise/create">建立</a></li>
        <li><a href="/merchandise/manage">編輯所有</a></li>
        <li><a href="/merchandise">查看</a></li>
      @else
        <li><a href="/user/auth/sign-in">登入</a></li>
        <li><a href="/user/auth/sign-up">註冊</a></li>
      @endif
    </ul>
  </header>
  <div class="container">
    @yield('content')
  </div>
  <footer>
    <a href="#">聯絡我們</a>
  </footer>
</body>
</html>
