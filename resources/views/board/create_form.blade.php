@extends('layouts.app')
@section('title', '作成フォーム')

@section('style')
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1>Wiz Board</h1>
    <div class="table-responsive table--no-card m-b-40" style="margin-top:4%;">
        <form action="{{ url('/store') }}" method="post">
            @csrf

            Title : <input type="text" class="form-control" name="title" value="{{old('title')}}" required> <br>
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

            Content : <textarea class="form-control"name="content" value="{{old('content')}}" rows="10" required></textarea> <br>
            @error('content')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            
        <button type="submit" class="btn btn-info">登録</button>
        <button type="button" class="btn btn-secondary">リスト</button>
        </form>
    </div>   
</div>
@endsection


@section('script')

@endsection