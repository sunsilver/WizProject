@extends('layouts.app')
@section('title', 'title name')

@include('layouts.user')

@section('style')
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1>Wiz Board</h1>
    <div class="table-responsive table--no-card m-b-40" style="margin-top:4%;">
        <table class="table table-borderless table-striped table-earning">
            <thread>
                <tr style="background-color: #0f62a7;">
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Writer</th>
                </tr>
                @foreach($wiz_boards as $wiz_board)
                <tr>
                    <td><a href="{{ url('view') }}/{{ $wiz_board->id }}">{{$wiz_board->title}}</a></td>
                    <td>{{$wiz_board->content}}</td>
                    <td>{{$wiz_board->created_at}}</td>
                    <td>{{$wiz_board->getUserName->name}}</td>
                </tr>
                @endforeach
            </tread>
        </table>
    </div>
    <div class="row" >
        {{ $wiz_boards->links() }}
        {{-- <div class="pagination col-md-8">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div> --}}
        
        <div class="bt col-md-4">
        <button type="button" class="btn juicy-peach-gradient" style="float: right"
                onclick="window.location='{{url('create_form')}}'">글쓰기</button>
        </div>
    </div>
    
</div>
@endsection


@section('script')

@endsection