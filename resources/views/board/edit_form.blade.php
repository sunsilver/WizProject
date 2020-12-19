@extends('layouts.app')
@section('title', 'title name')
@section('style')
  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1>Wiz Board</h1>
    <div class="table-responsive table--no-card m-b-40" style="margin-top:4%;">
        <form action="{{ url('/update') }}/ {{ $wiz_boards->id }}" method="post">
        
            @csrf
            <!-- value는 폼 안에 있는 내용 -->
            <p style="font-family: 'Do Hyeon', sans-serif; font-size:30px; color:gray;">제목</p>
                <input type="text" class="form-control" name="title" value="{{$wiz_boards->title}}"> <br>
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <!-- textarea는 value가 안먹힘 -->
            <p style="font-family: 'Do Hyeon', sans-serif; font-size:30px; color:gray;">내용</p>
                <textarea name="content" class="form-control" value="{{old('content')}}" rows="10">{{$wiz_boards->content}}</textarea> <br>
            @error('content')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            
            <button type="submit" class="btn winter-neva-gradient">登録</button>
        </form>
    </div>   
</div>
@endsection


@section('script')
<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}" defer></script>

@endsection