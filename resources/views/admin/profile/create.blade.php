{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む --}}
@section('title', 'プロフィールの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-8 mx-auto'>
                @extends('admin.ProfileController')
                <h2>プロフィール新規作成</h2>
               
                <form action="{{ route('admin/profile/create')}}" method="post" enctype="multipart/form-data"

                <div class="form-group row">
                    <label class="col-md-2">氏名</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>

                <div class="form-group row">
                    <label class="col-md-2">性別</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                </div>

                <div class="form-group row">
                    <label class="col-md-2">趣味</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                </div>

                <div class="form-group row">
                    <label class="col-md-2">自己紹介欄</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" name="introduction" value="{{ old('introduction') }}">
                </div>

            </div>
        </div>
    </div>
@endsection

