<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = "wiz_boards";

    protected $fillable = [
        'user_id', 'title', 'content','created_at'
    ];

    public $timestamps = true;


    // 아까 분명 하나 조회했는데 
    public function comments()
    {
        // User::get(); 이런거
        // hasMany 는 
        // @foreach ( $wiz_boards->comments as $item )
        return $this->hasMany('App\Comment', 'post_id', 'id');
        // 저기로 넘어왔잖아요 

    }

    public function getUserName()
    {
        // hasOne은 User::first(); 
        // 하나의 게시글에는 1명의 작성자를 가진다. 
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    

}
