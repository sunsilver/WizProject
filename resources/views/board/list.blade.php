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
        <table class="table table-borderless table-striped table-earning">
            <thread>
                <tr style="background-color: #0f62a7;">
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date</th>
                </tr>
                @foreach($wiz_boards as $wiz_board)
                <tr>
                    <td><a href="{{ url('view') }}/{{ $wiz_board->id }}">{{$wiz_board->title}}</a></td>
                    <td>{{$wiz_board->content}}</td>
                    <td>{{$wiz_board->created_at}}</td>
                </tr>

                @endforeach
                </tread>
        </table>
    </div>
    <div class="bt">
    <button type="button" class="btn juicy-peach-gradient"
            onclick="window.location='{{url('create_form')}}'">글쓰기</button>
    </div>
    
</div>
@endsection


@section('script')
<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}" defer></script>

@endsection