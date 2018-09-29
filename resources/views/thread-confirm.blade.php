@extends('layouts.default')

@section('title', '削除画面')

@section('content')
    <h1>本当にこのスレッドを削除しますか？</h1>
    <dl>
        <dt>
            <span>1</span><span>名前：{{ $thread->user_id }}</span>
            <span>{{ $thread->created_at }}</span><br>
        </dt>
        <dd>
            {{ $thread->title }}
        </dd>
    </dl>
    <form action="{{ url('/thread-delete', '', $is_production) }}" method="post">
        {{ csrf_field() }}
            <p>
                <input type="hidden" name="id" value="{{ $thread->id }}">
            </p>
            <p>
                @if (isset($error))
                <span class="error">{{ $error }}</span>
                @endif
            </p>
                <input type="submit" value="submit">
        </form>
@endsection
