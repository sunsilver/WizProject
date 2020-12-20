@extends('layouts.app')
@section('title', 'title name')
@section('style')
  
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1>Wiz Board</h1>
    <div class="table-responsive table--no-card m-b-40" style="margin-top:4%;">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body">
                <div class="title" style="font-size:30px; color:gray; margin-botton:5%;">
                    {{$wiz_boards->title}}</h4>
                </div>
    
                    <h6 class="card-subtitle text-muted mb-4" style="margin-top:5%; margin-left:3%;">
                        <i> ID {{$wiz_boards->user_id}}</i>
                        ·
                        <i> CREAT_DATE {{$wiz_boards->created_at}}</i>
                        ·
                        <i> HIT </i>
                    </h6>
                    <p class="" style="font-family: 'Do Hyeon', sans-serif; color:gray; font-size:30px; margin-left:3%;">{{$wiz_boards->content}}</p>
    
            </div>
            <div class="card-body" style="margin-left:3%; margin-bottom:3%;">
                <button class="btn btn-outline-primary"
                    onclick="window.location='{{ url('edit_form')}}/{{$wiz_boards->id }}'">修正</button>
                <button class="btn btn-outline-primary"
                    onclick="window.location='{{ url('delete')}}/{{$wiz_boards->id }}'">削除</button>
                <a href="{{ url('list')}}" class="btn winter-neva-gradient" role="button" style="margin-left:40%;">リスト</a>
            </div>
        </div>
    </div>   
</div>
@endsection


@section('script')

@endsection