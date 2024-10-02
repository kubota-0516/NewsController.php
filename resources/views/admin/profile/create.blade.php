{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む --}}
@section('title', 'プロフィールの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 mx-auto'>

                <h2>プロフィール新規作成</h2>
               
                <form action="{{ route('admin.profile.create')}}" method="post" enctype="multipart/form-data">

                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="introduction" value="{{ old('introduction') }}">
                        </div>
                    </div>
                   
                    @csrf <!-- formの中には必要、場所はどこでも良い　-->
                    <input type="submit" class="btn btn-primary" value="保存">

                </form>
            </div>
        </div>
    </div>
@endsection

<!-- 1.【超応用】 プロフィールの更新履歴を保存する仕組みを作るにはどのようにしたらよいでしょうか。手順をまとめてみましょう

1.編集履歴テーブルの作成と関連付
2.編集履歴の記録と参照
3.viewを実装
4.controllerを実装
5.routingを実装する -->
