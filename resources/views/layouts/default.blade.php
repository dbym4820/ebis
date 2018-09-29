<!DOCTYPE html>
<html lang="ja">
    <head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="text/javascript" src="{{{ asset('js/jquery.js') }}}"></script>
	<script src="{{ url('/js/app.js', '', $is_production)}}"></script>
	<link href="{{ url('/css/app.css', '', $is_production) }}" rel="stylesheet">
	<link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
	<div id="header">
	    @include('layouts/navbar')
	    @yield('header')
	</div><!-- header -->
	<div id="main">
	    <div class="container-fluid">
		<div class="row">
		    <div class="clearfix"></div>
		    <div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
			    <li class="active"><a href="">料理</a></li>
			    <li><a href="">アクセス</a></li>
			    <li><a href="">皆様のご意見</a></li>
			    <li><a href="/questionnaire">アンケート</a></li>
			</ul>
		    </div>
		    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			@yield('content')
		    </div>
		</div>
	    </div>
	</div><!-- main -->
	<div id="footer">
	    @yield('footer')
	</div>
    </body>
</html>
