@extends('layouts.common')

@section('content')
<div class="container">
    <div class="container">
        <p class="p-4 m-4 bg-white">アプリタイトル</p>
    </div>
    <div class="container">
        <p class="p-4 m-4 bg-white">memo内容ランダム表示</p>
    </div>

    <div class="row justify-content-center">
        <div class="btn-group">
            <button type="button" class="btn bg-secondary bg-opacity-25 m-4"><a href="">新規登録</a></button>
            <button type="button" class="btn  bg-secondary bg-opacity-25 m-4"><a href="">ログイン</a></button>
            <button type="button" class="btn  bg-secondary bg-opacity-25 m-4"><a href="">ゲスト</a></button>
        </div>
    </div>
</div>
@endsection
