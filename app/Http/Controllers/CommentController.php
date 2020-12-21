<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        if (Auth::user() == null) {
            return redirect(route('login'));
        }else {
            
            $userId = Auth::user()->id;
        }

        // 실패했을 경우 입력값이 NULL 일경우
        if(empty($request->content) || empty($request->post_id) || empty($userId)) {
            $nullData = array();
            $nullData['content'] = $request->content;
            $nullData['post_id'] = $request->post_id;
            $nullData['userId'] = $userId;
            return response()->json(array('success' => false, 'data' => $nullData));
        }

        // 데이터 추가
        Comment::insert([
            'comment_writer_id'     => $userId,
            'post_id'               => $request->post_id,
            'content'               => $request->content,
            'created_at'            => date("Y-m-d h:i:s", time())
        ]);


        // 추가한 데이터를 조회
        $data = Comment::where('post_id', $request->post_id)
                        ->where('content', $request->content)
                        ->where('comment_writer_id', $userId)
                        ->orderBy('id', 'desc')
                        ->first(); 

        // 데이터 추가
        $data['time'] = date("F j, Y, g:i a", strtotime($data->created_at));
        $data['user_name'] = $data->getUserName->name;
        
        // json 으로 데이터 넘기기 
        return response()->json(array('success' => true, 'data' => $data)); 
    }

    public function delete(Request $request)
    {
        Comment::where('id', $request->id)->delete();

        return response()->json(array('success' => true)); 
    }

    public function update(Request $request)
    {
        Comment::where('id', $request->id)->update([
            'content'           => $request->content,
            'updated_at'        => date("Y-m-d h:i:s", time())
        ]);

        $data = Comment::where('id', $request->id)->first();
        
        return response()->json(array('success' => true, 'data' => $data)); 

    }
}