@extends('layouts.default')

@section('title', 'レス一覧')

@section('header')
    <h2><a href="{{ url('/thread-create') }}">新規書き込み</a></h2>
@endsection
    
@section('content')
    <dl>
	@forelse ($threads as $thread)
	    <div class="posts">
		<dt>
          <div id="card"></div>
		</dt>
		<dd>
            <a href="/thread/{!! nl2br(e($thread->id)) !!}">{!! nl2br(e($thread->title)) !!}</a>
		    <a href="{{ action('ThreadsController@confirm', $thread->id) }}">削除</a>
		</dd>
	    </div><!-- posts -->
	@empty
	    <p>まだ投稿はありません。</p>
	@endforelse
    </dl>
@endsection

