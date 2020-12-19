@extends('layouts.app')
@section('title', 'title name')
@section('style')
  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section( 'content')
<div class="content">
    <div class="title">Diary</div>
    <div class="table-responsive table--no-card m-b-40" style="margin-top:4%;">
        <table class="table table-borderless table-striped table-earning">
            <thread>
                <tr style="background-color: #0f62a7;">
                    <th style="color:white">Title</th>
                    <th style="color:white">Content</th>
                    <th style="color:white">Date</th>
                </tr>
                @foreach($articles as $article)
                <tr>
                    <td><a href="{{ url('board/view') }}/{{ $article->id }}">{{$article->title}}</a></td>
                    <td>{{$article->content}}</td>
                    <td>{{$article->created_at}}</td>
                </tr>

                @endforeach
                </tread>
        </table>
    </div>
    <div class="bt">
    <button type="button" class="btn juicy-peach-gradient"
            onclick="window.location='{{url('board/create_form')}}'">글쓰기</button>
    </div>
    
</div>
@endsection


@section('script')
<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}" defer></script>

@endsection