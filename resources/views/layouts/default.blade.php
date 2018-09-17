<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <div id="example"></div>
    <div id="header">
      @yield('header')
      <h1>掲示板</h1>
    </div><!-- header -->
    <div id="main">
      @yield('content')
    </div><!-- main -->
    <script src="{{asset('/js/app.js')}}"></script>
  </body>
</html>
