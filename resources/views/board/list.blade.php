@extends('layouts.app')
@section('title', '掲示板リスト')

@section('loginUI')
    @include('layouts.user')
@endsection

@section('style')
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1>Wiz Board</h1>
    <div class="table-responsive table--no-card m-b-40" style="margin-top:4%;">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
                <th>Writer</th>
            </tr>
            </thead>
            <tbody>
                @foreach($wiz_boards as $wiz_board)
                <tr>
                    <td>
                        <a href="{{ route('board.show', ['id'=> $wiz_board->id]) }}">{{$wiz_board->title}}</a>
                    </td>
                    <td>{{$wiz_board->content}}</td>
                    <td>
                        {{ $wiz_board->updated_at ? date("F j, Y, g:i a", strtotime($wiz_board->updated_at)) : date("F j, Y, g:i a", strtotime($wiz_board->created_at))}}
                    </td>
                    <td>{{$wiz_board->getUserName->name}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <div class="row" >
        {{ $wiz_boards->links() }}
        <div class=" col-md-4">
        <button type="button" class="button" style="float: right"
                onclick="window.location='{{url('create_form')}}'">モーメントを作る</button>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection