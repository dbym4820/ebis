<!DOCTYPE html>
<html lang="ja">
    <head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="text/javascript" src="{{{ asset('js/jquery.js') }}}"></script>
	<script src="{{asset('js/app.js')}}"></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
	<div id="header">
	    @include('layouts/navbar')
	    @yield('header')
	</div><!-- header -->
	<div id="main">
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
