@extends('layouts.default')

@section('title', '新スレッド申請')

@section('content')
    <form action="{{ url('/thread-save', '', $is_production) }}" method="post">
    {{ csrf_field() }}
        <p>
            <input type="text" name="thread_title" value="{{ old('thread_title') }}" id="thread_title" placeholder="enter thread name">
        </p>
        @if ($errors->has('body'))
            <span class="error">{{ $errors->first('body') }}</span>
        @endif
        <p>
            <input type="submit" value="submit">
        </p>
        <input type="hidden" name="user_id" value="{{ $user_id }}">
    </form>
@endsection
