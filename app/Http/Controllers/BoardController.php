<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //게시글 리스트 )
        $wiz_boards =  Board::where('users')
        ->join('wiz_boards','users.id','=','wiz_boards.user_id')
        ->select('users.name')
        ->paginate(10);
        dd($title);
        return view('board.list')->with('wiz_boards', $wiz_boards);
    }        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //뷰 파일 경로
        return view('board.create_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Board::insert([
            'title'=>$request->title,
            'content'=>$request->content,
            'user_id'=>1
            ]);
        return redirect(route('list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wiz_boards = DB::table('wiz_boards')->where('id',$id)->first();
        return view('board.view')->with('wiz_boards', $wiz_boards);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wiz_boards = DB::table('wiz_boards')->where('id',$id)->first();
        return view('board.edit_form')->with('wiz_boards',$wiz_boards);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('wiz_boards')->where('id',$id)->update(['title'=> $request->title, 'content'=> $request->content]);
        return redirect('view/' .$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('wiz_boards')->where('id',$id)->delete();
        return redirect('list');
    }
}


