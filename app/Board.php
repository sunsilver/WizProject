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

    public function comments()
    {
        // 하나의 게시글에는 여러개의 댓글을 가진다
        return $this->hasMany('App\Comment', 'post_id', 'id');
    }
    
    public function getUserName()
    {
        // 하나의 게시글에는 1명의 작성자를 가진다. 
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    

}
