@extends('layouts.default')

@section('title', 'スレッド一覧')

@section('header')
    <h2><a href="{{ url('/thread-create') }}">新規スレッドを作成</a></h2>
    <div id="example"></div>
@endsection
    
@section('content')
    <dl>
	@forelse ($threads as $thread)
	    <div class="posts">
		<dt>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header"><a href="/thread/{!! nl2br(e($thread->id)) !!}">{!! nl2br(e($thread->title)) !!}</a></div>

                            <div class="card-body">
                                <h5 class="card-title">title</h5>
		                <span>Thread :</span><span>{{ $thread->user_id }}</span>
		                <span>{{ $thread->created_at }}</span>
		                <p class="card-text">.</p>
				<a href="{{ action('ThreadsController@confirm', $thread->id) }} " class="btn btn-primary">削除</a>
		           </div>
                        </div>
                   </div>
                </div>
            </div>

		</dt>
		<dd>
		    

		</dd>
	    </div><!-- posts -->
	@empty
	    <p>まだ投稿はありません。</p>
	@endforelse
    </dl>
@endsection
