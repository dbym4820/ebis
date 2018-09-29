@extends('layouts.default')

@section('title', 'ダッシュボード')

@section('content')
    <p><a href="{{ url('/users', '', $is_production) }}">ユーザ一覧</a></p>
    <p><a href="{{ url('/threads', '', $is_production) }}">スレッド一覧</a></p>
@endsection


